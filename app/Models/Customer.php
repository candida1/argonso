<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    protected $parPage = 10;

    protected $fillable = [
        'name',
        'lastname',
        'gender',
        'identity_card',
        'telephone',
        'address',
        'email',
        'registration_date',
    ];


    public function agendas ()
    {
        return $this->hasOne (Agenda::class);
    }

    public function case_customer ()
    {
        return $this->hasOne (case_customer::class);
    }




}
