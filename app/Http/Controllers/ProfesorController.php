<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;
use App\Repositories\ProfesorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Profesor;

class ProfesorController extends AppBaseController
{
    /** @var  ProfesorRepository */
    private $profesorRepository;

    public function __construct(ProfesorRepository $profesorRepo)
    {
        $this->profesorRepository = $profesorRepo;
    }

    /**
     * Display a listing of the Profesor.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->profesorRepository->pushCriteria(new RequestCriteria($request));
        $profesors = $this->profesorRepository->all();

        //prueba de la relacion muchos a muchos
        //$profesores=Profesor::with(['cursos'])->orderBy('id','DESC')->get();
        //dd($profesores);
        // foreach($profesores as $profesor){
        //     //dd($profesor->nombre);
        //     //dd($profesor->descripcion);
        // }


        return view('profesors.index')
            ->with('profesors', $profesors);
    }

    /**
     * Show the form for creating a new Profesor.
     *
     * @return Response
     */
    public function create()
    {
        return view('profesors.create');
    }

    /**
     * Store a newly created Profesor in storage.
     *
     * @param CreateProfesorRequest $request
     *
     * @return Response
     */
    public function store(CreateProfesorRequest $request)
    {
        $input = $request->all();

        $profesor = $this->profesorRepository->create($input);

        Flash::success('Profesor saved successfully.');

        return redirect(route('profesors.index'));
    }

    /**
     * Display the specified Profesor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $profesor = $this->profesorRepository->findWithoutFail($id);

        if (empty($profesor)) {
            Flash::error('Profesor not found');

            return redirect(route('profesors.index'));
        }

        return view('profesors.show')->with('profesor', $profesor);
    }

    /**
     * Show the form for editing the specified Profesor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $profesor = $this->profesorRepository->findWithoutFail($id);

        if (empty($profesor)) {
            Flash::error('Profesor not found');

            return redirect(route('profesors.index'));
        }

        return view('profesors.edit')->with('profesor', $profesor);
    }

    /**
     * Update the specified Profesor in storage.
     *
     * @param  int              $id
     * @param UpdateProfesorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProfesorRequest $request)
    {
        $profesor = $this->profesorRepository->findWithoutFail($id);

        if (empty($profesor)) {
            Flash::error('Profesor not found');

            return redirect(route('profesors.index'));
        }

        $profesor = $this->profesorRepository->update($request->all(), $id);

        Flash::success('Profesor updated successfully.');

        return redirect(route('profesors.index'));
    }

    /**
     * Remove the specified Profesor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $profesor = $this->profesorRepository->findWithoutFail($id);

        if (empty($profesor)) {
            Flash::error('Profesor not found');

            return redirect(route('profesors.index'));
        }

        $this->profesorRepository->delete($id);

        Flash::success('Profesor deleted successfully.');

        return redirect(route('profesors.index'));
    }
}
