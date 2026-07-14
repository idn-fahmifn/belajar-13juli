<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\MobilRequest;

class MobilController extends Controller
{
    public function mobil(MobilRequest $request)
    {
        $data = $request->validated();
        return $data;
    }

    public function motor()
    {
        $data = "Ninja Zx";
        return view('motor', [
            'data' => $data
        ]);
    }
}
