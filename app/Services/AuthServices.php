<?php 
namespace App\Services;

use Validator, Auth;
use App\Models\Users;
use App\Models\Permission_users;

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
		$member->permission_id = $request->permission;
		$member->remember_token = $request->_token;
		if($member->save())
		{
			$permission = Permission_users::create([
				'user_id' => $member->id,
				'permission_id' => $member->permission_id,
			]);	
			return "berhasil";
		}else
		{
			return "gagal";
		}
		
	}
}

 ?>

