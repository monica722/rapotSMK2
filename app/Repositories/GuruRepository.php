<?php

namespace App\Repositories;

use App\Models\Guru;
use App\Repositories\BaseRepository;

/**
 * Class GuruRepository
 * @package App\Repositories
 * @version June 1, 2020, 7:22 am UTC
*/

class GuruRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nip',
        'iduser'
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
        return Guru::class;
    }
}
