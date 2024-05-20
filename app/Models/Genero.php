<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbgenero';

    protected $fillable = ['genero'];

    use HasFactory;
}
