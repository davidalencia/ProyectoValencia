<?php
function datos ($nombre){
  if (isset($_POST[$nombre]))
    return $_POST[$nombre];
	else
    return "";
}
?>
