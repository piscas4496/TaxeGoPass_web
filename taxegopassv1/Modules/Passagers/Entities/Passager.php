<?php

namespace Modules\Passagers\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Passager extends Model
{
    use HasFactory;

    protected $fillable = ['nomspass','genrepass','datenaisspass','telephone','emailpass','ref_adresse','ref_vol'];
    
    protected static function newFactory()
    {
        return \Modules\Passagers\Database\factories\PassagerFactory::new();
    }
    public function adresse()
    {
        return $this->belongsTo(Adresse::class,'ref_adresse');
    }
    public function vol()
    {
        return $this->belongsTo(Modules\Vols\Entities\Vol::class,'ref_vol');
    }

    public function passager()
    {
        return $this->HasMany(Modules\Paiements\Entities\Paeiement::class,'ref_passager');
    }
}
