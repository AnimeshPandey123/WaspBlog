<?php

namespace App;

use App\Changelog;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable=
    [
			'title','status','description','user_id'
	];
	
	public function changelogs()
	{
		return $this->hasMany(Changelog::class,'project_id');
	}
}
