<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePhone;
use App\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * @param Request $request
     */
    public function store(CreatePhone $request)
    {
        $phone = new Phone;
        $phone->contact_id = $request->contact_id;
        $phone->phone = $request->phone;
        $phone->save();
    }
}
