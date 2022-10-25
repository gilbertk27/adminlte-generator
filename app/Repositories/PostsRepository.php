<?php

namespace App\Repositories;

use App\Models\Posts;
use App\Repositories\BaseRepository;

/**
 * Class PostsRepository
 * @package App\Repositories
 * @version October 25, 2022, 5:49 pm UTC
*/

class PostsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'author_id',
        'title',
        'description',
        'content',
        'date'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Posts::class;
    }
}
