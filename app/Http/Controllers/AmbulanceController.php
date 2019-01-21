<?php

namespace App\Http\Controllers;
use App\Ambulance;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAmbulanceRequest;


class AmbulanceController extends Controller
{
    //
  protected $ambulance;

  public function __construct(Ambulance $ambulance)
	 {
		$this->ambulance = $ambulance;
	}

	public function index()
	{
		$ambulances = $this->ambulance->all();
		return view('ambulance.index', compact('ambulances'));
	}


		public function create(){
		//catalogos
		$ambulance = $this->ambulance;		
		 return view('ambulance.new', compact('ambulance'));
	}

	public function store(StoreAmbulanceRequest $request){
		    $nueva= array(
            'unidad'=>$request->input('economico'),
            'marca'=>$request->input('marca'),
            'modelo'=>$request->input('modelo'),
            'clave'=>$request->input('clave')
        );
        $nuevaUbicacion = $this->ambulance->create($nueva);
        return redirect('ambulances
        	');

	}

	public function edit(){
		 return view('donador.new');
	}

	public function update(){

	}

	public function delete(){
		 return view('donador.new');
	}



}
