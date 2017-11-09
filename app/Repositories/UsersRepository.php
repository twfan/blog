<?php 
namespace App\Repositories;

use App\Models\Users;
use App\Repositories\EloquentRepository;


class UsersRepository extends EloquentRepository
{
	public function __construct(Users $model)
	{
		parent::__construct($model);
	}

	public function deleteById($id)
	{
		Users::find($id)->delete();
	}

	public function updateById($request)
	{
		/*dd($request->name);*/
		$users = Users::find($request->id);
		$users->name = $request->name;
		$users->email = $request->email;
		$users->password = bcrypt($request->password);
		$users->save();
	}

	public function getByEmail($request)
	{
		$users = $this->model->where('email', $request->email)->first();	
		return $users;
	}

}