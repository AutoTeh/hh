<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('verify_access'))
{
	/**
	 * verify_access �������� �� ������ � ������
	 *
	 */
	function verify_access($id_group, $nameurl)
	{
		$this->db->select('ID_Group')->from('url')->where('Name_Group', $nameurl);
		$query = $this->db->get();

		if ($query->num_rows() > 0)
		{
		        $row = $query->row_array();
		        $array = explode(",", $row['ID_Group']);
		        Return key_array($id_group, $array, FALSE) ? TRUE : FALSE;
		}

		Return FALSE;
	}
}