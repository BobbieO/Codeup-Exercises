<?php

require_once 'Log.php';

$log = new Log();

// $log->filename = 'log-' . $currentDate . '.log';

$log->logMessage('INFO', 'hey');
$log->info('yes');
$log->error('no');

?>
