<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Mass assigned
    protected $guarded = [];

    public function downloads()
    {
        return $this->morphToMany(Download::class, 'downloadable');
    }
}
