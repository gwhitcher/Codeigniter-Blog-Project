<div id="left_wrapper">
<div id="page_body">
<h2>Contact</h2>
<?php if (!empty($success)){?>
<?php echo $success; ?>
<?php } ?>
<?php if (!empty($captchaincorrect)){?>
<?php echo $captchaincorrect; ?>
<?php } ?>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('./contact') ?>
<label for="email">Email</label><br />
<input type="input" name="email" /><br />
<label for="name">Name</label><br />
<input type="input" name="name" /><br />
<label for="subject">Subject</label><br />
<input type="input" name="subject" /><br />
<label for="message">Message</label><br />
<textarea name="message" cols="60" rows="10"></textarea><br />
<?php echo $captcha; ?><br />
<input type="text" name="captcha" value="" /><br />
<input type="submit" name="submit" value="Submit" /> 
<?=form_close()?>