<?php

require 'helpers.php';

$taskStatus = 'backlog';

echo renderTemplate('layout.php', [
  'task' => $taskStatus,
  'taskName' => 'Нова задача',
]);

