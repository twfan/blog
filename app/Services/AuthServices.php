<?php 
namespace App\Services;

use Validator, Auth;
use App\Models\Users;

/**
* 
*/
class AuthServices
{
	
	public function login($request)
	{
		$credential = ['email' => $request->email, 'password' => $request->password];
		$login = Auth::attempt($credential);
		return $login;
	}

	public function add_member($request)
	{
		$member = Users::create($request->all());
		$member->password = bcrypt($request->password);
		$member->save();
	}
}

 ?>

