<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $cpf
 * @property string $ctps
 * @property string $deparment
 * @property string $tel
 */
class Users extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'cpf', 'ctps', 'department', 'tel'];

}
