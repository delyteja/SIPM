<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\User;

use Carbon\Carbon;


class Chat extends Model
{
   protected $fillable=[
   'sender_id','receiver_id','subject','massage','read'];

   protected $appends = ['sender','receiver'];
   public function getCreateAttribute($value)
   {
   	return Carbon::parse($value)->diffForHumans();
   }



   public function getSenderAttribute()
   {
   	return User::where('id', $this->sender_id)->first();
   }

   public function getReceiverAttribute()
   {
   	return User::where('id',$this->receiver_id)->first();
   }
}
