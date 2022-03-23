<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterStoreRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(RegisterStoreRequest $request)
    {
        $validated = $request->validated();
        $validated["password"] = Hash::make($validated["password"]);
        $validated["user"] = "user";
        User::create($validated);
        return back();
    }
}
