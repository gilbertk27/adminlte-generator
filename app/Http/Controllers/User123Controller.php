<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser123Request;
use App\Http\Requests\UpdateUser123Request;
use App\Repositories\User123Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class User123Controller extends AppBaseController
{
    /** @var User123Repository $user123Repository*/
    private $user123Repository;

    public function __construct(User123Repository $user123Repo)
    {
        $this->user123Repository = $user123Repo;
    }

    /**
     * Display a listing of the User123.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $user123s = $this->user123Repository->all();

        return view('user123s.index')
            ->with('user123s', $user123s);
    }

    /**
     * Show the form for creating a new User123.
     *
     * @return Response
     */
    public function create()
    {
        return view('user123s.create');
    }

    /**
     * Store a newly created User123 in storage.
     *
     * @param CreateUser123Request $request
     *
     * @return Response
     */
    public function store(CreateUser123Request $request)
    {
        $input = $request->all();

        $user123 = $this->user123Repository->create($input);

        Flash::success('User123 saved successfully.');

        return redirect(route('user123s.index'));
    }

    /**
     * Display the specified User123.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user123 = $this->user123Repository->find($id);

        if (empty($user123)) {
            Flash::error('User123 not found');

            return redirect(route('user123s.index'));
        }

        return view('user123s.show')->with('user123', $user123);
    }

    /**
     * Show the form for editing the specified User123.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user123 = $this->user123Repository->find($id);

        if (empty($user123)) {
            Flash::error('User123 not found');

            return redirect(route('user123s.index'));
        }

        return view('user123s.edit')->with('user123', $user123);
    }

    /**
     * Update the specified User123 in storage.
     *
     * @param int $id
     * @param UpdateUser123Request $request
     *
     * @return Response
     */
    public function update($id, UpdateUser123Request $request)
    {
        $user123 = $this->user123Repository->find($id);

        if (empty($user123)) {
            Flash::error('User123 not found');

            return redirect(route('user123s.index'));
        }

        $user123 = $this->user123Repository->update($request->all(), $id);

        Flash::success('User123 updated successfully.');

        return redirect(route('user123s.index'));
    }

    /**
     * Remove the specified User123 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user123 = $this->user123Repository->find($id);

        if (empty($user123)) {
            Flash::error('User123 not found');

            return redirect(route('user123s.index'));
        }

        $this->user123Repository->delete($id);

        Flash::success('User123 deleted successfully.');

        return redirect(route('user123s.index'));
    }
}
