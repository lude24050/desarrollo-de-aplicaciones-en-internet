<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model {

	protected $table = 'inventarios';

	protected $primaryKey = 'id_inve';

	protected $fillable = ['tipo','nombre','cantidad','borrado'];

	//Escopes para filtrar cosultas
    public function scopeBusca($query, $busqueda){
		if($busqueda){
			return $query->where(\DB::raw("CONCAT(tipo,' ',nombre)"),"LIKE","%$busqueda%");
		}
    }

}
