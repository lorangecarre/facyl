#!/bin/bash
# A script for moving all dev files out of the theme for testing with Theme Check plugin
txtbold=$(tput bold)
boldyellow=${txtbold}$(tput setaf 3)
boldgreen=${txtbold}$(tput setaf 2)
boldwhite=${txtbold}$(tput setaf 7)
yellow=$(tput setaf 3)
green=$(tput setaf 2)
white=$(tput setaf 7)
txtreset=$(tput sgr0)

echo "${YELLOW}Moving dev files out...${TXTRESET}"
mkdir -p $HOME/air-temp
find . -name '.DS_Store' -type f -delete
find ../ -name '.DS_Store' -type f -delete
rm /var/www/airdev/content/themes/facyl/sass/components/.gitkeep $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/sass/modules/.gitkeep $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/.hintrc $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/.stylelintignore $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/.nvmrc $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/.eslintrc.js $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/.browserslistrc $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/.vscode $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/.svgo.yml $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/.accessibilityrc $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/.git $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/.gitignore $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/.jshintignore $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/.travis.yml $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/package.json $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/package-lock.json $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/phpcs.xml $HOME/air-temp/
sudo mv /var/www/airdev/content/themes/facyl/node_modules $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/gulpfile.js $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/bin $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/content $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/__MACOSX $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/.scss-lint.yml $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/front-page.php $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/README.md $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/.stylelintrc $HOME/air-temp/
mv /var/www/airdev/content/themes/facyl/.editorconfig $HOME/air-temp/
mkdir -p $HOME/air-temp/template-parts
mkdir -p $HOME/air-temp/template-parts/header
mkdir -p $HOME/air-temp/template-parts/footer

# Remove custom stuff that are not part of an official WordPress theme in WP theme directory,
# Because:
# REQUIRED: The theme uses the register_taxonomy() function, which is plugin-territory functionality.
# REQUIRED: The theme uses the register_post_type() function, which is plugin-territory functionality.
rm /var/www/airdev/content/themes/facyl/inc/includes/taxonomy.php
rm /var/www/airdev/content/themes/facyl/inc/includes/post-type.php

# Screenshot, related to: https://themes.trac.wordpress.org/ticket/100180#comment:2
mv /var/www/airdev/content/themes/facyl/screenshot.png $HOME/air-temp/
cd /var/www/airdev/content/themes/facyl/
wget https://i.imgur.com/idVvQKv.png
mv -v idVvQKv.png screenshot.png

# Moving to bin dir
cd $HOME/air-temp/bin

echo "
${boldgreen}Done! Next steps:${TXTRESET}"
echo "
${boldwhite}1. Click the Check it -button: http://airdev.test/wp/wp-admin/themes.php?page=themecheck
2. Run: sh air-pack.sh (this also runs air-move-in.sh)
3. Follow instructions
${TXTRESET} "
