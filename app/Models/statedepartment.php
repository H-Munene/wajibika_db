<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statedepartment extends Model
{
    /** @use HasFactory<\Database\Factories\StatedepartmentFactory> */
    use HasFactory;

    public function projects()
    {
        return $this->hasMany(mda_projects::class);
    }
}
