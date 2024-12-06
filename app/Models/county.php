<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class county extends Model
{
    /** @use HasFactory<\Database\Factories\CountyFactory> */
    use HasFactory;

    public function projects()
    {
        return $this->hasMany(citizen_audit_projects::class);
    }
}
