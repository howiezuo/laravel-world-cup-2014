<?php

class Team extends Eloquent {
	protected $fillable = array('id', 'nation', 'code', 'gruop');

	protected $table = 'teams';
}
