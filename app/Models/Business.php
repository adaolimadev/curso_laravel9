<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    //define a tabela a ser usada
    protected $table = 'business';

    //define as colunas que vamos poder mexer (store)
    protected $fillable = [
        'name',
        'email',
        'address',
        'logo'
    ];

}
