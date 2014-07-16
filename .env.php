<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
return array(
	// Database
	'MY_DB_HOST'	=> $url["host"],
	'MY_DB_NAME'	=> substr($url["path"], 1),
	'MY_DB_USER'	=> $url["user"],
	'MY_DB_PASS'	=> $url["pass"]
);
