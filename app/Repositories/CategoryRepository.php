<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\BaseRepository;

/**
 * Class CategoryRepository
 * @package App\Repositories
 * @version October 25, 2022, 4:51 pm UTC
*/

class CategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Category::class;
    }
}
