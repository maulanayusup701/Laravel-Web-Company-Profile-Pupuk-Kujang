<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_message extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Message()
    {
        return $this->hasMany(Message::class); // 1 Status_message bisa dimiliki banyak Message
    }
}