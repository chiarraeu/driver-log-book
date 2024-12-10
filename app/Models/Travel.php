<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    protected $table = 'travel';
    protected $fillable = [
        'user_id',
        'truck_id',
        'date',
        'city',
        'company',
        'km',
        'connect_disconnect',
        'trailer_nr'];
}
