<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $image
 * @property boolean $etat
 * @property string $created_at
 * @property string $updated_at
 * @property Article[] $articles
 * @property User $user
 */
class Vendeur extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'image', 'etat', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
