<?php

namespace App\Repositories;

use App\Models\Detailraport;
use App\Repositories\BaseRepository;

/**
 * Class DetailraportRepository
 * @package App\Repositories
 * @version February 4, 2020, 4:35 am UTC
*/

class DetailraportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idrapot',
        'bobotnilai',
        'kodenilai'
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
        return Detailraport::class;
    }
}
