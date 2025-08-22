<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory;
    protected $parPage = 10;

    protected $fillable = [
        'event_name',
        'description',
        'date',
        'time',
        'duration',
        'place',
        'event_status',
        'customer_id'
    ];

    public function customers ()
    {
        return $this->belongsTo (Customer::class);
    }




}
