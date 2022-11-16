<?php
/**
 * Navigation layout.
 *
 * @Author: Roni Laukkarinen
 * @Date: 2020-05-11 13:22:26
 * @Last Modified by: mikey.zhaopeng
 * @Last Modified time: 2022-09-30 17:04:48
 *
 * @package facyl
 */

namespace Air_Light;

?>

<div id="dialog" role="dialog" aria-labelledby="dialog-title" aria-describedby="dialog-desc" aria-modal="true"
	 aria-hidden="true" tabindex="-1" class="c-dialog">
	<div role="document" class="c-dialog__box">
		<header>
			<h2 id="dialog-title">Paramètres d'accessibilité</h2>
			<button type="button" aria-label="Fermer" title="Fermer les paramètres d'accessibilité" data-dismiss="dialog" class="c-dialog__closeBtn">&#215;
			</button>
		</header>
		<fieldset>
			<legend>Contrastes</legend>
			<button id="themeDefault">Défaut</button>
			<button id="themeReverseColor">Inversés</button>
		</fieldset>
		<fieldset>
			<legend>Police (dyslexie)</legend>
			<button id="fontDefault">Défaut</button>
			<button id="fontDys">Police adaptée</button>
		</fieldset>
		<fieldset>
			<legend>Interlignage</legend>
			<button id="lineHeightDefault">Défaut</button>
			<button id="lineHeightAugmented">Augmenté</button>
		</fieldset>
	</div>
</div>
