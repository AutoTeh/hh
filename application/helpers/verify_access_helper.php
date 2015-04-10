<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('verify_access'))
{
	/**
	 * verify_access проверка на доступ к методу
	 *
	 */
	function verify_access($id_group, $nameurl)
	{
		$this->db->select('id_group')->from('url')->where('Name_Group', $nameurl);
		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
		        $row = $query->row_array();
		        $array = explode(",", $row['title']);
		        Return key_array($id_group, $array, FALSE) ? TRUE : FALSE;
		}

		Return FALSE;
	}
}