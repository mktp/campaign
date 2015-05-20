<?php namespace App\campaign\entities;

use Illuminate\Database\Eloquent\Model;

class Quotetotal extends Model {

	//
	protected $fillable = array('id', 'modelclient', 'compute', 'design', 'consulting', 'btl', 'other', 'total');

}
