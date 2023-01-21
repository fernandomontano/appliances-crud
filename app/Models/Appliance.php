<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Appliance
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $brand
 * @property $price
 * @property $stock
 * @property $file_path
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Appliance extends Model
{
    
    static $rules = [
		'name' => 'required',
		'description' => 'required',
		'brand' => 'required',
		'price' => 'required',
		'stock' => 'required',
		'file_path' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','brand','price','stock','file_path'];



}
