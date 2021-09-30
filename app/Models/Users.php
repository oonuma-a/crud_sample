<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $incrementing = false;
    protected $table = 'user';
    // public function name(){
    //     return id....;
    // }
    public function getKeyType()
    {
        return 'string';
    }       
}
