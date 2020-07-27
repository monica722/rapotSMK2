<?php

namespace App\Repositories;

use App\Models\Nilairaport;
use App\Repositories\BaseRepository;

/**
 * Class NilairaportRepository
 * @package App\Repositories
 * @version February 4, 2020, 4:25 am UTC
*/

class NilairaportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'iddetail_rapot',
        'nilai_tugas',
        'nilai_uas',
        'nilai_uts'
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
        return Nilairaport::class;
    }
}
