<?php

namespace house\Http\Controllers\Auth;

use house\User;
use house\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		$this->redirectAfterLogout = route('auth.login');
		$this->redirectTo = route('backend.dashboard');
		
        $this->middleware('guest', ['except' => 'getLogout']);
    }
}
