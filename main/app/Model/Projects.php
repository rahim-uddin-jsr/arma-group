<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $guarded=['id'];

    public function images() {
        return $this->hasMany(ProjectImage::class,'project_id','id');
    }
}
