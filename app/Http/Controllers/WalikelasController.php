<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWalikelasRequest;
use App\Http\Requests\UpdateWalikelasRequest;
use App\Repositories\WalikelasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class WalikelasController extends AppBaseController
{
    /** @var  WalikelasRepository */
    private $walikelasRepository;

    public function __construct(WalikelasRepository $walikelasRepo)
    {
        $this->walikelasRepository = $walikelasRepo;
    }

    /**
     * Display a listing of the Walikelas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $walikelas = $this->walikelasRepository->all();

        return view('walikelas.index')
            ->with('walikelas', $walikelas);
    }

    /**
     * Show the form for creating a new Walikelas.
     *
     * @return Response
     */
    public function create()
    {
        return view('walikelas.create');
    }

    /**
     * Store a newly created Walikelas in storage.
     *
     * @param CreateWalikelasRequest $request
     *
     * @return Response
     */
    public function store(CreateWalikelasRequest $request)
    {
        $input = $request->all();

        $walikelas = $this->walikelasRepository->create($input);

        Flash::success('Walikelas saved successfully.');

        return redirect(route('walikelas.index'));
    }

    /**
     * Display the specified Walikelas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $walikelas = $this->walikelasRepository->find($id);

        if (empty($walikelas)) {
            Flash::error('Walikelas not found');

            return redirect(route('walikelas.index'));
        }

        return view('walikelas.show')->with('walikelas', $walikelas);
    }

    /**
     * Show the form for editing the specified Walikelas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $walikelas = $this->walikelasRepository->find($id);

        if (empty($walikelas)) {
            Flash::error('Walikelas not found');

            return redirect(route('walikelas.index'));
        }

        return view('walikelas.edit')->with('walikelas', $walikelas);
    }

    /**
     * Update the specified Walikelas in storage.
     *
     * @param int $id
     * @param UpdateWalikelasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWalikelasRequest $request)
    {
        $walikelas = $this->walikelasRepository->find($id);

        if (empty($walikelas)) {
            Flash::error('Walikelas not found');

            return redirect(route('walikelas.index'));
        }

        $walikelas = $this->walikelasRepository->update($request->all(), $id);

        Flash::success('Walikelas updated successfully.');

        return redirect(route('walikelas.index'));
    }

    /**
     * Remove the specified Walikelas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $walikelas = $this->walikelasRepository->find($id);

        if (empty($walikelas)) {
            Flash::error('Walikelas not found');

            return redirect(route('walikelas.index'));
        }

        $this->walikelasRepository->delete($id);

        Flash::success('Walikelas deleted successfully.');

        return redirect(route('walikelas.index'));
    }
}
