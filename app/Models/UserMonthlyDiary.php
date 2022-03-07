<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMonthlyDiary extends BaseModel
{
    public function userMonthlyDiaryItems()
    {
        return $this->hasMany(UserMonthlyDiaryItem::class);
    }

    public function month()
    {
        return $this->belongsTo(Month::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }
}
