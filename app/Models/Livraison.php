<?php

namespace App\Models;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livraison extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle_livraison',
        'date_livraison',
    ];
    public function commandes(): HasMany
    {
        return $this->hasMany(Commande::class);
    }
}