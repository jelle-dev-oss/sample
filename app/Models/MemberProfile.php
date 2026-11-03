<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class MemberProfile extends Model
{
    
 public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }
    protected $fillable = [
        'user_id',
        'student_id',
        'address',
        'contact_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
