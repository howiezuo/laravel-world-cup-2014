<?php

class TeamsTableSeeder extends \Seeder {

	public function run()
	{
		DB::table('teams')->delete();
		DB::statement('ALTER TABLE teams AUTO_INCREMENT = 1');
		$json = file_get_contents(app_path() . '/database/seeds/teams.json');
		$data = json_decode($json, true);
		foreach ($data as $team) {
			Team::create($team);
		}
	}

}