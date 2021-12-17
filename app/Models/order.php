<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $guarded = array('id','user_id','inserted_at', 'updated_at', 'deleted_at');
    protected $table = 'order';
    const CREATED_AT = 'updated_at';
    public function getKeyType()
    {
        return 'string';
    }    
}
