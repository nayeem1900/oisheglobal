<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
    use HasFactory;

    protected $fillable = [
        'f_name',
        'm_name',
        'nid',
        'passport',
        'image',
        'user_id',
        'address',
        'country_id',
        'branch_id',
        'agent_id',
        'created_by',
        'updated_by',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');

    }


    public function country()
    {
        return $this->belongsTo('App\Models\Country');

    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}