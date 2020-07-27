<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Semester
 * @package App\Models
 * @version April 21, 2020, 8:11 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection raports
 * @property integer semester
 * @property string tahunsemester
 */
class Semester extends Model
{
    // use SoftDeletes;

    public $table = 'semester';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'semester',
        'tahunsemester'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idsemester' => 'integer',
        'semester' => 'integer',
        'tahunsemester' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'semester' => 'required',
        'tahunsemester' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function raports()
    {
        return $this->hasMany(\App\Models\Raport::class, 'idsemester');
    }
}
