<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Booking
 *
 * @property $id
 * @property $clientes_id
 * @property $habitacion
 * @property $ocupacion
 * @property $entrada
 * @property $salida
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Booking extends Model
{
    
    static $rules = [
		'habitacion' => 'required',
		'ocupacion' => 'required',
		'entrada' => 'required',
		'salida' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['clientes_id','habitacion','ocupacion','entrada','salida'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasMany('App\Models\Cliente', 'id', 'clientes_id');
    }
    

}
