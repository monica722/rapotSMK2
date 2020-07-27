<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Guru
 * @package App\Models
 * @version June 1, 2020, 7:22 am UTC
 *
 * @property \App\Models\User $iduser
 * @property integer $nip
 * @property integer $iduser
 */
class Guru extends Model
{
    use SoftDeletes;

    public $table = 'guru';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nip',
        'iduser'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idguru' => 'integer',
        'nip' => 'integer',
        'iduser' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nip' => 'required',
        'iduser' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function userguru()
    {
        return $this->belongsTo(\App\Models\User::class, 'iduser');
    }
}
