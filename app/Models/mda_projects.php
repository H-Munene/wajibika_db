<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mda_projects extends Model
{
    /** @use HasFactory<\Database\Factories\MdaProjectsFactory> */
    use HasFactory;

    public function stateDepartment()
    {
        return $this->belongsTo(stateDepartment::class);
    }

    public function county()
    {
        return $this->belongsTo(County::class);
    }
}
