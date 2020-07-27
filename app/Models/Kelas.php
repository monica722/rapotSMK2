<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Kelas
 * @package App\Models
 * @version April 21, 2020, 8:07 am UTC
 *
 * @property \App\Models\Prodi idprodi
 * @property \App\Models\Walikela idwaliKelas
 * @property \Illuminate\Database\Eloquent\Collection prodi1s
 * @property \Illuminate\Database\Eloquent\Collection guruMapels
 * @property string nama
 * @property integer idprodi
 * @property integer idwali_kelas
 */
class Kelas extends Model
{
    // use SoftDeletes;

    public $table = 'kelas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'idprodi',
        'idwali_kelas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idkelas' => 'integer',
        'nama' => 'string',
        'idprodi' => 'integer',
        'idwali_kelas' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'idprodi' => 'required',
        'idwali_kelas' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idprodi()
    {
        return $this->belongsTo(\App\Models\Prodi::class, 'idprodi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idwaliKelas()
    {
        return $this->belongsTo(\App\Models\Walikela::class, 'idwali_kelas');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function prodi1s()
    {
        return $this->belongsToMany(\App\Models\Prodi::class, 'siswas');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function guruMapels()
    {
        return $this->belongsToMany(\App\Models\GuruMapel::class, 'walikelas');
    }
}
