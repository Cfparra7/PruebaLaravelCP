<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey ='iduser';
    protected $fillable =[
        'document',
        'name',
        'lastname',

    ];
    public function services()
    {
        return $this->belongsToMany(Service :: class, 'user_has_service');
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_iduser');
    }

}
