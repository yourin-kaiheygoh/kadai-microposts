<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function favorites()
    {
        return $this->belongsToMany(User::class,'favorites','micropost_id','user_id')->withTimestamps();
    }
    
    public function favorite_users()
    {
        return $this->belongsToMany(Users::class,'favorites','user_id','micropost_id')->withTimestamps();
    }
    
    /*
    public function favorite($userId)
    //{
        //すでにお気に入りされているかの確認
        $exist = $this->is_favorite($userId);
        //相手が自分自身のmicropostでないかの確認
        //$its_me = $this->id ==$userId;
        
        if($sxist || $its_me) {
            //既にお気に入りされていれば何もしない
            return false;
        }else {
            //お気に入りされていなければお気に入りする
            $this->favorites()->attach($userId);
            return true;
        }
    }
    
    public function unfavorite($userId)
    {
        //既にお気に入りされているかの確認
        $exist = $this->is_favorite($userId);
        //相手が自分自身のmicropostでないかの確認
        //$its_me = $this->id == $userId;
        
        if($exist && !$its_me){
            //既にお気に入りされていればお気に入りを外す
            $this->favorites()->detach($userId);
            return true;
        }else{
            //お気に入りでなければ何もしない
            return false;
        }
        
    }
    */
    //
}
