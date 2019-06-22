<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model {

	protected $table = 'ingresos';

	protected $primaryKey = 'id_ingre';
	
	protected $fillabe = ['num_recibo',
							'nombre',
							'detalles',
							'monto',
							'fecha',
							'borrado'];

	//Escopes para filtrar cosultas
    public function scopeBusca($query, $busqueda){
		if($busqueda){
			return $query->where(\DB::raw("CONCAT(num_recibo,' ',nombre)"),"LIKE","%$busqueda%");
		}
    }

}
