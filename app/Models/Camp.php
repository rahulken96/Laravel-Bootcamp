<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Camp extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillabel = [
        'title',
        'price'
    ];

    /* 
    => Pada penulisan di bawah ini sebenarnya bisa diganti dengan " TelahTerdaftar() ",
    namun nanti ketika dipanggil fungsinya tetap seperti itu tidak ada shortcut penulisan nya.
    */

    public function getTelahTerdaftarAttribute()
    {
        if (!Auth::check()) {
            return false;
        }
        return Checkout::where('camp_id',$this->id)->where('user_id',Auth::id())->exists();
    }


}
