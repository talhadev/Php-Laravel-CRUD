<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'Customers';
    protected $primaryKey = 'customer_id';
    protected $fillable = [
        'user_id',
        'customer_id',
        'customer_name',
        'phone',
        'address',
        'city',
        'country',

    ];

    //CUStomers are owned by dealer or dealers.
    public function user(){
        return $this->belongsTo('App\User');
    }

}
