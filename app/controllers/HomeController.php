<?php

class HomeController extends BaseController {

	public function index()
	{
		$teams = Team::all();

        $groups = array();
        $temp_teams = array();
        foreach ($teams as $team) {
            // team list
            $temp_teams[$team['code']] = $team;

            // default
            $team['w'] = $team['d'] = $team['l'] = $team['gf'] = $team['ga'] = $team['p'] = 0;
        }

        $round = array();
        $quarter = array();
        $semi = array();
        $third = array();
        $final = array();
		$matches = Match::all();
		foreach ($matches as $match) {
            // change code to name
            if (isset($temp_teams[$match['team1']])) {
                $match['name1'] = $temp_teams[$match['team1']]['name'];
            }
            if (isset($temp_teams[$match['team2']])) {
                $match['name2'] = $temp_teams[$match['team2']]['name'];
            }

            if (starts_with($match['stage'], 'group')) {
                $g = substr($match['stage'], -1);
                // group stage
                $groups[$g]['matches'][] = $match;

                // rank
                if ($match['goal1'] > $match['goal2']) {
                    $temp_teams[$match['team1']]['w'] += 1;
                    $temp_teams[$match['team2']]['l'] += 1;
                } elseif ($match['goal1'] < $match['goal2']) {
                    $temp_teams[$match['team1']]['l'] += 1;
                    $temp_teams[$match['team2']]['w'] += 1;
                } else {
                    $temp_teams[$match['team1']]['d'] += 1;
                    $temp_teams[$match['team2']]['d'] += 1;
                }
                $temp_teams[$match['team1']]['gf'] += $match['goal1'];
                $temp_teams[$match['team2']]['ga'] += $match['goal1'];
                $temp_teams[$match['team1']]['ga'] += $match['goal2'];
                $temp_teams[$match['team2']]['gf'] += $match['goal2'];
            } elseif ($match['stage'] == 'round') {
                $round[] = $match;
            } elseif ($match['stage'] == 'quarter') {
                $quarter[] = $match;
            } elseif ($match['stage'] == 'semi') {
                $semi[] = $match;
            } elseif ($match['stage'] == 'third') {
                $third = $match;
            } elseif ($match['stage'] == 'final') {
                $final = $match;
            }
        }

        usort($temp_teams, array($this, "sort"));

        foreach ($temp_teams as $team) {
            // group list
            $groups[$team['group']]['teams'][] = $team;
        }

		return View::make('home', array(
            'title'     => 'World Cup 2014',
            'groups'    => $groups,
            'round'    => $round,
            'quarter'  => $quarter,
            'semi'     => $semi,
            'third'     => $third,
            'final'     => $final,
        ));
	}

    private function sort($a, $b) {
        if (($a['w'] * 3 + $a['d']) > ($b['w'] * 3 + $b['d'])) {
            return -1;
        } elseif (($a['w'] * 3 + $a['d']) < ($b['w'] * 3 + $b['d'])) {
            return 1;
        } else {
            if (($a['gf'] - $a['ga']) > ($b['gf'] - $b['ga'])) {
                return -1;
            } elseif (($a['gf'] - $a['ga']) < ($b['gf'] - $b['ga'])) {
                return 1;
            } else {
                if ($a['gf'] > $b['gf']) {
                    return -1;
                } elseif ($a['gf'] < $b['gf']) {
                    return 1;
                } else {
                    return 0;
                }
            }
        }
    }
}

