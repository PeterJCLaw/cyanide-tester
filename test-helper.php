<?php

require_once('test-header.php');
try
{
	require_once($argv[1]);
}
catch (Exception $e)
{
	test_abort_exception($e);
}
