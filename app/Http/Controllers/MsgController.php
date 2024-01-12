<?php

namespace App\Http\Controllers;

use App\Models\Msg;
use Illuminate\Http\Request;

class MsgController extends Controller
{
    public function insertMsg(Request $request) {
        $data = $request->validate([
            "name" => ["required", "max:255"],
            "subject" => ["required"],
            "email" => ["required", "email", "max:255"],
            "msg" => ["required"]
        ]);


        $name = $data['name'];
        $subject = $data["subject"];
        $email = $data["email"];
        $msg = $data["msg"];

        $message = new Msg();
        $message->name = $name;
        $message->subject = $subject;
        $message->email = $email;
        $message->message = $msg;
        $message->save();

        return redirect("/");
    }
}
