<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Sertore
 * @package App\Models
 * @version May 17, 2019, 4:08 am UTC
 *
 * @property string nombre
 * @property string descripcion
 */
class Sertore extends Model
{

    public $table = 'sertores';



    public $fillable = [
        'nombre',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'descripcion' => 'required'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }



}
