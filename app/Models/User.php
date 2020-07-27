<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version June 1, 2020, 7:51 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $gurus
 * @property \Illuminate\Database\Eloquent\Collection $siswas
 * @property string $name
 * @property string $email
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property integer $nohp
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'nohp',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'tempat_lahir' => 'string',
        'tanggal_lahir' => 'date',
        'alamat' => 'string',
        'nohp' => 'integer',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required',
        'nohp' => 'required',
        'password' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function gurus()
    {
        return $this->hasMany(\App\Models\Guru::class, 'iduser');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function siswas()
    {
        return $this->hasMany(\App\Models\Siswa::class, 'iduser');
    }
}
