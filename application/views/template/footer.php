</section>
<footer>
<?php if($this->session->userdata('logged_in')) { ?>
<a href="<?php echo base_url(); ?>admin">Admin</a> | <a href="<?php echo base_url(); ?>logout">Logout</a><br />
<?php } ?>
<strong><?php echo $this->config->item('title'); ?> is a Trademark of <?php echo $this->config->item('title'); ?>. 
<br />
&copy; Copyright <?php echo $this->config->item('copyrightyear'); ?> - <?php echo date("Y"); ?> <?php echo $this->config->item('title'); ?>. All Rights Reserved.</strong>
</footer>
</div>
</body>
</html>