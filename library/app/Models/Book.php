<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //use HasFactory;
    protected $fillable=['name','Auther', 'edition', 'catagory', 'file'];


    public function favourite(){

        $uid = auth()->guard('user')->user()!=null ? auth()->guard('user')->id : null;
        return $this->belongsTo(BookStudent::class, 'id', 'book_id')->where('user_id', $uid);

    }

    public function like(){

        return $this->favourite()->selectRaw('book_id,count(*) as count')->groupBy('book_id');
    }
}
