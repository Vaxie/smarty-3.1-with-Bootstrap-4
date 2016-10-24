<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require '../libs/Smarty.class.php';

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("Name", "Bootstrap 4 with Smarty 3.1", true);

$smarty->display('index.tpl');
