<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Inquilino extends Model {

	protected $table = 'inquilinos';

	protected $primaryKey = 'id_inqui';

	protected $fillable = ['nombres',
							'apellidos',
							'dni',
							'telefono',
							'correo',
							'id_pro',
							'borrado'];

	public function inquilino(){
		return $this->belongsTo('VillaMedica\Propietario','id_pro');
	}

	//Escopes para filtrar cosultas
    public function scopeBusca($query, $busqueda){
		if($busqueda){
			return $query->where(\DB::raw("CONCAT(nombres,' ',apellidos,' ',dni,' ',id_pro,' ',correo,' ',telefono)"),"LIKE","%$busqueda%");
		}
    }

}
