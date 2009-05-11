<?php 
if (Dispatcher::getAction() != 'view'):
?>

<p class="button"><img src="<?php echo URL_PUBLIC ?>frog/plugins/gravatar/images/gravatar_logo_small.png" align="middle" alt="page icon" /><a href="<?php echo get_url('plugin/gravatar/'); ?>">Home</a></p>

<?php endif; ?>