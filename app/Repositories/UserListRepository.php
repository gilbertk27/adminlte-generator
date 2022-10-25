<?php

namespace App\Repositories;

use App\Models\UserList;
use App\Repositories\BaseRepository;

/**
 * Class UserListRepository
 * @package App\Repositories
 * @version October 25, 2022, 6:53 pm UTC
*/

class UserListRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
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
        return UserList::class;
    }
}
