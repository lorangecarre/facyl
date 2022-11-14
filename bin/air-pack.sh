#!/bin/bash
# A script that makes a package for WordPress Theme Directory
txtbold=$(tput bold)
boldyellow=${txtbold}$(tput setaf 3)
boldgreen=${txtbold}$(tput setaf 2)
boldwhite=${txtbold}$(tput setaf 7)
yellow=$(tput setaf 3)
green=$(tput setaf 2)
white=$(tput setaf 7)
txtreset=$(tput sgr0)

mkdir -p /var/www
mkdir -p /var/www/airdev
mkdir -p /home/oc-001/Local_Sites/facyl/app/public/wp-content
mkdir -p /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes
rm /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl.zip
sh /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/bin/air-move-out.sh
cd /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/
zip -r facyl.zip facyl
