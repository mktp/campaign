<?php namespace App\campaign\entities;

use Illuminate\Database\Eloquent\Model;

class Quotedesignclient extends Model {

	//
	protected $fillable = array('id', 'name', 'price', 'required', 'quotemodel');
}
