<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Raport
 * @package App\Models
 * @version May 6, 2020, 6:35 am UTC
 *
 * @property \App\Models\Matapelajaran idmapel
 * @property \App\Models\Semester idsemester
 * @property \App\Models\Siswa idsiswa
 * @property integer idsiswa
 * @property integer idmapel
 * @property integer idsemester
 * @property number total_nilai_tugas
 * @property number nilai_uts
 * @property number nilai_uas
 * @property string bobot_nilai
 * @property string predikat
 */
class Raport extends Model
{
    // use SoftDeletes;

    public $table = 'raport';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idraport' => 'integer',
        'idsiswa' => 'integer',
        'idmapel' => 'integer',
        'idsemester' => 'integer',
        'total_nilai_tugas' => 'float',
        'nilai_uts' => 'float',
        'nilai_uas' => 'float',
        'bobot_nilai' => 'string',
        'predikat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idsiswa' => 'required',
        'idmapel' => 'required',
        'idsemester' => 'required',
        'total_nilai_tugas' => 'required',
        'nilai_uts' => 'required',
        'nilai_uas' => 'required',
        'bobot_nilai' => 'required',
        'predikat' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idmapel()
    {
        return $this->belongsTo(\App\Models\Matapelajaran::class, 'idmapel');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idsemester()
    {
        return $this->belongsTo(\App\Models\Semester::class, 'idsemester');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idsiswa()
    {
        return $this->belongsTo(\App\Models\Siswa::class, 'idsiswa');
    }
}
