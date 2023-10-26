<?php

namespace Modules\Paiements\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = ['motif','datepaiement','ref_passager','ref_agent','ref_typefrais'];
    
    protected static function newFactory()
    {
        return \Modules\Paiements\Database\factories\PaiementFactory::new();
    }
    public function passager()
    {
        return $this->belongsTo(Modules\Passagers\Entities\Passager::class,'ref_passager');
    }
    public function agent()
    {
        return $this->belongsTo(Modules\Agents\Entities\Agent::class,'ref_agent');
    }
    public function typefrais()
    {
    return $this->belongsTo(TypeFrais::class,'ref_typefrais');
    }

}
