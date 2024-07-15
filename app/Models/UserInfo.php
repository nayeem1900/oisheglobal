<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'f_name',
        'm_name',
        'nid',
        'passport',
        'pic',
        'user_id',
        'address',
        'country_id',
        'branch_id',
        'agent_id',
        'created_by',
        'updated_by',
    ];

    public function user (){
        return $this->hasMany('App\Models\User');

    }


}
