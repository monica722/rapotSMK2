<?php

namespace App\Repositories;

use App\Models\Walikelas;
use App\Repositories\BaseRepository;

/**
 * Class WalikelasRepository
 * @package App\Repositories
 * @version April 21, 2020, 8:12 am UTC
*/

class WalikelasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idkelas',
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
        return Walikelas::class;
    }
}
