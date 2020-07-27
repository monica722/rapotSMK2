<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Siswas
 * @package App\Models
 * @version May 6, 2020, 6:33 am UTC
 *
 * @property \App\Models\Kela idkelas
 * @property \App\Models\Prodi idprodi
 * @property \App\Models\User iduser
 * @property \Illuminate\Database\Eloquent\Collection raports
 * @property integer nis
 * @property integer iduser
 * @property integer idkelas
 * @property integer idprodi
 * @property string tanggal_masuk
 * @property string angkatan_thn
 */
class Siswas extends Model
{
    // use SoftDeletes;

    public $table = 'siswas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nis',
        'iduser',
        'idkelas',
        'idprodi',
        'tanggal_masuk',
        'angkatan_thn'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idsiswa' => 'integer',
        'nis' => 'integer',
        'iduser' => 'integer',
        'idkelas' => 'integer',
        'idprodi' => 'integer',
        'tanggal_masuk' => 'date',
        'angkatan_thn' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nis' => 'required',
        'iduser' => 'required',
        'idkelas' => 'required',
        'idprodi' => 'required',
        'tanggal_masuk' => 'required',
        'angkatan_thn' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idkelas()
    {
        return $this->belongsTo(\App\Models\Kela::class, 'idkelas');
    }

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
    public function iduser()
    {
        return $this->belongsTo(\App\Models\User::class, 'iduser');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function raports()
    {
        return $this->hasMany(\App\Models\Raport::class, 'idsiswa');
    }
}
