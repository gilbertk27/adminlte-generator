<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser2Request;
use App\Http\Requests\UpdateUser2Request;
use App\Repositories\User2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class User2Controller extends AppBaseController
{
    /** @var User2Repository $user2Repository*/
    private $user2Repository;

    public function __construct(User2Repository $user2Repo)
    {
        $this->user2Repository = $user2Repo;
    }

    /**
     * Display a listing of the User2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $user2s = $this->user2Repository->all();

        return view('user2s.index')
            ->with('user2s', $user2s);
    }

    /**
     * Show the form for creating a new User2.
     *
     * @return Response
     */
    public function create()
    {
        return view('user2s.create');
    }

    /**
     * Store a newly created User2 in storage.
     *
     * @param CreateUser2Request $request
     *
     * @return Response
     */
    public function store(CreateUser2Request $request)
    {
        $input = $request->all();

        $user2 = $this->user2Repository->create($input);

        Flash::success('User2 saved successfully.');

        return redirect(route('user2s.index'));
    }

    /**
     * Display the specified User2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user2 = $this->user2Repository->find($id);

        if (empty($user2)) {
            Flash::error('User2 not found');

            return redirect(route('user2s.index'));
        }

        return view('user2s.show')->with('user2', $user2);
    }

    /**
     * Show the form for editing the specified User2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user2 = $this->user2Repository->find($id);

        if (empty($user2)) {
            Flash::error('User2 not found');

            return redirect(route('user2s.index'));
        }

        return view('user2s.edit')->with('user2', $user2);
    }

    /**
     * Update the specified User2 in storage.
     *
     * @param int $id
     * @param UpdateUser2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateUser2Request $request)
    {
        $user2 = $this->user2Repository->find($id);

        if (empty($user2)) {
            Flash::error('User2 not found');

            return redirect(route('user2s.index'));
        }

        $user2 = $this->user2Repository->update($request->all(), $id);

        Flash::success('User2 updated successfully.');

        return redirect(route('user2s.index'));
    }

    /**
     * Remove the specified User2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user2 = $this->user2Repository->find($id);

        if (empty($user2)) {
            Flash::error('User2 not found');

            return redirect(route('user2s.index'));
        }

        $this->user2Repository->delete($id);

        Flash::success('User2 deleted successfully.');

        return redirect(route('user2s.index'));
    }
}
