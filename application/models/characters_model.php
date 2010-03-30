<?php
/*
|---------------------------------------------------------------
| CHARACTERS MODEL
|---------------------------------------------------------------
|
| File: models/characters_model.php
| System Version: 1.0
|
| Model used to access the characters table.
|
*/

require_once APPPATH . 'models/base/characters_model_base.php';

class Characters_model extends Characters_model_base {

	function Characters_model()
	{
		parent::Characters_model_base();
	}

	function get_character_ucip_member($character = '')
	{
		$this->db->from('characters');
		$this->db->where('charid', $character);

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			$item = $query->row();

			$array['ucip_member'] = $item->ucip_member;

			foreach ($array as $key => $value)
			{
				if (empty($value))
				{
					unset($array[$key]);
				}
			}

			$string = implode(' ', $array);
			return $string;
		}

		return FALSE;
	}

	function get_character_ucip_dbid($character = '')
	{
		$this->db->from('characters');
		$this->db->where('charid', $character);

		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
			$item = $query->row();

			$array['ucip_member'] = $item->ucip_dbid;

			foreach ($array as $key => $value)
			{
				if (empty($value))
				{
					unset($array[$key]);
				}
			}

			$string = implode(' ', $array);
			return $string;
		}

		return FALSE;
	}
}

/* End of file characters_model.php */
/* Location: ./application/models/characters_model.php */