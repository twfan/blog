<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Services\AuthServices;
use App\Services\UserServices;
use App\Repositories\UsersRepository;
use Illuminate\Http\Request;
use Validator;

class AuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */

    protected $service, $repository;

    public function __construct(AuthServices $service, UsersRepository $repository)
    {
        $this->service = $service;
        $this->repository = $repository;
    }

    public function register()
    {
        return view('form_register');
    }

    public function tampil_login()
    {
        return view('form_login');
    }

    public function validate_register(Request $request)
    {
        $rules = [
            'name'      => 'required',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return $validator->messages();
        }
        return 'valid';
    }

    public function proses_register(Request $request)
    {
        $validator = $this->validate_register($request);
        if($validator=='valid')
        {
            $this->service->add_member($request);
            return redirect('register')->with('status', 'berhasil daftar!');
        }else
        {
            return redirect('register')->with('status', 'gagal daftar!');
        }
       
    }

    public function validate_login(Request $request)
    {
        $rules = [
            'email'     => 'required|email',
            'password'  => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
         if($validator->fails()){
            return $validator->messages();
        }
        return 'valid';
    }
    public function login(Request $request)
    {
        $validator = $this->validate_login($request);
        if($validator=='valid'){
            $login = $this->service->login($request);
            $data_user = $this->repository->getByEmail($request);
            return redirect()->route('view_home');
        }else
        {
            return redirect('login')->with('status', 'gagal login!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}