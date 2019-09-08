<?php
if ($argc != 2) {
    echo "Usage: php hello.php [nom].\n";
    exit(1);
}
$nom = $argv[1];
echo "Hello, $nom\n";