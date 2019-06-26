<?php

namespace App;

class Translation extends BaseModel
{

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'key',
        'en',
        'bg'
    ];

    /**
     * @return null
     */
    public function translation()
    {
        return null;
    }
}
