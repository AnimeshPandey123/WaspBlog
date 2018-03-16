<?php

namespace App;


use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use softDeletes;
	protected $fillable=[
'title','content','category_id','featured','slug','user_id'
	];
	protected $dates=['deleted_at'];

    public function getCreatedAtAttribute($date)
{
    return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('M d Y');
}
    public function user()
    {
    	return $this->belongsTo(User::class,'user_id');
    }

    public function tags(){
    return	$this->belongsToMany('App\Tag');
    }
      public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
