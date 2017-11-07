<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserServices;
use App\Repositories\UsersRepository;
use Illuminate\Routing\Redirector;
use Validator;

class UserController extends Controller
{

	protected $service;
    protected $users;

	public function __construct(UserServices $service , UsersRepository $users)
	{
        $this->users = $users;
		$this->service = $service;
	}

    public function tampil_view()
    {
        $users = $this->users->getAll();
        return view('form_member',compact('users'));
    }

    public function baca_edit_view($id)
    {
        $member = $this->users->getById($id);
        $users = $this->users->getAll();
        return view('form_member',compact('users','member'));
    }

    public function validate_register(Request $request)
    {
       $rules = [
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required',
            'name'      => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return $validator->messages();
        }
        return 'valid';
    }

    public function new_member(Request $request)
    {
        $validator = $this->validate_register($request);
        if($validator=='valid')
        {
            $this->service->add_member($request);
            return redirect()->route('datamember');//route harus diberikan name
            /*return ['status' => 'success', 'result' => null, 'message' => 'Thank you for registering, please check your email to activate your account'];*/
           
        }else
        {
            return ['status' => 'error', 'result' => $validator, 'message' => 'Please check your input.'];
        }
       
    }

    public function delete_member($id)
    {

        $users = $this->users->deleteById($id);
        return redirect()->route('datamember');
    }

    public function simpan_edit_member(Request $request)
    {
        $users = $this->users->updateById($request);
        return redirect()->route('datamember');
    }
}
