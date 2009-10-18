<?php 
if (Dispatcher::getAction() != 'view'):
?>


<h1 style="float: left;"><img src="<?php echo URL_PUBLIC ?>wolf/plugins/gravatar/images/gravatar_logo.png" style="padding-bottom: 15px;" /></h1>

<h1 style="float: right;">Displaying your Gravatar Image on your site</h1>


<div style="clear: both;"></div>

<p>Thanks to <a href="http://www.gravatar.com">Gravatar</a> for a great service, helping keep our identities properly aligned everywhere we go.</p>

<p>I got the idea for this from Philippe's implementation on Frog CMS, using the same service for the <em>User Management</em> in the Admin area - great work!</p>

<p>Now, you can add your own gravatar to the <em>front end</em> of the site by adding a little bit of Code to your page:</p>

<p>&nbsp;</p>

<code>&lt;?php gravatar('you@yourdomain.com',image_size) ?></code>

<p>&nbsp;</p>

<p>The <code>image_size</code> is the size the image is displayed in pixels, so for a 40px by 40px picture of yourself just enter:</p>

<p>&nbsp;</p>

<code>&lt;?php gravatar('you@yourdomain.com',40) ?></code>

<?php endif; ?>