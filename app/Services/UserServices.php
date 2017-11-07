<?php 
	
namespace App\Services;

use App\Models\User;

class UserServices
{
	public function add_member($request)
	{
		$user = User::create($request->all());
		$user->save();
	}
}
?>