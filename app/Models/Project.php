<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Skill;


class Project extends Model
{
    
    protected $fillable = ['skill_id', 'name', 'image', 'project_url'];
    //
    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function skill(){
        return $this->belongsTo(Skill::class);
    }
}
