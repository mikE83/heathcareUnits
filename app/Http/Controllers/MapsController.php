<?php

namespace App\Http\Controllers;
use App\EstablecimientoSalud;
use App\Entidad;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

use Illuminate\Http\Request;

class MapsController extends Controller
{
    //

     protected $entidad;
     protected $establecimiento;

  public function __construct(Entidad $entidad, EstablecimientoSalud $establecimiento)
	 {
		$this->entidad = $entidad;
		$this->establecimiento = $establecimiento;
	}

	public function index()
	{

		$entidades = $this->entidad->orderBy('clave_elector', 'ASC')->get();
		return view('mapas.index', compact('entidades'));
	}




	public function show($id)
	{
		
		$entidad = $this->entidad->find($id);
		$establecimientos= $this->establecimiento->entidad($id )->get();
		return view('mapas.show', compact('entidad', 'establecimientos'));
	//	return response()->json($establecimientos);


	}

	public function search(Request $request, $id)
	{
		$entidad = $this->entidad->find($id);
		$cveInstitucion=$request->input('clave_de_la_institucion');
		$nivelAtencion= $request->input('nivel_atencion');
		$status=$request->input('status_de_operacion');
		$establecimientos = $this->establecimiento->entidad($id)->tipoInstitucion($cveInstitucion)->nivelAtencion($nivelAtencion)->estatus($status)->get();

		if($establecimientos->count()!=0){
	    	Mapper::map($establecimientos->first()->lat, $establecimientos->first()->lon, ['zoom' => 7,'marker' => false]);
			foreach ($establecimientos as $establecimiento ) {
				Mapper::marker($establecimiento->lat, $establecimiento->lon, ['title' => $establecimiento->nombre_de_la_unidad]);

			}
		
		}
		return view('mapas.show', compact('entidad', 'establecimientos', 'mapper'));

	}

	public function pintaMapa(){
//configuaración
		
Mapper::map(52.381128999999990000, 0.470085000000040000)->marker(53.381128999999990000, -1.470085000000040000, ['markers' => ['symbol' => 'circle', 'scale' => 1000, 'animation' => 'DROP']]);		


		return view('mapas.mapa', compact('map'));
	}	

}
