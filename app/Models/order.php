<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $guarded = array('id','inserted_at');
    protected $table = 'order';
    const CREATED_AT = 'updated_at';
    public function getKeyType()
    {
        return 'string';
    }    
}
