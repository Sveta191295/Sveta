<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    public function user()    
    {
        return $this->belongsTo('App\Models\User');
        
        
        //ete nshvac e user hasOne account 
        //account belongsTo user user_id petq e lini accounti mej

    }
}
