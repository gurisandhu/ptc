<div class="full-width">
	<form class="row school-login" name="school-login" method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>">
		<div id="form-validation" class="form-validation"></div>
		
		<input id="school-pw-input" name="school-pw-entered" onkeyup="validateSchoolLogin()" class="row" type="text" placeholder="Please enter password to see school Events">
		
		<input type="hidden" name="school_term" value="<?php $school_term; ?>">
		
		<input type="hidden" name="validate_url" value="<?php $_SERVER["PHP_SELF"]; ?>">
		
		<input type="submit" value="Login" name="submit">
	</form>
</div>

<?php 


if (isset($_POST['school-pw-entered'])) {
	
	$pwEntered=$_POST['school-pw-entered'];
	
} else {
	
	$pwEntered ='';

}

if (isset($_POST['validate_url'])){
	
	$validate_url=$_POST['validate_url'];

} else {
	
	$validate_url = '';

}

if ($pwEntered == $school_pw){
	$school_login = True;

} else {

	$school_login = False;

}
 ?>

