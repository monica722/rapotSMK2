<?php

namespace App\Repositories;

use App\Models\Jurusan;
use App\Repositories\BaseRepository;

/**
 * Class JurusanRepository
 * @package App\Repositories
 * @version April 21, 2020, 8:05 am UTC
*/

class JurusanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama'
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
        return Jurusan::class;
    }
}
