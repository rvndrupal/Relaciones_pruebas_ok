<?php

namespace App\Repositories;

use App\Models\Sertore;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SertoreRepository
 * @package App\Repositories
 * @version May 17, 2019, 4:08 am UTC
 *
 * @method Sertore findWithoutFail($id, $columns = ['*'])
 * @method Sertore find($id, $columns = ['*'])
 * @method Sertore first($columns = ['*'])
*/
class SertoreRepository extends BaseRepository
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
        return Sertore::class;
    }
}
