<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Reg;

class RegController extends Controller
{
    public function addUsers(Request $request)
    {
        $image_link   = 'uploads';
        // $getAdhaarFileName         = pathinfo($request->adhaar_upload->getClientOriginalName(),PATHINFO_FILENAME); 
        // $getAdhaarFileExt          = strtolower($request->adhaar_upload->getClientOriginalExtension());
        // $getPanFileName         = pathinfo($request->pan_upload->getClientOriginalName(),PATHINFO_FILENAME); 
        // $getPanFileExt          = strtolower($request->pan_upload->getClientOriginalExtension());

        // $uploadedAdhaarFile        = time().'_'.rand(0000,9999).'.'.$getAdhaarFileExt;
        // $uploadedPanFile        = time().'_'.rand(0000,9999).'.'.$getPanFileExt;
        // $uploadDir           = public_path($image_link);
        // $request->adhaar_upload->move(public_path($image_link), $uploadedAdhaarFile);                
        // $request->pan_upload->move(public_path($image_link), $uploadedPanFile);                
        $Reg                = new Reg;
        $Reg->first_name = $request->first_name;
        $Reg->last_name = $request->last_name;
        $Reg->email = $request->email;
        $Reg->mobile = $request->mobile;
        $Reg->dob = $request->dob;
        $Reg->password = $request->password;
        $Reg->address1 = $request->address1;
        $Reg->address2 = $request->address2;
        $Reg->city = $request->city;
        $Reg->state = $request->state;
        $Reg->zip = $request->zip;
        $Reg->adhaar = $request->adhaar;
        // $Reg->adhaar_upload = $uploadedAdhaarFile;
        $Reg->pan = $request->pan;
        // $Reg->pan_upload = $uploadedPanFile;
        $Reg->pan = $request->pan;
        $Reg->card_holder_name = $request->card_holder_name;
        $Reg->card_number = $request->card_number;
        $Reg->cvc = $request->cvc;
        $Reg->month = $request->month;
        $Reg->year = $request->year;
        $Reg->save();
        return \Response::json(array("success"));
    }
}
