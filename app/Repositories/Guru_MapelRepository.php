<?php

namespace App\Repositories;

use App\Models\Guru_Mapel;
use App\Repositories\BaseRepository;

/**
 * Class Guru_MapelRepository
 * @package App\Repositories
 * @version June 1, 2020, 7:14 am UTC
*/

class Guru_MapelRepository extends BaseRepository
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
        return Guru_Mapel::class;
    }
}
