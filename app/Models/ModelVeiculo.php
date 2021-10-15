<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelVeiculo extends Model
{
    use HasFactory;

    protected $table='Veiculo';

    protected $fillable=['marca','id_user','modelo','placa', 'ano', 'cor'];

    public function relUsers()
    {
        return $this->hasOne('App\User','id','id_user');
    }
}
