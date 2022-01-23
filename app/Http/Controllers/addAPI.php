<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;
class addAPI extends Controller
{
    //
    function addAPI(Request $req){
    $device=new device;
    $device->name=$req->name;
    $device->model=$req->model;
    $result=$device->save();
    if($result){
    return ["Result"=>"save successfully"];
    }
    else{
        return ["Result"=>"save failed"];
    }
}
}
