<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
     protected $fillable = [
        'book_id',
        'member_profile_id',
        'borrowed_at',
        'due_at',
        'returned_at',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function memberProfile()
    {
        return $this->belongsTo(MemberProfile::class);
    }
}
