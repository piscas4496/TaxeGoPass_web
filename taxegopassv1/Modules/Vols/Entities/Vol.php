<?php

namespace Modules\Vols\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vol extends Model
{
    use HasFactory;

    protected $fillable = ['id','designation','datedepart','heuresortie','destination','ref-avion'];
    
    protected static function newFactory()
    {
        return \Modules\Vols\Database\factories\VolFactory::new();
    }

    public function avion(){
        return $this->belongsTo(Avion::class,'ref_avion');
    }
    public function agent(){
        return $this->HasMany(Modules\Paiements\Entities\Paiement::class,'ref_vol');
    }
}
