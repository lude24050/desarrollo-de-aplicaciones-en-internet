<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model {

	protected $table = 'autos';

	protected $primaryKey = 'id_auto';

	protected $fillable = ['marca',
							'ano',
							'modelo',
							'placa',
							'color',
							'id_pro',
							'borrado'];

	public function auto(){
		return $this->belongsTo('VillaMedica\Curso','id_pro');
	}

	//Escopes para filtrar cosultas
    public function scopeBusca($query, $busqueda){
		if($busqueda){
			return $query->where(\DB::raw("CONCAT(marca,' ',ano,' ',placa,' ',id_pro)"),"LIKE","%$busqueda%");
		}
    }

}
