<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('db_backup'))
{
	/*
	 * Создание бэкапа базы и копирование её на яндекс.диск
	 *
	 *
	 */
function db_backup()
{
	$path = '/path/to/db-bac'.time().'.gz';
	$this->load->dbutil();
	$backup =& $this->dbutil->backup();
	$this->load->helper('file');
	write_file($path, $backup);
    system ("curl --user ".$this->config->item('yandex_email').":".$this->config->item('yandex_pass')." -T ".$path." https://webdav.yandex.ru/backup");
}
}