<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model {

	protected $table = 'pagos';

	protected $primaryKey = 'id_pago';

	protected $fillabe = ['num_recibo',
							'monto',
							'fecha',
							'reportes',
							'id_emple',
							'borrado'];

	public function pago(){
		return $this->belongsTo('VillaMedica\Empleado','id_emple');
	}

	//Escopes para filtrar cosultas
    public function scopeBusca($query, $busqueda){
		if($busqueda){
			return $query->where(\DB::raw("CONCAT(num_recibo,' ',reportes)"),"LIKE","%$busqueda%");
		}
    }

}
