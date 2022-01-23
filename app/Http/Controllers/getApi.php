<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;
class getApi extends Controller
{
    //
    function getApi(){
        return device::all();
    }
}
