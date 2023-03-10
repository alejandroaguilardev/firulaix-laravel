<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = 400;
        if (!$this->validateParams($request->email, $request->captcha, $request->address)) {
            return response()->json([$request->all(), "status" => $status], $status);
        }
        
        if ($this->recaptcha($request->captcha)) {
            $id = Invitation::where('email','=',trim($request->email))->get();
            $id2 = Invitation::where('address','=',trim($request->address))->get();

            $status = 201;
            if(!count($id)>0 && !count($id2)>0){
                $invitations = new Invitation();
                $invitations->email = trim($request->email);
                $invitations->address = trim($request->address);
                $invitations->save();
                $status = 200;
            }
          
        }else{
        return response()->json(["captha"=>"error", "status" => $status], $status);
        }
        return response()->json(["status" => $status], $status);
    }

    public function recaptcha($captcha)
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $secretkey = "6LeBltsdAAAAAOoSGmBMBlIE5LMR8DvvTV8FvP9A";
        $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip"));
        return  $response->success;
    }

    public function validateParams($email, $captcha, $address)
    {
        $bandera = true;
        if (empty($captcha) || !filter_var($email, FILTER_VALIDATE_EMAIL) ||  $address == "") {
            $bandera = false;
        }
        return $bandera;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emails  $emails
     * @return \Illuminate\Http\Response
     */
    public function show(Emails $emails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emails  $emails
     * @return \Illuminate\Http\Response
     */
    public function edit(Emails $emails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emails  $emails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emails $emails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emails  $emails
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emails $emails)
    {
        //
    }
}
