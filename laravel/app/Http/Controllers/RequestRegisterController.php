<?php

namespace App\Http\Controllers;

use App\Models\ResquestRegister;
use Illuminate\Http\Request;

class RequestRegisterController extends Controller
{
    public function store(Request $request)
    {
        $status = 400;
        if (
            !$this->validateParams($request->adopter, $request->pet, $request->email)
            || !$request->hasFile("image")
            || !$request->hasFile("front")
            || !$request->hasFile("reverse")
            || !$request->hasFile("payable")
        ) {
            return response()->json(["ok" => false], $status);
        }
        try {
            $image =  $this->saveImg("image", $request->file("image"));
            $front =  $this->saveImg("front", $request->file("front"));
            $reverse =  $this->saveImg("reverse", $request->file("reverse"));
            $payable =  $this->saveImg("payable", $request->file("payable"));

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
            $requestRegister->email = trim($request->email);
            $requestRegister->save();
            $status = 200;
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
}
