<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function categoryEvent(){
        return $this->belongsTo(CategoryEvent::class);
    }

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }

}
