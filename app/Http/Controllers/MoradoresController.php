<?php

namespace App\Http\Controllers;

use App\DataTables\MoradoresDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMoradoresRequest;
use App\Http\Requests\UpdateMoradoresRequest;
use App\Repositories\MoradoresRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MoradoresController extends AppBaseController
{
    /** @var  MoradoresRepository */
    private $moradoresRepository;

    public function __construct(MoradoresRepository $moradoresRepo)
    {
        $this->moradoresRepository = $moradoresRepo;
    }

    /**
     * Display a listing of the Moradores.
     *
     * @param MoradoresDataTable $moradoresDataTable
     * @return Response
     */
    public function index(MoradoresDataTable $moradoresDataTable)
    {
        return $moradoresDataTable->render('moradores.index');
    }

    /**
     * Show the form for creating a new Moradores.
     *
     * @return Response
     */
    public function create()
    {
        return view('moradores.create');
    }

    /**
     * Store a newly created Moradores in storage.
     *
     * @param CreateMoradoresRequest $request
     *
     * @return Response
     */
    public function store(CreateMoradoresRequest $request)
    {
        $input = $request->all();

        $moradores = $this->moradoresRepository->create($input);

        Flash::success('Moradores saved successfully.');

        return redirect(route('moradores.index'));
    }

    /**
     * Display the specified Moradores.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $moradores = $this->moradoresRepository->find($id);

        if (empty($moradores)) {
            Flash::error('Moradores not found');

            return redirect(route('moradores.index'));
        }

        return view('moradores.show')->with('moradores', $moradores);
    }

    /**
     * Show the form for editing the specified Moradores.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $moradores = $this->moradoresRepository->find($id);

        if (empty($moradores)) {
            Flash::error('Moradores not found');

            return redirect(route('moradores.index'));
        }

        return view('moradores.edit')->with('moradores', $moradores);
    }

    /**
     * Update the specified Moradores in storage.
     *
     * @param  int              $id
     * @param UpdateMoradoresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMoradoresRequest $request)
    {
        $moradores = $this->moradoresRepository->find($id);

        if (empty($moradores)) {
            Flash::error('Moradores not found');

            return redirect(route('moradores.index'));
        }

        $moradores = $this->moradoresRepository->update($request->all(), $id);

        Flash::success('Moradores updated successfully.');

        return redirect(route('moradores.index'));
    }

    /**
     * Remove the specified Moradores from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $moradores = $this->moradoresRepository->find($id);

        if (empty($moradores)) {
            Flash::error('Moradores not found');

            return redirect(route('moradores.index'));
        }

        $this->moradoresRepository->delete($id);

        Flash::success('Moradores deleted successfully.');

        return redirect(route('moradores.index'));
    }
}
