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

		$entidades = $this->entidad->orderBy('id_entidad', 'ASC')->get();
		Mapper::map($entidades->first()->lat, $entidades->first()->lat,
            [
            	'zoom' => 15,
                'draggable' => false,
                'marker' => false,
                'center' => false,
                'eventBeforeLoad' => 'console.log("before load");',
                'cluster' => false
            ]);
		foreach ($entidades as $entidad) {
			 $content = '<b>' .strtoupper($entidad->entidad). 

			            '<br> Total de Camas
			            <br> Total de Establecimientos	
			             </b>
			 			 <a href="mapas/'.$entidad->id_entidad.'" class="secondary-content"><i class="mdi-content-send"></i></a>'	
			                    ;
			 Mapper::informationWindow($entidad->lat, $entidad->lon, $content, ['markers' => [ 'animation' => 'DROP', 

			 		 'scale' => 10000
			          ]]);
			   				

		}

		$mapa=Mapper::render();
		return view('mapas.index', compact('entidades', 'mapa'));
	}




	public function show($id)
	{
		if ($id != 99){
		$entidad = $this->entidad->find($id);
		$establecimientos= $this->establecimiento->entidad($id )->get();
		}
		if ($id == 99){
		$entidad = $this->entidad->find($id);
		$establecimientos= $this->establecimiento->tipoInstitucion('IMSS');
		}	
		if($establecimientos->count()!=0){
	     Mapper::map($establecimientos->first()->lat, $establecimientos->first()->lat,
            [
            	'zoom' => 7,
                'draggable' => false,
                'marker' => false,
                'center' => false,
                'eventBeforeLoad' => 'console.log("before load");'
            ]);



			foreach ($establecimientos as $establecimiento ) {
				if (!empty($establecimiento->lat)  or !empty($establecimiento->lon)){
					$content = '<b>' .$establecimiento->clave_de_la_institucion.'-'.$establecimiento->nombre_de_la_unidad . '</b>'.
			   				'<br> Consultorios'.$establecimiento->total_de_consultorios.'</br>'.'<br> Camas'.$establecimiento->total_de_camas.'</br>'.'<b> '.$establecimiento->estatus_de_operacion.'-id'.$establecimiento->id.'</b>';
    			Mapper::informationWindow($establecimiento->lat, $establecimiento->lon, $content);
	  

				}

			}
		$mapa=Mapper::render();	
		}	

		return view('mapas.show', compact('entidad', 'establecimientos', 'mapa'));
	//	return response()->json($establecimientos);


	}

	public function search(Request $request, $id)
	{
		$entidad = $this->entidad->find($id);
		$cveInstitucion=$request->input('clave_de_la_institucion');
		$nivelAtencion= $request->input('nivel_atencion');
		$status=$request->input('status_de_operacion');
		if ($id == 99)
			$establecimientos = $this->establecimiento->tipoInstitucion($cveInstitucion)->nivelAtencion($nivelAtencion)->estatus($status)->get();
		if ($id != 99)
			$establecimientos = $this->establecimiento->entidad($id)->tipoInstitucion($cveInstitucion)->nivelAtencion($nivelAtencion)->estatus($status)->get();
		if($establecimientos->count()!=0){
	    	Mapper::map($establecimientos->first()->lat, $establecimientos->first()->lat,
            [
            	'zoom' => 8,
                'draggable' => false,
                'marker' => false,
                'center' => false,
                'eventBeforeLoad' => 'console.log("before load");'
            ]);
		foreach ($establecimientos as $establecimiento ) {
		  if (!empty($establecimiento->lat)  or !empty($establecimiento->lon)){
		   $content = '<b>' .$establecimiento->clave_de_la_institucion.'-'.$establecimiento->nombre_de_la_unidad . '</b>'.
			   				'<br> Consultorios'.$establecimiento->total_de_consultorios.'</br>'.'<br> Camas'.$establecimiento->total_de_camas.'</br>'.'<b> '.$establecimiento->estatus_de_operacion.'-id'.$establecimiento->id.'</b>';
    			Mapper::informationWindow($establecimiento->lat, $establecimiento->lon, $content);

			}
			}

			$mapa=Mapper::render();
		
		}
		return view('mapas.show', compact('entidad', 'establecimientos', 'mapa'));

	}

	public function pintaMapa(){
//configuaración
		
Mapper::map(40, -100, ['zoom' => 4, 'marker' => false]);
Mapper::informationWindow(40, -99, ['hello']);
Mapper::informationWindow(41, -98, ['hello']);
Mapper::informationWindow(42, -97, ['hello']);

		return view('mapas.mapa', compact('map'));
	}	

}
