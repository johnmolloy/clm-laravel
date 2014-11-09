<?php

class Derivative extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'derivatives';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array();

    /**
     * Turn off timestamps from the manufacturers model
     * As they aren't used in the database table. Stops errors when seeding.
     */
    public $timestamps = false;

}
