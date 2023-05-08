<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Content extends Model
{
    use HasFactory;
	
	protected $fillable = [ 'title', 'content', 'image' ];
	
	protected $guarded = [ 'id' ];
	
	public function getSlug () : string { return Str::slug ($this->title); }
	
}
