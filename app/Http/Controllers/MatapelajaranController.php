<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMatapelajaranRequest;
use App\Http\Requests\UpdateMatapelajaranRequest;
use App\Repositories\MatapelajaranRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Guru_Mapel;
use Illuminate\Http\Request;
use Flash;
use Response;

class MatapelajaranController extends AppBaseController
{
    /** @var  MatapelajaranRepository */
    private $matapelajaranRepository;

    public function __construct(MatapelajaranRepository $matapelajaranRepo)
    {
        $this->matapelajaranRepository = $matapelajaranRepo;
    }

    /**
     * Display a listing of the Matapelajaran.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $matapelajarans = $this->matapelajaranRepository->all();

        return view('matapelajarans.index')
            ->with('matapelajarans', $matapelajarans);
    }

    /**
     * Show the form for creating a new Matapelajaran.
     *
     * @return Response
     */
    public function create()
    {
        $guru = Guru::pluck('nama', 'id');
        return view('matapelajarans.create');
    }

    /**
     * Store a newly created Matapelajaran in storage.
     *
     * @param CreateMatapelajaranRequest $request
     *
     * @return Response
     */
    public function store(CreateMatapelajaranRequest $request)
    {
        $input = $request->all();

        $matapelajaran = $this->matapelajaranRepository->create($input);

        Flash::success('Matapelajaran saved successfully.');

        return redirect(route('matapelajarans.index'));
    }

    /**
     * Display the specified Matapelajaran.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $matapelajaran = $this->matapelajaranRepository->find($id);

        if (empty($matapelajaran)) {
            Flash::error('Matapelajaran not found');

            return redirect(route('matapelajarans.index'));
        }

        return view('matapelajarans.show')->with('matapelajaran', $matapelajaran);
    }

    /**
     * Show the form for editing the specified Matapelajaran.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $matapelajaran = $this->matapelajaranRepository->find($id);

        if (empty($matapelajaran)) {
            Flash::error('Matapelajaran not found');

            return redirect(route('matapelajarans.index'));
        }

        return view('matapelajarans.edit')->with('matapelajaran', $matapelajaran);
    }

    /**
     * Update the specified Matapelajaran in storage.
     *
     * @param int $id
     * @param UpdateMatapelajaranRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMatapelajaranRequest $request)
    {
        $matapelajaran = $this->matapelajaranRepository->find($id);

        if (empty($matapelajaran)) {
            Flash::error('Matapelajaran not found');

            return redirect(route('matapelajarans.index'));
        }

        $matapelajaran = $this->matapelajaranRepository->update($request->all(), $id);

        Flash::success('Matapelajaran updated successfully.');

        return redirect(route('matapelajarans.index'));
    }

    /**
     * Remove the specified Matapelajaran from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $matapelajaran = $this->matapelajaranRepository->find($id);

        if (empty($matapelajaran)) {
            Flash::error('Matapelajaran not found');

            return redirect(route('matapelajarans.index'));
        }

        $this->matapelajaranRepository->delete($id);

        Flash::success('Matapelajaran deleted successfully.');

        return redirect(route('matapelajarans.index'));
    }
}
