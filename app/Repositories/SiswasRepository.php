<?php

namespace App\Repositories;

use App\Models\Siswas;
use App\Repositories\BaseRepository;

/**
 * Class SiswasRepository
 * @package App\Repositories
 * @version May 6, 2020, 6:33 am UTC
*/

class SiswasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nis',
        'iduser',
        'idkelas',
        'idprodi',
        'tanggal_masuk',
        'angkatan_thn'
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
        return Siswas::class;
    }
}
