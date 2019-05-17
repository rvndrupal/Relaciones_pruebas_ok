<?php

namespace App\Repositories;

use App\Models\Curso;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CursoRepository
 * @package App\Repositories
 * @version May 17, 2019, 5:14 am UTC
 *
 * @method Curso findWithoutFail($id, $columns = ['*'])
 * @method Curso find($id, $columns = ['*'])
 * @method Curso first($columns = ['*'])
*/
class CursoRepository extends BaseRepository
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
        return Curso::class;
    }
}
