<div class="container">

<div id="content">

<div class="reg_form">

 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("l/registration"); ?>
 <h3 class="text-center">Shorten Link</h4>
  
   <p class="text-center">
  
  <input type="text" id="urlname" name="urlname" value="<?php echo set_value('urlname'); ?>" />
  </p>
   <p class="text-center">
  <input type="submit" class="greenButton" value="Submit" />
  </p>
 <?php echo form_close(); ?>
</div><!--<div class="reg_form">-->
</div><!--<div id="content">-->
</div>