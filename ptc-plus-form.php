
<div class="full-width search-form school-login-form-wrapper">
	<form class="row school-login" name="school-login-form" method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>">
		<div class="row">
			<input id="school-pw-input" name="school-pw-entered" type="text" placeholder="Please enter password to see school Events">
		</div>
		<div class="row">
			<button type="submit" class="more sky but-col-3">Log In</button>
		</div>
	</form>
</div>

<?php 
$schools = get_the_terms( get_the_ID(), 'ptc_schools');
$school_login_error = 0;
$school_login_error_text = '';
$_SESSION['school_pw'];
if ( !empty($schools)):?>
    <?php $school_term = array_pop($schools); 
    	$school_pw = get_field('school_password', $school_term);
    ?>
<?php endif; ?>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST['school-pw-entered'])){
		$school_login_error_text = "Please enter password";
		$school_login_error ++;
	} elseif ($_POST['school-pw-entered'] !== $school_pw) {
		$school_login_error_text = "You enter incorrect password, please check again";
		$school_login_error ++;
	} elseif ($_POST['school-pw-entered'] == $school_pw){
		 $school_login = True;
		 $_SESSION['school_pw'] = $school_pw;
	 echo "<script>schoolValidation();</script>";
	}
}	  ?>

<?php if ($_SESSION['school_pw'] == $school_pw): ?>
	<?php $school_login = True; 
		echo "<script>schoolValidation();</script>";
	?>

<?php endif; ?>	

<?php if ($school_login_error !== 0): ?>
<div class='row error'><?php echo $school_login_error_text; ?></div>
<?php endif; ?>


 
