
<div class="full-width search-form school-login-form-wrapper">
	<form class="row school-login" name="school-login-form" method="POST" onsubmit="return validateSchoolLogin()">
		<div id="form-validation" class="form-validation"></div>
		<input id="school-pw-input" name="school-pw-entered" class="row" type="text" placeholder="Please enter password to see school Events">
		
		<input type="hidden" name="validate_url" value="<?php $_SERVER["PHP_SELF"]; ?>">
		<summary><button type="submit">Press Enter</button></summary>
		
	</form>
</div>

<?php 


if (isset($_POST['school-pw-entered'])) {
	
	$pwEntered=$_POST['school-pw-entered'];
	$_SESSION['school_pw'] = $_POST['school-pw-entered'];
	
} else {
	
	$pwEntered ='';

}

 
if (isset($_POST['validate_url'])){
	
	$validate_url=$_POST['validate_url'];

} else {
	
	$validate_url = '';

}

if (($pwEntered == $school_pw) || ($_SESSION['school_pw'] == $school_pw)){
	$school_login = True;

} else {

	$school_login = False;

}
 ?>
