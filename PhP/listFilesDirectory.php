 <?php
$directory = 'D:\tonyb\Desktop\Logiciels\Cours_Formations\Serveurs\Laragon\www';
function scan($target) {
    $files = scandir($target);
    $ignore = array(".", "..");

    foreach( $files as $doc ) {
        if (!in_array($doc, $ignore)) {
            echo "<a href='$target/$doc'>$doc</a><br>";
        }
    }    
}
scan($directory);
