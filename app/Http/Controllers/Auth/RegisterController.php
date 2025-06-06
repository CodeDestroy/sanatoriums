<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/email/verify';

    /* protected $redirectTo = '/'; */
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
        //Добавить проверку 'name', 'secondName' и 'patronymicName' на латиницу. Если латиница - кидать ошибку
        return Validator::make($data, [
            'name' => 'required|string|max:255|regex:/[а-яё]/iu',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
            'secondName' => 'required|string|max:255|regex:/[а-яё]/iu',
            'patronymicName' => 'string|max:255|regex:/[а-яё]/iu',
            'phone' => ['required', 'string', 'unique:users'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'secondName' => $data['secondName'],
            'patronymicName' => $data['patronymicName'],
            'birthday' => $data['birthday'],
            'gender' => $data['gender'],
            'hasWhatsApp'=>false,
            'confirmed'=>false,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
        ]);

        /* $user->sendEmailVerificationNotification(); */
        event(new Registered($user));
        return $user;
    }
}
