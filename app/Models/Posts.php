<?php

namespace App\Models;

use Eloquent as Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Posts
 * @package App\Models
 * @version October 25, 2022, 5:49 pm UTC
 *
 * @property integer $author_id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $date
 */
class Posts extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'posts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'author_id',
        'title',
        'description',
        'content',
        'date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author_id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'content' => 'string',
        'date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'author_id' => 'required|integer',
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:500',
        'content' => 'required|string',
        'date' => 'required'
    ];

    
}
