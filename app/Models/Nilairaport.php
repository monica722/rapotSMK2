<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Nilairaport
 * @package App\Models
 * @version February 4, 2020, 4:25 am UTC
 *
 * @property \App\Models\Raport iddetailRapot
 * @property integer iddetail_rapot
 * @property string nilai_tugas
 * @property string nilai_uas
 * @property string nilai_uts
 */
class Nilairaport extends Model
{

    public $table = 'nilairaport';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'iddetail_rapot',
        'nilai_tugas',
        'nilai_uas',
        'nilai_uts'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idnilai_raport' => 'integer',
        'iddetail_rapot' => 'integer',
        'nilai_tugas' => 'string',
        'nilai_uas' => 'string',
        'nilai_uts' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'iddetail_rapot' => 'required',
        'nilai_tugas' => 'required',
        'nilai_uas' => 'required',
        'nilai_uts' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function iddetailRapot()
    {
        return $this->belongsTo(\App\Models\Raport::class, 'iddetail_rapot');
    }
}
