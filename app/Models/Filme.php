<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbfilme';

    protected $fillable = ['filme','duracao','diretor', 'img'];

    use HasFactory;
}
