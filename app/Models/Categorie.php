<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation',
        'img',
        'prix',
        'region',
        'tagsA',
        'tagsG',
        'produit_id'
    ];
      public function produit(): BelongsTo
    {
        return $this->belongsTo(Produit::class);
    }
    public function imageurl():string
    {
        return Storage::disk('public')->url($this->img);
    }
    public function getslug()
    {
        return Str::slug($this->designation);

    }


}
