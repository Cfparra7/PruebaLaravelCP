<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_has_Service extends Model
{
    const UPDATED_AT = null;

    use HasFactory;
    protected $table = 'user_has_service';
    protected $primaryKey ='id';
    protected $fillable =[
        'user_iduser',
        'service_idservice',
        'date',
        'module',
        'turn',

    ];
    public function User()
    {
        return $this->belongsTo('App\Models\User', 'user_iduser');
    }
    public function Service()
    {
        return $this->belongsToMany('App\Models\Service', 'service_idservice');
    }
}
