<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasFormatRupiah;

class booking extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    protected $guarded = ['id'];

    public function posts(){
        return $this->belongsTo(Post::class);
    }
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Status(){
        return $this->belongsTo(Status::class);
    }
}
