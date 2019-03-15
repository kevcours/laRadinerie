<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
            //nom ds form
            'prenomInsc' => 'required|string|max:255',
            'nomInsc' => 'required|string|max:255',
            'mailUtilisateur' => 'required|string|email|max:255|unique:users',
            'passwordInsc' => 'required|string|min:6',
            'role' => 'required|string|max:255',
            'Newsletter'=>'max:255',
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
            //nom bbd -> nom ds form
            'prenomUtilisateur' => $data['prenomInsc'],
            'nomUtilisateur' => $data['nomInsc'],
            'mailUtilisateur' => $data['mailUtilisateur'],
            'mdpUtilisateur' => bcrypt($data['passwordInsc']),
            'role' => User::DEFAULT_TYPE,
            'newsletter' =>isset($data['Newsletter'])?1:0,
        ]);
    }
}
