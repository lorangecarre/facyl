#!/bin/bash
# A script for moving all dev files back to the theme
txtbold=$(tput bold)
boldyellow=${txtbold}$(tput setaf 3)
boldgreen=${txtbold}$(tput setaf 2)
boldwhite=${txtbold}$(tput setaf 7)
yellow=$(tput setaf 3)
green=$(tput setaf 2)
white=$(tput setaf 7)
txtreset=$(tput sgr0)

mkdir -p $HOME/air-temp
cp $HOME/air-temp/.gitkeep /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/sass/components/
cp $HOME/air-temp/.gitkeep /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/sass/modules/
mv $HOME/air-temp/.hintrc /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/.stylelintignore /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/.nvmrc /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/.eslintrc.js /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/.browserslistrc /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/.vscode /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/.svgo.yml /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/.accessibilityrc /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/.git /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/.gitignore /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/.jshintignore /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/.travis.yml /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/package.json /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/package-lock.json /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/phpcs.xml /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
sudo mv $HOME/air-temp/node_modules /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/gulpfile.js /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/bin /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/content /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/content
mv $HOME/air-temp/.scss-lint.yml /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/README.md /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/.stylelintrc /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/
mv $HOME/air-temp/.editorconfig /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/

# Move the original starter screenshot back in, related to: https://themes.trac.wordpress.org/ticket/100180#comment:2
rm /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/screenshot.png
mv $HOME/air-temp/screenshot.png /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/

# Restore repository state before move
cd /home/oc-001/Local_Sites/facyl/app/public/wp-content/themes/facyl/ && git stash
git status

echo "
${boldgreen}Air files moved in and github repository restored, now just do the following:${TXTRESET}"
echo "
1. Upload: https://wordpress.org/themes/upload/
2. Create new release: https://github.com/digitoimistodude/facyl/releases
3. Update version to https://airwptheme.com
4. All done!
${TXTRESET} "
