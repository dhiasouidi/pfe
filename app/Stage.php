<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    public function demande()
    {
        return $this->hasOne('App\DemandeDeStage', 'DEMANDE_ID', 'ID_DEMANDE');
    }
}
