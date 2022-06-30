<?php

namespace SimonMarcelLinden\DatabaseSettings\Models;

use SimonMarcelLinden\DatabaseSettings\Traits\Uuids;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Option extends Model {
	use HasFactory, SoftDeletes, Uuids;

	protected $guarded = [];

	/**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'options';

	/**
	 * Get the setting record associated with the Option.
	 */
	public function setting() {
		return $this->hasOne(Setting::class);
	}
}
