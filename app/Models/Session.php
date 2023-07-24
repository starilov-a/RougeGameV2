<?php


namespace App\Models;


use App\Models\Game\Game;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Session extends Model
{

    protected $fillable = ['uid', 'meta', 'game'];

    static public function init($uid)
    {
        $session = Session::firstOrCreate([
            'uid' => $uid
        ]);

        $session->meta = empty($session->meta) ? new Meta() : unserialize(json_decode($session->meta));
        $session->game = empty($session->game) ? new Game() : unserialize(json_decode($session->game));



        return $session;
    }

    public function close()
    {
        $this->update(['meta' => json_encode(serialize($this->meta)), 'game' => json_encode(serialize($this->game))]);
    }

//    public function getMetaAttribute($value)
//    {
//        var_dump('dddddd');exit;
//        if (empty($value))
//            return new Meta();
//
//        return json_decode($value);
//    }
//
//    public function setMetaAttribute($value)
//    {
//        $this->attributes['meta'] = json_encode($value);
//    }
//
//    public function getGameAttribute($value)
//    {
//        if (empty($value))
//            return new Game();
//
//        return json_decode($value);
//    }
//
//    public function setGameAttribute($value)
//    {
//        $this->attributes['game'] = json_encode($value);
//    }

//    protected function meta(): Attribute
//    {
//        return Attribute::make(
//
//            set: fn (Meta $value) => json_encode($value),
//        );
//    }
//
//    protected function game(): Attribute
//    {
//        var_dump('123123');
//        return Attribute::make(
//            set: fn (Meta $value) => json_encode($value),
//        );
//    }
}
