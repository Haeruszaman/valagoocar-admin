<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin_user extends Model {

    protected $table = 'admin';
    public $timestamps = false;

    public function rolesOne()
    {
        return $this->hasOne('App\Models\User_roles', 'name', 'roles');
    }

}