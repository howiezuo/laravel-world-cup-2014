<?php

class MatchesTableSeeder extends \Seeder {

	public function run()
	{
		DB::table('matches')->delete();
		DB::statement('ALTER TABLE matches AUTO_INCREMENT = 1');

		$json = file_get_contents(app_path() . '/database/seeds/matches.json');
		$data = json_decode($json, true);
		foreach ($data as $match) {
			// $match['play_date'] = strtotime($match['play_date']);
			Match::create($match);
		}
	}

}