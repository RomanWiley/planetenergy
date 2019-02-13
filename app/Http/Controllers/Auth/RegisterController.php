<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'isCompany' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'company' => ['required_if:isCompany,1'],
            'phonenumber' => ['string', 'max:10', 'nullable', 'required_if:isCompany,1'],
            'VATnumber' => ['regex:/^NL[0-9]{9}B[0-9]{2}$/', 'nullable', 'required_if:isCompany,1'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'isCompany' => $data['isCompany'],
            'name' => $data['name'],
            'phonenumber' => $data['phonenumber'],
            'VATnumber' => $data['VATnumber'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
