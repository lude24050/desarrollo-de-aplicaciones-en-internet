<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model {

	protected $table = 'propietarios';

	protected $primaryKey = 'id_pro';

	protected $fillabe = ['nombres',
						'apellidos',
						'dni',
						'telefono',
						'num_mascotas',
						'num_familiares',
						'nombre_carpeta',
						'id_usuario',
						'borrado'];

	public function usuario(){
		return $this->belongsTo('VillaMedica\User');
	}

	public function autos(){
		return $this->hasMany('VillaMedica\Auto','id_auto');
	}

	public function departamentos(){
		return $this->hasMany('VillaMedica\Departamento','id_depa');
	}

	public function inquilinos(){
		return $this->hasMany('VillaMedica\Inquilino','id_inqui');
	}

	//Escopes para filtrar cosultas
    public function scopeBusca($query, $busqueda){
		if($busqueda){
			return $query->where(\DB::raw("CONCAT(nombres,' ',apellidos,' ',dni,' ',id_usuario)"),"LIKE","%$busqueda%");
		}
    }

}
