<?php

namespace App\Repositories;

use App\Models\Siswa;
use App\Repositories\BaseRepository;

/**
 * Class SiswaRepository
 * @package App\Repositories
 * @version January 28, 2020, 6:34 am UTC
*/

class SiswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nis',
        'nama',
        'angkatan_th',
        'idkelas',
        'idprodi',
        'tempatlahir',
        'tanggallahir',
        'alamat',
        'email',
        'nomorhp'
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
        return Siswa::class;
    }
}
