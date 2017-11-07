<?php 
namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;


class Users extends Model{

	protected $table = 'users';
    protected $fillable = ['name', 'email','password', 'remember_token'];

    public function products()
    {
    	return $this->hasMany('App\Models\Products', 'user_id');
    }
}


?>