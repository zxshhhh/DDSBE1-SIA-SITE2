<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserJob extends Model
{
    protected $table = 'tbluserjob'; // Reference your table name

    protected $fillable = [
        'jobid', 'jobname', 
    ];

    public $timestamps = false; // Disable timestamps if not needed
    protected $primaryKey = 'jobid'; 
}
