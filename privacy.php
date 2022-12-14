<?php

session_start();

require_once(__DIR__.'/src/utils/require.php');

$user = new User();

$page = new Template('privacy', !$user->loggedIn);

if ($user->loggedIn) {
  $page->putDynamicContent($user->getUser());
}

$page->render();

?>