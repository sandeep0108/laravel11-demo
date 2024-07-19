<?php

namespace App\Models;

use Hexters\HexaLite\Models\HexaAdmin;
use Hexters\HexaLite\Models\HexaRole;
use Hexters\HexaLite\Models\HexaRoleAdmin;

class RoleAdmin extends HexaRoleAdmin
{
protected $table='hexa_roles';

protected $fillable = [
    'name',
    'status'
];
}
