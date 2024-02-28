<?php

namespace App\Models;

use App\Models\Personne;
use App\Traits\MorphType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stagiaire extends Personne
{
    use HasFactory, MorphType;
}
