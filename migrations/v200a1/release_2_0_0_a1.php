<?php
/**
 *
 * @package bbGuild FFXI Extension
 * @copyright (c) 2026 avathar.be
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Release 2.0.0-a1 checkpoint migration
 *
 * Canonical version lives in ext::BBGUILDFFXI_VERSION; not in phpbb_config.
 */

namespace avathar\bbguildffxi\migrations\v200a1;

class release_2_0_0_a1 extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return [
			'\avathar\bbguildffxi\migrations\basics\data',
		];
	}

	public function effectively_installed()
	{
		// Version lives in ext::BBGUILDFFXI_VERSION, not phpbb_config;
		// check a concrete artifact instead (the game row this plugin's
		// basics/data migration seeds).
		$games_table = $this->table_prefix . 'bb_games';
		$sql = 'SELECT COUNT(*) AS cnt FROM ' . $games_table . " WHERE game_id = 'ffxi'";
		$result = $this->db->sql_query($sql);
		$count = (int) $this->db->sql_fetchfield('cnt');
		$this->db->sql_freeresult($result);

		return $count > 0;
	}
}
