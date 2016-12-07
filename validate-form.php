<?php 


if (isset($_POST['school-pw-entered'])) {
	$pwEntered=$_POST['school-pw-entered'];
} else {
	$pwEntered ='';
}

if (isset($_POST['school_term'])){
	// $school_term=$_POST['school_term'];
} else {
	// $school_term = '';
}

if (isset($_POST['validate_url'])){
	$validate_url=$_POST['validate_url'];
} else {
	$validate_url = '';
}
 ?>



 <h1><?php echo $pwEntered; ?></h1>
 <h1><?php echo $validate_url; ?></h1>



 <?php wp_reset_query(); ?>	