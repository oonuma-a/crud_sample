<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $timestamps = false;
    protected $guarded = array('id','updated_at','deleted_at'); 
    protected $table = 'user';
    // public function name(){
    //     return id....;
    // }
    const CREATED_AT = 'updated_at';
    
    public function getKeyType()
    {
        return 'string';
    }       
}
