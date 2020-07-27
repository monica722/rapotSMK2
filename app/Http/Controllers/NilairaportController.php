<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNilairaportRequest;
use App\Http\Requests\UpdateNilairaportRequest;
use App\Repositories\NilairaportRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NilairaportController extends AppBaseController
{
    /** @var  NilairaportRepository */
    private $nilairaportRepository;

    public function __construct(NilairaportRepository $nilairaportRepo)
    {
        $this->nilairaportRepository = $nilairaportRepo;
    }

    /**
     * Display a listing of the Nilairaport.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nilairaports = $this->nilairaportRepository->all();

        return view('nilairaports.index')
            ->with('nilairaports', $nilairaports);
    }

    /**
     * Show the form for creating a new Nilairaport.
     *
     * @return Response
     */
    public function create()
    {
        return view('nilairaports.create');
    }

    /**
     * Store a newly created Nilairaport in storage.
     *
     * @param CreateNilairaportRequest $request
     *
     * @return Response
     */
    public function store(CreateNilairaportRequest $request)
    {
        $input = $request->all();

        $nilairaport = $this->nilairaportRepository->create($input);

        Flash::success('Nilairaport saved successfully.');

        return redirect(route('nilairaports.index'));
    }

    /**
     * Display the specified Nilairaport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nilairaport = $this->nilairaportRepository->find($id);

        if (empty($nilairaport)) {
            Flash::error('Nilairaport not found');

            return redirect(route('nilairaports.index'));
        }

        return view('nilairaports.show')->with('nilairaport', $nilairaport);
    }

    /**
     * Show the form for editing the specified Nilairaport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nilairaport = $this->nilairaportRepository->find($id);

        if (empty($nilairaport)) {
            Flash::error('Nilairaport not found');

            return redirect(route('nilairaports.index'));
        }

        return view('nilairaports.edit')->with('nilairaport', $nilairaport);
    }

    /**
     * Update the specified Nilairaport in storage.
     *
     * @param int $id
     * @param UpdateNilairaportRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNilairaportRequest $request)
    {
        $nilairaport = $this->nilairaportRepository->find($id);

        if (empty($nilairaport)) {
            Flash::error('Nilairaport not found');

            return redirect(route('nilairaports.index'));
        }

        $nilairaport = $this->nilairaportRepository->update($request->all(), $id);

        Flash::success('Nilairaport updated successfully.');

        return redirect(route('nilairaports.index'));
    }

    /**
     * Remove the specified Nilairaport from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nilairaport = $this->nilairaportRepository->find($id);

        if (empty($nilairaport)) {
            Flash::error('Nilairaport not found');

            return redirect(route('nilairaports.index'));
        }

        $this->nilairaportRepository->delete($id);

        Flash::success('Nilairaport deleted successfully.');

        return redirect(route('nilairaports.index'));
    }
}
