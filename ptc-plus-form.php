
<div class="full-width search-form school-login-form-wrapper">
	<form class="row school-login" name="school-login-form" method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>">
		<input id="school-pw-input" name="school-pw-entered" class="row" type="text" placeholder="Please enter password to see school Events">
	</form>
</div>

<?php 
$schools = get_the_terms( get_the_ID(), 'ptc_schools');
$school_login_error = 0;
if ( !empty($schools)):?>
    <?php $school_term = array_pop($schools); 
    	$school_pw = get_field('school_password', $school_term);
    ?>
<?php endif; ?>
    

<?php 
if (isset($_POST['school-pw-entered'])):
	
	$pwEntered=$_POST['school-pw-entered'];
	$_SESSION['school_pw'] = $_POST['school-pw-entered'];  ?>
	
<?php else: ?>
	<?php $pwEntered =''; ?>
<?php endif; ?>

 
<?php 
if (($pwEntered == $school_pw) || ($_SESSION['school_pw'] == $school_pw)): ?>
	<?php $school_login = True; ?>
	<?php echo "<script>schoolValidation();</script>"; ?>
<?php else: ?>
	<?php $school_login = False; ?>
	<?php echo "<div class='error'>You enter incorrect password, please check again.</div>"; ?>
<?php endif; ?>
 
