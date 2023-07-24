<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Session extends Model
{

    protected $fillable = [
        'uid',
        'meta',
        'game'
    ];

    public function getMetaAttribute($value)
    {
        if (empty($value))
            return new Meta();

        return json_decode($value);
    }

    public function setMetaAttribute($value)
    {
        $this->attributes['meta'] = json_encode($value);
    }

    public function getGameAttribute($value)
    {
        return json_decode($value);
    }

    public function setGameAttribute($value)
    {
        $this->attributes['game'] = json_encode($value);
    }
}
