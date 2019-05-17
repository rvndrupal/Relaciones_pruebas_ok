<?php

namespace App\Repositories;

use App\Models\Profesor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProfesorRepository
 * @package App\Repositories
 * @version May 17, 2019, 5:32 am UTC
 *
 * @method Profesor findWithoutFail($id, $columns = ['*'])
 * @method Profesor find($id, $columns = ['*'])
 * @method Profesor first($columns = ['*'])
*/
class ProfesorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Profesor::class;
    }
}
