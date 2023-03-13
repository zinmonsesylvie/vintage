<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $article_id
 * @property string $photo
 * @property string $created_at
 * @property string $updated_at
 * @property Article $article
 */
class Image extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['article_id', 'photo', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }
}
