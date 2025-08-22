<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $parPage = 10;

    protected $fillable = [
        'file_name',
        'type_document',
        'date_compleiton',
        'description',
        'observation',
        'file_path',
    ];

    public function activity ()
    {
        return $this->hasMany (Activity::class);
    }

    public function lawyer ()
    {
        return $this->belongsTo (Lawyer::class);
    }







}
