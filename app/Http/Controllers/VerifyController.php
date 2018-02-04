<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class VerifyController extends Controller
{
    /**
     * 
     *Verify the user with a given token
     * 
     * @param string $token
     * 
     * @return Response
     */
    public function verify($token)
    {
        User::where('token', $token)->firstorFail()
        ->update(['token' => null]);

        return redirect()
        ->route('home')
        ->with('success', 'Account verified!');
    }
}
