<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function translation()
    {
        return $this->belongsTo(Translation::class, 'translation_id');
    }

    public function scopeWithTranslations($query, $language)
    {
        return $query->with(['translation' => function ($query) use ($language) {
            $query->select('id', 'key', $language . ' as translation');
        }]);
    }
}
