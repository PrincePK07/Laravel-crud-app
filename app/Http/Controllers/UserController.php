<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function validation(Request $request){
        $fields = $request->validate([
            "name"=>["required", "min:3","max:15"],
            "email"=>["required","email"],
            "password"=>["required","min:6","max:14"],
            "phone"=>["required"]
        ]);
        User::create($fields);
        return"valid sucesss";
}
}
