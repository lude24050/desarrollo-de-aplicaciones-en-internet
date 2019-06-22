<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Ordinario extends Model {

	protected $table = 'ordinarios';

	protected $primaryKey = 'id_ordi';
	
	protected $fillabe = ['num_recibo',
							'monto',
							'fecha',
							'estado',
							'fecha_pago',
							'monto_pago',
							'id_depa',
							'borrado'];

	public function ordinario(){
		return $this->belongsTo('VillaMedica\Departamento','id_depa');
	}


	//Escopes para filtrar cosultas
    public function scopeBusca($query, $busqueda){
		if($busqueda){
			return $query->where(\DB::raw("CONCAT(num_recibo,' ',fecha,' ',estado,' ',id_depa)"),"LIKE","%$busqueda%");
		}
    }


}
