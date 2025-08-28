<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;
    protected $parPage = 10;

    protected $fillable = [
        'date_activity',
        'time',
        'name_activity',
        'description',
        'attached_documents',
        'type_activity',
        'place',
        'state',
        'lawyer_id',
        'reportmodule_id'
    ];

    public function lawyer ()
    {
        return $this->belongsTo (Lawyer::class);
    }

    public function reportmodule ()
    {
        return $this->belongsTo (ReportModule::class);
    }




}
