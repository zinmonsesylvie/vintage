<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $categorie_id
 * @property integer $vendeur_id
 * @property string $image
 * @property string $nom_art
 * @property float $prix
 * @property string $description
 * @property boolean $etat
 * @property string $created_at
 * @property string $updated_at
 * @property Vendeur $vendeur
 * @property Category $category
 */
class Article extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['categorie_id', 'vendeur_id', 'image', 'nom', 'prix', 'description', 'etat', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vendeur()
    {
        return $this->belongsTo('App\Models\Vendeur');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'categorie_id');
    }
}
