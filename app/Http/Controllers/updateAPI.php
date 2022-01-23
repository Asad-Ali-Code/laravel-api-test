<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;
class updateAPI extends Controller
{
    //
    function updateAPI(Request $req){
        $update=device::find($req->id);
        $update->name=$req->name;
        $update->model=$req->model;
        $result=$update->save();
        if($result){
        return ["Result"=>"update successfully"];
        }
        else{
            return ["Result"=>"update failed"];
        }
    }
    function deleteAPI($id){
        $delete=device::find($id);
        $result=$delete->delete();
        if($result){
        return ["Result"=>"delete successfully"];
        }
        else{
            return ["Result"=>"delete failed"];
        }
    }
}
