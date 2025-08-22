<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evidence_section extends Model
{
    use HasFactory;
    protected $parPage = 10;

    protected $fillable = [
        'type_evidence',
        'description',
        'registration',
        'state_evidence',

    ];











}
