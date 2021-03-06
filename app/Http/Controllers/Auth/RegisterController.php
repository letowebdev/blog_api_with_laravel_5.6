<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\Users\PrivateUserResource;
use App\Models\User;

class RegisterController extends Controller
{
    public function action(RegisterRequest $request)
    {
        $user = User::create($request->only('name', 'email', 'password', 'tagline', 'about', 'username', 'formatted_address', 'available_to_volunteer'));

        return new PrivateUserResource($user);
    }
}
