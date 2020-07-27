<?php

namespace App\Repositories;

use App\Models\Matapelajaran;
use App\Repositories\BaseRepository;

/**
 * Class MatapelajaranRepository
 * @package App\Repositories
 * @version May 6, 2020, 6:34 am UTC
*/

class MatapelajaranRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'semester',
        'idguru'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Matapelajaran::class;
    }
}
