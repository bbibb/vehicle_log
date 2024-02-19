#!/bin/bash
declare root=/var/www/html/linux1/favmovies2

# Delete all gedit automatic copies
rm $root/*~

# Move all iteration files to workfiles directory
mv $root/*_1[123456789]* $root/workfiles/

# List the reamining files
echo " "
echo "LIST OF REMAINING FILES AND  DIRECTORIES"
echo
ls -la $root/

