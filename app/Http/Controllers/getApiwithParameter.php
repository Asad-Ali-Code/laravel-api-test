<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;
class getApiwithParameter extends Controller
{
    //
    function getApiwithPara($name=null){
        return $name?device::where('name',"like", "%".$name."%")->get():device::all();
    }
}
