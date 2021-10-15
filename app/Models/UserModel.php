<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'User';

    public function relVeiculo()
    {
        return $this->hasMany('App\Models\ModelVeiculo', 'id_user');
    }
}
