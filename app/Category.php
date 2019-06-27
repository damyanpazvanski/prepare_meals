<?php

namespace App;

class Category extends BaseModel
{

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'name'
    ];

    public function eatables()
    {
        return $this->hasMany(Eatable::class,'category_id');
    }
}
