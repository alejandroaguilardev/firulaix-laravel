<?php

namespace App\Http\Controllers;

use App\Models\ResquestRegister;
use Illuminate\Http\Request;
use App\Mail\RequestMailable;
use Illuminate\Support\Facades\Mail;

class RequestRegisterController extends Controller
{
    public function index()
    {
        $requestRegister = ResquestRegister::where("status", "waiting")
            ->paginate(5);

        return response()->json($requestRegister, 200);
    }


    public function update(Request $request, $id)
    {
        $requestRegister = ResquestRegister::find($id);
        $requestRegister->status = "approved";
        $requestRegister->update();

        $this->sendEmail($requestRegister, $request->email);
        return response()->json(["status" => $request->all()], 200);
    }

    public function destroy(Request $request, $id)
    {
        $requestRegister = ResquestRegister::find($id);
        $requestRegister->status = "rejected";
        $requestRegister->update();

        $this->sendEmail($requestRegister, $request->email);
        return response()->json(["status" => $request->all()], 200);
    }


    public function store(Request $request)
    {
        $status = 400;
        if (
            !$this->validateParams($request->adopter, $request->pet, $request->email)
            || !$this->recaptcha($request->captcha)
            || !$request->hasFile("image")
            || !$request->hasFile("front")
            || !$request->hasFile("reverse")
            || (!$request->hasFile("payable") && !$request->tx)
                ) {
            return response()->json(["ok" => false], $status);
        }
        try {
            $payable = $request->hasFile("payable") ?  $this->saveImg("payable", $request->file("payable")) : "";
            $pedigree = $request->hasFile("pedigree") ?  $this->saveImg("pedigree", $request->file("pedigree")) : "";
            $image =  $this->saveImg("image", $request->file("image"));
            $front =  $this->saveImg("front", $request->file("front"));
            $reverse =  $this->saveImg("reverse", $request->file("reverse"));

            $adopter = json_decode(base64_decode($request->adopter));
            $adopter->front = $front;
            $adopter->reverse = $reverse;
            $adopter = base64_encode(json_encode($adopter));

            $pet = json_decode(base64_decode($request->pet));
            $pet->image = $image;
            $pet = base64_encode(json_encode($pet));

            $requestRegister = new ResquestRegister();
            $requestRegister->adopter = trim($adopter);
            $requestRegister->pet = trim($pet);
            $requestRegister->payable = trim($payable);
            $requestRegister->pedigree = trim($pedigree);
            $requestRegister->email = trim($request->email);
            $requestRegister->tx = trim($request->tx);
            $requestRegister->status = "waiting";
            $requestRegister->cod = trim($request->cod);
            $status = 200;
            $this->sendEmail($requestRegister, $request->email);
            $requestRegister->save();
            return response()->json(["ok" => true], $status);
        } catch (\Throwable $th) {
            return response()->json(["ok" => false, "error" => $th],  500);
        }
    }


    private function saveImg($name, $image)
    {
        $name = "images/" . $name . "/" . now() . "." . $image->guessExtension();
        $this->imageSave($name, $image);
        return $name;
    }


    private function validateParams($adopter, $pet, $email)
    {
        if (empty($adopter) || empty($pet) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    public function sendEmail($requestRegister, $email)
    {
        $mail = new RequestMailable($requestRegister);
        Mail::to($email)->send($mail);
    }
}
