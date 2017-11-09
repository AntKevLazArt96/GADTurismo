<?php

namespace App\Http\Controllers;

use App\Solicitudes;
use Auth;
use Illuminate\Http\Request;
use Storage;

class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Solicitudes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request,[
            //'direccion'=>'required|string',
            //'cedula'=>'required|string|max:10',
            //'clave'=>'required|string',
            'iepi'=>'required|mimes:pdf|max:8000000',
            //'patente'=>'required|mimes:pdf',
            //'cuerpoBomberos'=>'required|file',
            //'centroSalud'=>'required|file',
            ]);*/

        //if($request->hasFile('iepi')){
            $file = $request->file('iepi');
            $allowedFileTypes= config('app.allowedFileTypes');
            $maxFileSize = config('app.maxFileSize');

            $rules = [
                'iepi'=> 'required|mimes:'.$allowedFileTypes.'|max:'.$maxFileSize

            ];

            $this->validate($request,$rules);

            $fileName = $file->getClientOriginalName();
            $destinationPath = config('app.fileDestinationPath').'/'.$fileName;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
            
            if($uploaded){


            }

        //}
        return "holi";
        /*
        dd($request->direccion);
        //dd($request->file('iepi')->store('public'));
        $solicitud = new Solicitudes;
        $solicitud->direccion = $request->direccion;*/

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitudes $solicitudes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitudes $solicitudes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitudes $solicitudes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitudes $solicitudes)
    {
        //
    }
}
