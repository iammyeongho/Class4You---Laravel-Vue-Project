<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChapterState extends Model
{
    use HasFactory;

    protected $primaryKey = 'ChapterStateID';

    protected $fillable = [
        'EnrollmentID',
        'ChapterID',
        'ChapterFlg',
    ];
}
