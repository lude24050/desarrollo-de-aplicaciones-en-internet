<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model {

	protected $table = 'empleados';

	protected $primaryKey = 'id_emple';
	
	protected $fillable = ['nombres',
							'apellidos',
							'dni',
							'telefono',
							'correo',
							'tipo_trabajador',
							'subsidio',
							'domicilio',
							'seccion_trabajo',
							'id_usuario',
							'borrado'];


	public function empleado(){
		return $this->belongsTo('VillaMedica\User');
	}

	public function pagos(){
		return $this->hasMany('VillaMedica\Pago','id_pago');
	}

	//Escopes para filtrar cosultas
    public function scopeBusca($query, $busqueda){
		if($busqueda){
			return $query->where(\DB::raw("CONCAT(nombres,' ',apellidos,' ',dni,' ',tipo_trabajador,' ',seccion_trabajo)"),"LIKE","%$busqueda%");
		}
    }
}
