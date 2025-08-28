<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lawyer extends Model
{
    use HasFactory;

    protected $perPage = 10;

    protected $fillable = [
        'name',
        'lastname',
        'gender',
        'identity_card',
        'telephone',
        'address',
        'email',
       

    ];

    public function activity ()
    {
        return $this->hasOne (Activity::class);
    }

    public function case_customer ()
    {
        return $this->hasOne (Case_customer::class);
    }



    public function document ()
    {
        return $this->hasMany (Document::class);
    }




}
