<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model {

	protected $table = 'reparacions';

	protected $primaryKey = 'id_repa';

	protected $fillabe = ['lugar',
							'fecha_inicio',
							'fecha_final',
							'monto',
							'motivo',
							'ids_inventario',
							'borrado'];

	//Escopes para filtrar cosultas
    public function scopeBusca($query, $busqueda){
		if($busqueda){
			return $query->where(\DB::raw("CONCAT(lugar,' ',motivo,' ',fecha_inicio,' ',fecha_final)"),"LIKE","%$busqueda%");
		}
    }

}
