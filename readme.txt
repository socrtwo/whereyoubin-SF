                *****Where In the World Have I Been All My Life?*****
  
                               ****Version 3.0****

                                ****Changes****
1. Whole site has be recoded and cleaned up by professional programmer. Find him on fiverr.com as user name "mklean".
2. An install.php file will create the necessary database tables if provided with the correct MySQL info. It will also produce a config file. The config file, if it exists in the home folder before the install.php is run, will prevent it from running.
3. No python is now needed to be installed on the server so no Python path is needed. The poster making ability has been taken over by bbfreeze created Python executables which contains within it the necessary Python executables.

                             ****Requirements****
1. A Linux server with a web server and PHP installed.
2. The PHP exec() function should be turned on. Some shared hosting companies disallow this. A good advanced user catering hosting company like dreamhost.com have this on by default. Others may turn it on if asked. This is only needed for the poster making feature. If you don't need this, then the exec() function is not needed.

                               ****Install****

1. Upload zip distribution to a web server folder and unzip. If you are uploading unzipped files and folder, upload posterScript/pdfposter and posterScript/py in binary mode. All other files and folders can be uploaded in Auto or ASCII mode.
2. Change the permissions on posterScript/pdfposter and posterScript/py from 644 to 755 to allow the poster making feature to work.
3. Create a MySQL database through the control panel of your server. Note the database host, database name, user name and password.
4. If there is a config.php file in the root rename it or delete then navigate to install.php.
5. Fill in the config fields on the install.php screen with the MySQL database host, database name, user name and password. The most frequent cause for failure here is getting the name of the database host correct. If localhost does not work and the information is difficult to find, ask your hoster what is correct.
6. Test your installations by clicking on countries, states and provinces in the various maps then clicking and the features on the upper left for saving the maps as images with and without text, saving the maps with permanent URLs to come back later for update and finally making a poster.
                           
                           ****Contact/Support****

                                  Paul Pruitt
                             socrtwo@s2service.com

Will install on your domain for $50 :-). Customizing rate through me Paul Pruitt is billed at $20 an hour. Through mklean, contact him through fiverr.com as user name mklean.
