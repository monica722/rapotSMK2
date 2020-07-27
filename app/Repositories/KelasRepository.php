<?php

namespace App\Repositories;

use App\Models\Kelas;
use App\Repositories\BaseRepository;

/**
 * Class KelasRepository
 * @package App\Repositories
 * @version April 21, 2020, 8:07 am UTC
*/

class KelasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'idprodi',
        'idwali_kelas'
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
        return Kelas::class;
    }
}
