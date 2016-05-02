<?php

require_once 'Log.php';

$log = new Log();

$log->logMessage('INFO', 'hey');
$log->info('yes');
$log->error('no');

?>
