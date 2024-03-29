# Thème Facyl

- [Dépôt de code](https://github.com/lorangecarre/facyl)
- [Wiki](https://github.com/lorangecarre/facyl/wiki)
- [Maquette graphique](https://www.figma.com/file/VkshSL9RZO6M1HZarlmsnk/Maquette-FACYL?node-id=0%3A1)

## Installation

```bash
npm i 
npx husky install 
npx husky add .husky/commit-msg 'npx commitlint --edit $1'
```

Si besoin, installation de la CLI de Gulp:
```bash
npm install --global gulp-cli
```

Pour générer les certificats pour le https en local:
```bash
sudo apt install mkcert
mkdir -p /var/www/certs && cd /var/www/certs && mkcert localhost 192.168.x.xxx ::1
```

## Mise en prod

- Avant toutes choses : lancer la commande *gulp devstyles* et *gulp prodstyles*
- Aller dans le dossier bin
- Modifier /home/oc-001/Local_Sites/facyl/app/public/wp-content par le chemin de votre dossier dans les fichiers air-move-out.sh et air-pack.sh
- Lancer les commandes : 
```bash
sudo sh air-move-out.sh
sudo sh air-pack.sh
```

Le fichier zip du theme sera disponible dans votre dossier theme

## Debuggers

Air-light comes with PHP_CodeSniffer for PHP files, stylelint for SCSS/CSS files and eslint for JS files built inside gulpfile.js. Please note, you need to configure global versions of these separately!

It's also recommended to use Query Monitor plugin, as some debugging messages goes straight to it's logger.

### For gulp
PHP_CodeSniffer needs to be installed under /usr/local/bin/phpcs with WordPress-Coding-Standards for php-debuggers to work properly in gulp. If you don't want to use phpcs with gulp, you can disable it by commenting out or deleting line gulp.watch(phpSrc, ['phpcs']);.

The golden rule here is to make sure the commands stylelint, eslint and phpcs work from command line.

**How to install for Gulp**

```bash
mkdir -p ~/Projects && cd ~/Projects && git clone -b master --depth 1 https://github.com/squizlabs/PHP_CodeSniffer.git phpcs
git clone -b master https://github.com/PHPCompatibility/PHPCompatibility
git clone -b master --depth 1 https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards.git wpcs
```

**Please note: Replace yourusername name with your actual user name!**
```bash
sudo ln -s /home/yourusername/Projects/phpcs/bin/phpcs /usr/local/bin/phpcs
sudo chmod +x /usr/local/bin/phpcs
```

**Please note: Replace yourusername name with your actual user name!**
```bash
phpcs --config-set installed_paths "/home/yourusername/Projects/wpcs","/home/yourusername/Projects/PHPCompatibility"
```

Test your standards with phpcs -i, it should display something like this:

```bash
The installed coding standards are PEAR, Zend, PSR2, MySource, Squiz, PSR1, PSR12, PHPCompatibility, WordPress, WordPress-Extra, WordPress-Docs and WordPress-Core
```

```bash
npm i stylelint eslint -g
```

Check that other linters work:
```bash
stylelint -v 
eslint -v
```

### For your editor

It's also best to have all stylelint, eslint, phpcs living inside your editor. We think Visual Studio Code is best for this, check out the plugins inside vscode-settings repository to make sure everything is installed.

## Convention de commit
type(scope?): subject #scope is optional; multiple scopes are supported (current delimiter options: "/", "" and ",")

Types list by convention :

- build: changes that affect the build system or external dependencies
- ci: changes to our CI configuration files and scripts
- docs: documentation only changes.
- feat: used when a commit adds a new feature to your application or library.
- fix: used when a commit represents a bug fix for your application.
- perf: a code change that improves performance.
- refactor: a code change that neither fixes a bug nor adds a feature.
- revert: revert code changes made before.
- style: changes that do not affect the meaning of the code (white-space, formatting, missing semi-colons, etc).
- test: adding missing tests or correcting existing tests.
- chore: other task.

---

## Astuces code css
` @include button(max-content,var(--color-black),var(--color-black),var(--color-white),var(--color-white),30px,1px solid var(--color-black),1px solid var(--color-black),var(--font-weight-semibold),true);`

` @include box-with-shadow(border-radius,blur,background color de la box); `

## Pour ajouter tout les blocs Gutenberg 

- Aller dans le function.php
- Retrouver la ligne avec le tableau 'Alloweb_blocks'
- Le supprimer et le remblacer par :    'allowed_blocks' => 'all',
