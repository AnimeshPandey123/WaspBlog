<?php

namespace App;

use App\Project;
use Illuminate\Database\Eloquent\Model;

class Changelog extends Model
{
    protected $fillable=
    [
    	'title','project_id','date','description','user_id','version'
    ];
    public function project()
    {
    	return $this->belongsTo(Project::class,'project_id');
    }
}
