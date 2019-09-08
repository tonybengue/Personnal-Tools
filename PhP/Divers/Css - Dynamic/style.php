<?php
	session_start();
	header( 'content-type: text/css' );
?>
body {
    background: <?php echo $_SESSION['bg']['body']; ?>;
    color: <?php echo $_SESSION['txt']['body']; ?>;
}
#container {
    background: <?php echo $_SESSION['bg']['container']; ?>;
	color: <?php echo $_SESSION['txt']['police']; ?>;
    border: 1px solid <?php echo $_SESSION['txt']['border']; ?>;  
}