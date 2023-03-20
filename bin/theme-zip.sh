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

PROJECT_HOME="$(cd .. && pwd)"
ZIP_DIR="$(cd ../.. && pwd)"
PAGE_DIFF="$(cd .. && ls | grep '^page')"
SINGLE_DIFF="$(cd .. && ls | grep '^single')"
THEMES_HOME="$(cd ../.. && pwd)"

echo "${YELLOW}Copie des fichiers dans le nouveau dossier${TXTRESET}"
gulp devstyles
gulp prodstyles
mkdir -p $ZIP_DIR/facyl-theme
cp -R $PROJECT_HOME/template-parts $ZIP_DIR/facyl-theme
cp -R $PROJECT_HOME/svg $ZIP_DIR/facyl-theme
mkdir -p $ZIP_DIR/facyl-theme/js/
cp -R $PROJECT_HOME/js/prod/ $ZIP_DIR/facyl-theme/js/
cp -R $PROJECT_HOME/inc $ZIP_DIR/facyl-theme
cp -R $PROJECT_HOME/fonts $ZIP_DIR/facyl-theme
mkdir -p $ZIP_DIR/facyl-theme/css/
cp -R $PROJECT_HOME/css/prod/ $ZIP_DIR/facyl-theme/css/
cp $PROJECT_HOME/style.css $ZIP_DIR/facyl-theme
cp $PROJECT_HOME/sidebar.php $ZIP_DIR/facyl-theme
cp $PROJECT_HOME/search.php $ZIP_DIR/facyl-theme
cp $PROJECT_HOME/screenshot.png $ZIP_DIR/facyl-theme
cp $PROJECT_HOME/index.php $ZIP_DIR/facyl-theme
cp $PROJECT_HOME/header.php $ZIP_DIR/facyl-theme
cp $PROJECT_HOME/functions.php $ZIP_DIR/facyl-theme
cp $PROJECT_HOME/front-page.php $ZIP_DIR/facyl-theme
cp $PROJECT_HOME/footer.php $ZIP_DIR/facyl-theme
cp $PROJECT_HOME/comments.php $ZIP_DIR/facyl-theme
cp $PROJECT_HOME/404.php $ZIP_DIR/facyl-theme
cp $PROJECT_HOME/CHANGELOG.md $ZIP_DIR/facyl-theme
cp $PROJECT_HOME/LICENSE.md $ZIP_DIR/facyl-theme
for fichier in $PAGE_DIFF
do
  cp $PROJECT_HOME/$fichier $ZIP_DIR/facyl-theme
done
for fichier_single in $SINGLE_DIFF
do
  cp $PROJECT_HOME/$fichier_single $ZIP_DIR/facyl-theme
done

cd $THEMES_HOME
zip -r facyl-theme.zip facyl-theme
rm -r facyl-theme

echo "
${boldwhite}Vous pouvez retrouver le zip dans le dossier parent
${TXTRESET} "
