<?php

namespace Modules\Passagers\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Modules\Paiements\Entities\Paiement;
use Modules\Vols\Entities\Vol;

class Passager extends Model
{
    use HasFactory;

    protected $fillable = ['nomspass','genrepass','datenaisspass','telephone','emailpass','adresse','ref_vol'];
    
    protected static function newFactory()
    {
        return \Modules\Passagers\Database\factories\PassagerFactory::new();
    }
   
    public function vol()
    {
        return $this->belongsTo(Vol::class,'ref_vol');
    }

    public function passager()
    {
        return $this->HasMany(Paiement::class,'ref_passager');
    }
}
