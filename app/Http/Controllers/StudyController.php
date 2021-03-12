<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Database\Seeders\StudySeeder;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studies = Study::all();

        return view('study.index', [ //nombre de fichero de la vista *study.index y los datos q le pasamos
            'studies' => $studies
        ]);
        return $studies;
        //return "Lista de estudios";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('study.create');
        //return "Aqui formulario de crear estudios";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'code' => 'required|unique:studies,code|max:6',
            'name' => 'required|max:100',
            'abreviation' => 'required|max:4',
        ];
        $this->validate($request, $rules);
        $study = Study::create($request->all());
        return redirect('/studies');
        //return $study;     de una forma facil y rapida de guardar
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $study = Study::find($id);

        return view('study.show', [ 
            'study' => $study
        ]);
        //return "Mostrar estudio $study";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function edit(Study $study)
    {
        return view('study.edit', ['study' => $study]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Study $study)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function destroy(Study $study)
    {
        $study->delete();
        //Study::destroy($id);   //este metodo sirve si solo tienes el id
        return back();
    }
}
