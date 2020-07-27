<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGuruRequest;
use App\Http\Requests\UpdateGuruRequest;
use App\Repositories\GuruRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\User;
use Illuminate\Http\Request;
use Flash;
use Response;

class GuruController extends AppBaseController
{
    /** @var  GuruRepository */
    private $guruRepository;

    public function __construct(GuruRepository $guruRepo)
    {
        $this->guruRepository = $guruRepo;
    }

    /**
     * Display a listing of the Guru.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gurus = $this->guruRepository->all();

        return view('gurus.index')
            ->with('gurus', $gurus);
    }

    /**
     * Show the form for creating a new Guru.
     *
     * @return Response
     */
    public function create()
    {
        $userguru = User::pluck('name', 'id');
        return view('gurus.create', compact('userguru'));
    }

    /**
     * Store a newly created Guru in storage.
     *
     * @param CreateGuruRequest $request
     *
     * @return Response
     */
    public function store(CreateGuruRequest $request)
    {
        $input = $request->all();

        $guru = $this->guruRepository->create($input);

        Flash::success('Guru saved successfully.');

        return redirect(route('gurus.index'));
    }

    /**
     * Display the specified Guru.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $guru = $this->guruRepository->find($id);

        if (empty($guru)) {
            Flash::error('Guru not found');

            return redirect(route('gurus.index'));
        }

        return view('gurus.show')->with('guru', $guru);
    }

    /**
     * Show the form for editing the specified Guru.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userguru = User::pluck('name', 'id');
        $guru = $this->guruRepository->find($id);

        if (empty($guru)) {
            Flash::error('Guru not found');

            return redirect(route('gurus.index'));
        }

        return view('gurus.edit', compact('userguru'))->with('guru', $guru);
    }

    /**
     * Update the specified Guru in storage.
     *
     * @param int $id
     * @param UpdateGuruRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGuruRequest $request)
    {
        $guru = $this->guruRepository->find($id);

        if (empty($guru)) {
            Flash::error('Guru not found');

            return redirect(route('gurus.index'));
        }

        $guru = $this->guruRepository->update($request->all(), $id);

        Flash::success('Guru updated successfully.');

        return redirect(route('gurus.index'));
    }

    /**
     * Remove the specified Guru from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $guru = $this->guruRepository->find($id);

        if (empty($guru)) {
            Flash::error('Guru not found');

            return redirect(route('gurus.index'));
        }

        $this->guruRepository->delete($id);

        Flash::success('Guru deleted successfully.');

        return redirect(route('gurus.index'));
    }
}
