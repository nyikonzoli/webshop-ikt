<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function authentication(Request $request)
    {
        dd($request->all());
        $data = $request->validated();
        if (!Auth::attempt($data)){
            $request->session()->flash("danger", "Incorrect email or password!");
            ddd($request->session()->all());
            // return redirect()->back()->with('danger', "Incorrect email or password!");
            return redirect()->back();
        }
        //$request->session()->flash("success", "You are now logged in!");
        return redirect()->back()->with('success', "You are now logged in!");
    }
}
