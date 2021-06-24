<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $codigo
 * @property $descripcion
 * @property $existencia
 * @property $precio
 * @property $poseeiva
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'descripcion' => 'required',
		'existencia' => 'required',
		'precio' => 'required',
		'poseeiva' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','descripcion','existencia','precio','poseeiva'];



}
