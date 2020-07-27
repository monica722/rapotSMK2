<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Jurusan
 * @package App\Models
 * @version April 21, 2020, 8:05 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection prodis
 * @property string nama
 */
class Jurusan extends Model
{
    // use SoftDeletes;

    public $table = 'jurusan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idjurusan' => 'integer',
        'nama' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function prodis()
    {
        return $this->hasMany(\App\Models\Prodi::class, 'idjurusan');
    }
}
