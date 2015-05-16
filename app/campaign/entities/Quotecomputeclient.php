<?php namespace App\campaign\entities;

use Illuminate\Database\Eloquent\Model;

class Quotecomputeclient extends Model {

	//
	protected $fillable = array('id', 'name', 'price', 'required', 'quotemodel');
}
