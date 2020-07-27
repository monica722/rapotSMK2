<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Prodi
 * @package App\Models
 * @version May 6, 2020, 6:35 am UTC
 *
 * @property \App\Models\Jurusan idjurusan
 * @property \Illuminate\Database\Eloquent\Collection walikelas
 * @property \Illuminate\Database\Eloquent\Collection siswas
 * @property integer idjurusan
 * @property string nama
 * @property string kode_label_prodi
 * @property integer kode_jurusan_prodi
 */
class Prodi extends Model
{
    // use SoftDeletes;

    public $table = 'prodi';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idjurusan',
        'nama',
        'kode_label_prodi',
        'kode_jurusan_prodi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idprodi' => 'integer',
        'idjurusan' => 'integer',
        'nama' => 'string',
        'kode_label_prodi' => 'string',
        'kode_jurusan_prodi' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idjurusan' => 'required',
        'nama' => 'required',
        'kode_label_prodi' => 'required',
        'kode_jurusan_prodi' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idjurusan()
    {
        return $this->belongsTo(\App\Models\Jurusan::class, 'idjurusan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function walikelas()
    {
        return $this->belongsToMany(\App\Models\Walikela::class, 'kelas');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function siswas()
    {
        return $this->hasMany(\App\Models\Siswa::class, 'idprodi');
    }
}
