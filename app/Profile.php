<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : 'profile/BHca7V2a3id215vOVDngvY9g0rtPvB7TcGbRFgQP.png';
        return '/storage/' . $imagePath;
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
