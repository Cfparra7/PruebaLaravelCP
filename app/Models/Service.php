<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'service';
    protected $primaryKey ='idservice';
    protected $fillable =[
        'name',
        'detail',
        'abbreviation',

    ];
    public function users()
    {
        return $this->belongsToMany(User :: class, 'user_has_service');
    }
}
