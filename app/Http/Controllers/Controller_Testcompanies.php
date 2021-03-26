<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Controller_Testcompanies extends Controller
{
    public function get(Request $request) {
        /*
        return response()->json([
            'testcompanies' => [
                'name' => 'lioncode',
                'address' => 'balkan',
                'phone' => '2311111251'
            ]
        ], 200);
        */

        return response()->json([
            'testcompanies' => DB::table('testcompanies')->get(['name','address','phone'])->toArray()
        ], 200);


    }
}
