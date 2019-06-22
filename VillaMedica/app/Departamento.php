<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model {

	protected $table = 'departamentos';

	protected $primaryKey = 'id_depa';

	protected $fillable = ['num_depa',
							'tipo',
							'num_cochera',
							'num_estaciona',
							'num_torre',
							'id_pro',
							'borrado'];

	public function departamento(){
		return $this->belongsTo('VillaMedica\Propietario','id_pro');
	}

	public function extraordinarios(){
		return $this->hasMany('VillaMedica\Extraordinario','id_depa');
	}

	public function ordinarios(){
		return $this->hasMany('VillaMedica\Ordinario','id_depa');
	}

	//Escopes para filtrar cosultas
    public function scopeBusca($query, $busqueda){
		if(trim($busqueda)){
			return $query->where(\DB::raw("CONCAT(num_depa,' ',tipo,' ',num_torre,' ',id_pro)"),"LIKE","%$busqueda%");
		}
    }

}
