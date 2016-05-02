<?php

require_once 'Log.php';

$log = new Log('cli');

$log->logMessage('INFO', 'hey');
$log->info('yes');
$log->error('no');

?>
