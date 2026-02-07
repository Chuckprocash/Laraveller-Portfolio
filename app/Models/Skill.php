<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project;



class Skill extends Model
{
    
    protected $fillable = ['name', 'image'];
    //
    protected $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function deleteImage()
    {
        if ($this->image && file_exists(public_path($this->image))) {
            unlink(public_path($this->image));
        }
    }


    public function projects(){
        return $this->hasMany(Project::class);
    }

}
