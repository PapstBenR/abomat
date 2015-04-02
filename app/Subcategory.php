<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model {
	use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
