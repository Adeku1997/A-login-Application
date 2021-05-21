<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
use function PHPUnit\Framework\logicalNot;

class LoginController extends Controller
{
    /**
     * show login form
     *
     * @return View
     */
    public function showLoginForm(): View
    {
        return view('login');
    }

    /**
     * log the user in
     *
     * @param Request $request
     */
    public function login(Request $request): RedirectResponse
    {
        $this->validateUser($request);
      return $this->authenticateUser($request);
    }

    /**
     * validating the user data
     *
     * @param Request $request
     */
    public function validateUser(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    }

    /**
     * authenticate the user before logging in
     *
     */
    public function authenticateUser(Request $request): RedirectResponse
    {
        $userData = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];

        if (Auth::attempt($userData)){
            $request->session()->regenerate();
            return redirect()->route('home')->with('msg','You are now logged in');
        }

        return redirect()->back()->withErrors([
            'email' =>  'The provided email and password do not match',
        ]);

    }

    /**
     * logging out the user
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }

}



