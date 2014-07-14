<?php

class PlayersTableSeeder extends \Seeder {

	public function run()
	{
		DB::table('players')->delete();
		DB::statement('ALTER TABLE players AUTO_INCREMENT = 1');

		$json = file_get_contents(app_path() . '/database/seeds/players.json');
		$data = json_decode($json, true);
		foreach ($data as $player) {
			Player::create($player);
		}
	}

}