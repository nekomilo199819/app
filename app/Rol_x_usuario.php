<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol_x_usuario extends Model
{
    protected $table = 'roles_x_usuarios';
    protected $fillable = ['cod_usuario','cod_rol'];
    protected $primaryKey = 'rol_por_usuario';
}
