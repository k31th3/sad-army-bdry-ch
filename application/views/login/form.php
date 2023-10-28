
<?=heading("Sign in", 1, "class='mb-5'")?>

<?=form_open(null, [ "class" => "vstack gap-3", "autocomplete" => "off" ])?>

	<div class="form-floating">
		<input type="email" class="form-control" id="email" name="email">
		<label for="email">Email</label>
		<span id="email-msg"></span>
	</div>

	<div class="form-floating">
		<input type="password" class="form-control" id="password" name="password">
		<label for="password">Password</label>
		<span id="password-msg"></span>
	</div>

	<div class="form-check text-start">
	  	<input class="form-check-input" type="checkbox" id="show-pass">
	  	<label class="form-check-label" for="show-pass">
	    	Show password
	  	</label>
	</div>

	<?php 
		$attr = array(
			"type" => "submit",
			"class" => "btn btn-primary w-100",
			"content" => "Sign in"
		);

		echo form_button($attr);
	?>

	<div class="">
		
	</div>

<?=form_close()?>