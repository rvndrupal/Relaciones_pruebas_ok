<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSertoreRequest;
use App\Http\Requests\UpdateSertoreRequest;
use App\Repositories\SertoreRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Sertore;

class SertoreController extends AppBaseController
{
    /** @var  SertoreRepository */
    private $sertoreRepository;

    public function __construct(SertoreRepository $sertoreRepo)
    {
        $this->sertoreRepository = $sertoreRepo;
    }

    /**
     * Display a listing of the Sertore.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sertoreRepository->pushCriteria(new RequestCriteria($request));
        $sertores = $this->sertoreRepository->all();

        //demo de la consulta relacion uno a uno
        // $sector=Sertore::findOrFail(2);
        // return $sector->user; //funciona
        // $sector=Sertore::with(['user'])->get();
        // return $sector; //funciona de manera correcta ok

        return view('sertores.index')
            ->with('sertores', $sertores);
    }

    /**
     * Show the form for creating a new Sertore.
     *
     * @return Response
     */
    public function create()
    {
        return view('sertores.create');
    }

    /**
     * Store a newly created Sertore in storage.
     *
     * @param CreateSertoreRequest $request
     *
     * @return Response
     */
    public function store(CreateSertoreRequest $request)
    {
        $input = $request->all();

        $sertore = $this->sertoreRepository->create($input);

        Flash::success('Sertore saved successfully.');

        return redirect(route('sertores.create'));
    }

    /**
     * Display the specified Sertore.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sertore = $this->sertoreRepository->findWithoutFail($id);

        if (empty($sertore)) {
            Flash::error('Sertore not found');

            return redirect(route('sertores.index'));
        }

        return view('sertores.show')->with('sertore', $sertore);
    }

    /**
     * Show the form for editing the specified Sertore.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sertore = $this->sertoreRepository->findWithoutFail($id);

        if (empty($sertore)) {
            Flash::error('Sertore not found');

            return redirect(route('sertores.index'));
        }

        return view('sertores.edit')->with('sertore', $sertore);
    }

    /**
     * Update the specified Sertore in storage.
     *
     * @param  int              $id
     * @param UpdateSertoreRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSertoreRequest $request)
    {
        $sertore = $this->sertoreRepository->findWithoutFail($id);

        if (empty($sertore)) {
            Flash::error('Sertore not found');

            return redirect(route('sertores.index'));
        }

        $sertore = $this->sertoreRepository->update($request->all(), $id);

        Flash::success('Sertore updated successfully.');

        return redirect(route('sertores.index'));
    }

    /**
     * Remove the specified Sertore from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sertore = $this->sertoreRepository->findWithoutFail($id);

        if (empty($sertore)) {
            Flash::error('Sertore not found');

            return redirect(route('sertores.index'));
        }

        $this->sertoreRepository->delete($id);

        Flash::success('Sertore deleted successfully.');

        return redirect(route('sertores.index'));
    }
}
