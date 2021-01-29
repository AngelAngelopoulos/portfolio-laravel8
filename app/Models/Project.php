<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'url', 'description', 'image', 'category_id', 'link'];
    //protected $guarded = [];

    public function getRouteKeyName()
    {
        //cambiamos el return del Key por default, en este caso por la url (pretty)
        return 'url'; // TODO: Change the autogenerated stub
    }

    public function category()
    {
        //Proyecto tiene una categoria
        return $this->belongsTo(Category::class);
    }
}
