<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Store
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $rut
 * @property string $bank_statement
 * @property string $dni_picture
 * @property string $status
 * @property int $users_id
 * @property int $stock_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereBankStatement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereDniPicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereRut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereStockId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereUsersId($value)
 */
class Store extends Model
{
    const ACTIVO = 1;
    const INACTIVO = 0;


    public function users(){
        
        return $this->hasOne(\App\User::class,'id','users_id');
    }
    
}
