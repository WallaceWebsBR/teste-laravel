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
 * @property string $tel2
 * @property string $tel3
 * @property string $tel4
 * @property string $tel5
 */

class Users extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'cpf', 'ctps', 'department', 'tel', 'tel2', 'tel3', 'tel4', 'tel5'];

}
