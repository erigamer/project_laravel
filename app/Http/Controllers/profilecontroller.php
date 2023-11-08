<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilecontroller extends Controller
{
    public function profile(){
        return view("profile");
    }

    public function profiledosen(){
        return view("auth.profiledosen");
    }

    public function beritaksi(){
        return view("beritaksi");
    }





}
