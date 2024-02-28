<?php

namespace App\Repositories\personne;

use App\Repositories\BaseRepositorie;
use App\Models\Formateur;

class FormateurRepositorie extends BaseRepositorie
{
    public function __construct(Formateur $formateur){
        parent::__construct($formateur);
    }

    public function paginate($perPage = 3, $type = 'Formateur'){
        return parent::paginate($perPage, $type);
    }

    public function searchFormateur($search){
        return Formateur::where('type', 'Formateur')->where(function($query) use ($search) {
            $query->where('nom', 'like', '%' . $search . '%')
                    ->orWhere('prenom', 'like', '%' . $search . '%');
        })->paginate();
    }
}
