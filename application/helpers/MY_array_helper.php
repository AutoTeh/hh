<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('key_array'))
{
	/**
	 * Key_array
	 *
	 * Поиск в массиве
	 *
	 * @param	string
	 * @param	array
	 * @param	mixed
	 * @return	mixed	depends on what the array contains
	 */
	function key_array($item, $array, $default = NULL)
	{
		return array_search($item, $array) === FALSE ? $array[$item] : $default;
	}
}