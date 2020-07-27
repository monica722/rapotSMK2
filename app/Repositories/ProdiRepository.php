<?php

namespace App\Repositories;

use App\Models\Prodi;
use App\Repositories\BaseRepository;

/**
 * Class ProdiRepository
 * @package App\Repositories
 * @version May 6, 2020, 6:35 am UTC
*/

class ProdiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idjurusan',
        'nama',
        'kode_label_prodi',
        'kode_jurusan_prodi'
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
        return Prodi::class;
    }
}
