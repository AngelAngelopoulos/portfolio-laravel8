<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     //protected $guarded = [];

    public function getRouteKeyName()
    {
        //Regresa el link en lugar del id
        return 'link';
    }

    public function projects()
    {
        // Una categoria tiene muchos proyectos
        return $this->hasMany(Project::class);
    }
}
