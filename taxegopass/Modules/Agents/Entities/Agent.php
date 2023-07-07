<?php

namespace Modules\Agents\Entities;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Agent extends Model
{
    use HasFactory;

    protected $fillable = ['id','nomsag','genreag','datenaissag','mobile','emailag','passwordag'];
    
    protected static function newFactory()
    {
        return \Modules\Agents\Database\factories\AgentFactory::new();
    }

    public function paiement()
    {
        return $this->hasMany(Modules\Paiements\Entities\Paiements::class,'ref_agent');
    }
}
