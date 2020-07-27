<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSiswasRequest;
use App\Http\Requests\UpdateSiswasRequest;
use App\Repositories\SiswasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SiswasController extends AppBaseController
{
    /** @var  SiswasRepository */
    private $siswasRepository;

    public function __construct(SiswasRepository $siswasRepo)
    {
        $this->siswasRepository = $siswasRepo;
    }

    /**
     * Display a listing of the Siswas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $siswas = $this->siswasRepository->all();

        return view('siswas.index')
            ->with('siswas', $siswas);
    }

    /**
     * Show the form for creating a new Siswas.
     *
     * @return Response
     */
    public function create()
    {
        return view('siswas.create');
    }

    /**
     * Store a newly created Siswas in storage.
     *
     * @param CreateSiswasRequest $request
     *
     * @return Response
     */
    public function store(CreateSiswasRequest $request)
    {
        $input = $request->all();

        $siswas = $this->siswasRepository->create($input);

        Flash::success('Siswas saved successfully.');

        return redirect(route('siswas.index'));
    }

    /**
     * Display the specified Siswas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $siswas = $this->siswasRepository->find($id);

        if (empty($siswas)) {
            Flash::error('Siswas not found');

            return redirect(route('siswas.index'));
        }

        return view('siswas.show')->with('siswas', $siswas);
    }

    /**
     * Show the form for editing the specified Siswas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $siswas = $this->siswasRepository->find($id);

        if (empty($siswas)) {
            Flash::error('Siswas not found');

            return redirect(route('siswas.index'));
        }

        return view('siswas.edit')->with('siswas', $siswas);
    }

    /**
     * Update the specified Siswas in storage.
     *
     * @param int $id
     * @param UpdateSiswasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSiswasRequest $request)
    {
        $siswas = $this->siswasRepository->find($id);

        if (empty($siswas)) {
            Flash::error('Siswas not found');

            return redirect(route('siswas.index'));
        }

        $siswas = $this->siswasRepository->update($request->all(), $id);

        Flash::success('Siswas updated successfully.');

        return redirect(route('siswas.index'));
    }

    /**
     * Remove the specified Siswas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $siswas = $this->siswasRepository->find($id);

        if (empty($siswas)) {
            Flash::error('Siswas not found');

            return redirect(route('siswas.index'));
        }

        $this->siswasRepository->delete($id);

        Flash::success('Siswas deleted successfully.');

        return redirect(route('siswas.index'));
    }
}
