<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Curso
 * @package App\Models
 * @version May 17, 2019, 5:14 am UTC
 *
 * @property string nombre
 * @property string descripcion
 */
class Curso extends Model
{

    public $table = 'cursos';



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

    public function profesores()
    {
        return $this->belongsToMany('App\Models\Profesor');
    }


}
