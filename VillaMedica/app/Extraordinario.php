<?php

namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Extraordinario extends Model
{
    protected $table = 'extraordinarios';

	protected $primaryKey = 'id_extra';

	protected $fillable = ['num_recibo',
							'monto',
							'fecha',
							'fecha_pago',
							'monto_pago',
							'id_depa',
							'id_repa',
							'borrado'];

	public function extraordinario(){
		return $this->belongsTo('VillaMedica\Departameto','id_depa');
	}

	public function reparaciones(){
		return $this->belongsTo('VillaMedica\Reparacion','id_repa');
	}

	//Escopes para filtrar cosultas
    public function scopeBusca($query, $busqueda){
		if($busqueda){
			return $query->where(\DB::raw("CONCAT(num_recibo,' ',fecha,' ',id_depa)"),"LIKE","%$busqueda%");
		}
    }
}
