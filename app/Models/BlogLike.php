<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogLike extends Model
{
    use HasFactory;
    public function admin(){
        return $this->belongsTo(Admin::class);
    }
    public function vendor(){
        return $this->belongsTo(Vendor::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function blog(){
        return $this->belongsTo(Blog::class);
    }
}
