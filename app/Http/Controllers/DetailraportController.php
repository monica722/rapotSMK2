<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDetailraportRequest;
use App\Http\Requests\UpdateDetailraportRequest;
use App\Repositories\DetailraportRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DetailraportController extends AppBaseController
{
    /** @var  DetailraportRepository */
    private $detailraportRepository;

    public function __construct(DetailraportRepository $detailraportRepo)
    {
        $this->detailraportRepository = $detailraportRepo;
    }

    /**
     * Display a listing of the Detailraport.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $detailraports = $this->detailraportRepository->all();

        return view('detailraports.index')
            ->with('detailraports', $detailraports);
    }

    /**
     * Show the form for creating a new Detailraport.
     *
     * @return Response
     */
    public function create()
    {
        return view('detailraports.create');
    }

    /**
     * Store a newly created Detailraport in storage.
     *
     * @param CreateDetailraportRequest $request
     *
     * @return Response
     */
    public function store(CreateDetailraportRequest $request)
    {
        $input = $request->all();

        $detailraport = $this->detailraportRepository->create($input);

        Flash::success('Detailraport saved successfully.');

        return redirect(route('detailraports.index'));
    }

    /**
     * Display the specified Detailraport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detailraport = $this->detailraportRepository->find($id);

        if (empty($detailraport)) {
            Flash::error('Detailraport not found');

            return redirect(route('detailraports.index'));
        }

        return view('detailraports.show')->with('detailraport', $detailraport);
    }

    /**
     * Show the form for editing the specified Detailraport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detailraport = $this->detailraportRepository->find($id);

        if (empty($detailraport)) {
            Flash::error('Detailraport not found');

            return redirect(route('detailraports.index'));
        }

        return view('detailraports.edit')->with('detailraport', $detailraport);
    }

    /**
     * Update the specified Detailraport in storage.
     *
     * @param int $id
     * @param UpdateDetailraportRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDetailraportRequest $request)
    {
        $detailraport = $this->detailraportRepository->find($id);

        if (empty($detailraport)) {
            Flash::error('Detailraport not found');

            return redirect(route('detailraports.index'));
        }

        $detailraport = $this->detailraportRepository->update($request->all(), $id);

        Flash::success('Detailraport updated successfully.');

        return redirect(route('detailraports.index'));
    }

    /**
     * Remove the specified Detailraport from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detailraport = $this->detailraportRepository->find($id);

        if (empty($detailraport)) {
            Flash::error('Detailraport not found');

            return redirect(route('detailraports.index'));
        }

        $this->detailraportRepository->delete($id);

        Flash::success('Detailraport deleted successfully.');

        return redirect(route('detailraports.index'));
    }
}
