<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRaportRequest;
use App\Http\Requests\UpdateRaportRequest;
use App\Repositories\RaportRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class RaportController extends AppBaseController
{
    /** @var  RaportRepository */
    private $raportRepository;

    public function __construct(RaportRepository $raportRepo)
    {
        $this->raportRepository = $raportRepo;
    }

    /**
     * Display a listing of the Raport.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $raports = $this->raportRepository->all();

        return view('raports.index')
            ->with('raports', $raports);
    }

    /**
     * Show the form for creating a new Raport.
     *
     * @return Response
     */
    public function create()
    {
        return view('raports.create');
    }

    /**
     * Store a newly created Raport in storage.
     *
     * @param CreateRaportRequest $request
     *
     * @return Response
     */
    public function store(CreateRaportRequest $request)
    {
        $input = $request->all();

        $raport = $this->raportRepository->create($input);

        Flash::success('Raport saved successfully.');

        return redirect(route('raports.index'));
    }

    /**
     * Display the specified Raport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $raport = $this->raportRepository->find($id);

        if (empty($raport)) {
            Flash::error('Raport not found');

            return redirect(route('raports.index'));
        }

        return view('raports.show')->with('raport', $raport);
    }

    /**
     * Show the form for editing the specified Raport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $raport = $this->raportRepository->find($id);

        if (empty($raport)) {
            Flash::error('Raport not found');

            return redirect(route('raports.index'));
        }

        return view('raports.edit')->with('raport', $raport);
    }

    /**
     * Update the specified Raport in storage.
     *
     * @param int $id
     * @param UpdateRaportRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRaportRequest $request)
    {
        $raport = $this->raportRepository->find($id);

        if (empty($raport)) {
            Flash::error('Raport not found');

            return redirect(route('raports.index'));
        }

        $raport = $this->raportRepository->update($request->all(), $id);

        Flash::success('Raport updated successfully.');

        return redirect(route('raports.index'));
    }

    /**
     * Remove the specified Raport from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $raport = $this->raportRepository->find($id);

        if (empty($raport)) {
            Flash::error('Raport not found');

            return redirect(route('raports.index'));
        }

        $this->raportRepository->delete($id);

        Flash::success('Raport deleted successfully.');

        return redirect(route('raports.index'));
    }
}
