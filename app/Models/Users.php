<?php 
namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;


class Users extends Model{

	protected $table = 'users';
    protected $fillable = ['name', 'email','password', 'remember_token','permission_id'];

    public function permission()
    {
    	return $this->hasOne('App\Models\Permission_users');
    }

}


?>