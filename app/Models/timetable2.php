<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class timetable2 extends Model
{
    protected $table = 'timetable';

    protected $fillable = [
        'date',
        'queue_1',
        'queue_2',
        'queue_3',
        'queue_4',
    ];


}
