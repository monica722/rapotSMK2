<?php

namespace App\Repositories;

use App\Models\Raport;
use App\Repositories\BaseRepository;

/**
 * Class RaportRepository
 * @package App\Repositories
 * @version May 6, 2020, 6:35 am UTC
*/

class RaportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idsiswa',
        'idmapel',
        'idsemester',
        'total_nilai_tugas',
        'nilai_uts',
        'nilai_uas',
        'bobot_nilai',
        'predikat'
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
        return Raport::class;
    }
}
