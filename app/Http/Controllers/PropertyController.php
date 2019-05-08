<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    //
    public function forSale(){
        $properties=Property::where('status','sale')->get();
        return response()->json(["properties"=>$properties]);
    }
}
