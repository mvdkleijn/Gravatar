**Status:** No longer active / archived

Gravatar Plugin for Wolf CMS
by Andrew Waters
andrew@band-x.org

Thanks for downloading my Gravatar plugin!

Thanks to Gravatar for a great service, helping keep our identities properly aligned everywhere we go.

I got the idea for this from Philippe's implementation on Frog CMS, using the same service for the User Management in the Admin area - great work!



------------
INSTALLATION
------------

Very simple to install:

1. Unzip the files
2. Upload the 'gravatar' folder to your plugins directory
3. Go to your admin panel and activate the plugin
4. Click the new 'Gravatar' tab and read the usage instructions



-----
USAGE
-----

You can add your own gravatar to the front end of the site by adding a little bit of Code to your page:

<?php gravatar('you@yourdomain.com',image_size) ?>

The image_size is the size the image is displayed in pixels, so for a 40px by 40px picture of yourself just enter:

<?php gravatar('you@yourdomain.com',40) ?>

Simples.



---------
CHANGELOG
---------

0.2
- Fixed bug with images not being displayed properly in the backend and the default image.
- Fixed Controller file so correct Sidebar view is displayed

0.1
+ First Build
