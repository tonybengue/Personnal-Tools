 <?php
$directory = 'D:\Logiciels\Cours_Formations\Serveurs\PhP_SQL\Laragon_BEST\www\Content';
function scan($target) {
    $files = scandir($target);
    $ignore = array(".", "..");
    echo '<pre>';
    foreach( $files as $doc ) {
        if(!in_array($doc, $ignore)) {
            echo "<a href='$target/$doc'>$doc</a><br>";
        }
    }
    echo '</pre>';
}
scan($directory);
