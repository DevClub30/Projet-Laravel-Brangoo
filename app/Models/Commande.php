<?php

namespace App\Models;

use App\Models\User;
use App\Models\Produit;
use App\Models\Livraison;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle_commande',
        'date_commande',
        'etat_commande',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function livraison(): BelongsTo
    {
        return $this->belongsTo(Livraison::class);
    }

    public function produits(): BelongsToMany
    {
        return $this->belongsToMany(Produit::class);
    }
}
