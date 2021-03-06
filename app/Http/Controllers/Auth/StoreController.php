<?php

namespace App\Http\Controllers\Auth;

use App\Store;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;


class StoreController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Store Controller
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
    protected $redirectTo = '/';

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
            'businessName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:Store',
            'password' => 'required|string|min:6|confirmed',
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
       $user = Store::create([
            'email' => $data['email'],
            'businessName' => $data['businessName'],
            'street_addr' => $data['street_addr'],
            'suburb' => $data['suburb'],
            'state' => $data['state'],
            'post_code' => $data['post_code'],
            'contact_no' => $data['contact_no'],
        ]);

        $user->userData = User::create([
            
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => 'StoreOwner',
            'role' => 'null',
        ]);

        return $user;
        // return redirect()->route('welcome');
   }


}
