<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Walikelas
 * @package App\Models
 * @version April 21, 2020, 8:12 am UTC
 *
 * @property \App\Models\Guru idguru
 * @property \App\Models\Kela idkelas
 * @property \Illuminate\Database\Eloquent\Collection prodis
 * @property integer idkelas
 * @property integer idguru
 */
class Walikelas extends Model
{
    // use SoftDeletes;

    public $table = 'walikelas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idkelas',
        'idguru'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idwalikelas' => 'integer',
        'idkelas' => 'integer',
        'idguru' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idkelas' => 'required',
        'idguru' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idguru()
    {
        return $this->belongsTo(\App\Models\Guru::class, 'idguru');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idkelas()
    {
        return $this->belongsTo(\App\Models\Kela::class, 'idkelas');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function prodis()
    {
        return $this->belongsToMany(\App\Models\Prodi::class, 'kelas');
    }
}
