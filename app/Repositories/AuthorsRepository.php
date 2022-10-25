<?php

namespace App\Repositories;

use App\Models\Authors;
use App\Repositories\BaseRepository;

/**
 * Class AuthorsRepository
 * @package App\Repositories
 * @version October 25, 2022, 6:09 pm UTC
*/

class AuthorsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'email',
        'birthdate',
        'added'
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
        return Authors::class;
    }
}
