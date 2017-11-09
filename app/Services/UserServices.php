<?php 
	
namespace App\Services;

use App\Models\Users;

class UserServices
{
	public function add_member($request)
	{
		$user = Users::create($request->all());
		$user->password = bcrypt($request->password);
		$user->save();
	}
}
?>