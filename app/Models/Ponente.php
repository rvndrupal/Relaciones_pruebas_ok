<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Ponente
 * @package App\Models
 * @version May 9, 2019, 8:53 pm UTC
 *
 * @property string nombre
 * @property string pais
 * @property string foto
 */
class Ponente extends Model
{

    public $table = 'ponentes';
    


    public $fillable = [
        'nombre',
        'pais',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'pais' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'pais' => 'required'
    ];

    
}
