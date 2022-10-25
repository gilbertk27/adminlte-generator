<?php

namespace App\Models;

use Eloquent as Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Authors
 * @package App\Models
 * @version October 25, 2022, 6:09 pm UTC
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $birthdate
 * @property string|\Carbon\Carbon $added
 */
class Authors extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'authors';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'first_name',
        'last_name',
        'email',
        'birthdate',
        'added'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'birthdate' => 'date',
        'added' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|string|max:50',
        'last_name' => 'required|string|max:50',
        'email' => 'required|string|max:100',
        'birthdate' => 'required',
        'added' => 'required'
    ];

    
}
