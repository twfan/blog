<?php 
namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;


class Permission_users extends Model{

	protected $table = 'permission_users';
	protected $fillable = ['user_id','permission_id'];
    
    public function user()
    {
    	return $this->belongsTo('App\Models\Users');
    }

    public function permission()
    {
    	return $this->belongsTo('App\Models\Permission');
    }

}


?>