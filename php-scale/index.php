<?php
  // This line prints the hostname of the server
  // It helps in identifying which server is handling the request in a scaled environment.
  print "I am running on host -> " . gethostname() ." (" . $_SERVER['SERVER_ADDR'] . ")" . "\n";
?>
