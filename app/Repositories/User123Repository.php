<?php

namespace App\Repositories;

use App\Models\User123;
use App\Repositories\BaseRepository;

/**
 * Class User123Repository
 * @package App\Repositories
 * @version October 25, 2022, 5:08 pm UTC
*/

class User123Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password'
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
        return User123::class;
    }
}
