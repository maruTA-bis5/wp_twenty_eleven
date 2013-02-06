<?php
if (!defined('XOOPS_ROOT_PATH')) die();

if ($handle = opendir(dirname(__FILE__).'/header')) {
	$files = array();
	while (false !== ($entry = readdir($handle))) {
		if (preg_match('/^.*\.(png|jpg)$/i', $entry))
			$files[] = $entry;
	}
	closedir($handle);

	$cnt = count($files);
	$rnd = rand(1, $cnt);
	$this->assign('_theme_header_img', $files[$rnd]);
}