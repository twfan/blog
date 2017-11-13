<?php 
namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;


class Permission extends Model{

	protected $table = 'permission';
    
    
    public function permission_user()
    {
    	return $this->hasMany('App\Models\Permission');
    }

}


?>