<?php

namespace App\Repositories;

use App\Models\User2;
use App\Repositories\BaseRepository;

/**
 * Class User2Repository
 * @package App\Repositories
 * @version October 25, 2022, 4:58 pm UTC
*/

class User2Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
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
        return User2::class;
    }
}
