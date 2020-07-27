<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Matapelajaran
 * @package App\Models
 * @version May 6, 2020, 6:34 am UTC
 *
 * @property \App\Models\Guru idguru
 * @property \Illuminate\Database\Eloquent\Collection raports
 * @property string nama
 * @property string semester
 * @property integer idguru
 */
class Matapelajaran extends Model
{
    // use SoftDeletes;

    public $table = 'matapelajaran';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'semester',
        'idguru'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idmapel' => 'integer',
        'nama' => 'string',
        'semester' => 'string',
        'idguru' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'semester' => 'required',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function raports()
    {
        return $this->hasMany(\App\Models\Raport::class, 'idmapel');
    }
}
