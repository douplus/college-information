<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Department extends Eloquent {

	public $timestamps = false;
	protected $table = 'departments';
	protected $fillable = array('is_n', 'school', 'department', 'website');
}
