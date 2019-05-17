<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Profesor
 * @package App\Models
 * @version May 17, 2019, 5:32 am UTC
 *
 * @property string nombre
 * @property string descripcion
 */
class Profesor extends Model
{

    public $table = 'profesors';



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

    public function cursos()
    {
        return $this->belongsToMany('App\Models\Curso');
    }

}
