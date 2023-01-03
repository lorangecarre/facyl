<?php
/**
 * @Author: Timi Wahalahti
 * @Date:   2019-12-03 11:03:31
 * @Last Modified by: mikey.zhaopeng
 * @Last Modified time: 2022-09-30 16:51:05
 *
 * @package facyl
 */

namespace Air_Light;

add_filter( 'air_helper_pll_register_strings', function() {
  $strings = [
    // 'Key: String' => 'String',
  ];

  /**
   * Uncomment if you need to have default facyl accessibility strings
   * translatable via Polylang string translations.
   */
  // foreach ( get_default_localization_strings() as $key => $value ) {
  // $strings[ "Accessibility: {$key}" ] = $value;
  // }

  return $strings;
} );

function get_default_localization_strings( $language = 'fi' ) {
  $strings = [
    'en'  => [
      'Add a menu'                                   => __( 'Add a menu', 'facyl' ),
      'Open main menu'                               => __( 'Open main menu', 'facyl' ),
      'Close main menu'                              => __( 'Close main menu', 'facyl' ),
      'Main navigation'                              => __( 'Main navigation', 'facyl' ),
      'Back to top'                                  => __( 'Back to top', 'facyl' ),
      'Open child menu'                              => __( 'Open child menu', 'facyl' ),
      'Open child menu for'                          => __( 'Open child menu for', 'facyl' ),
      'Close child menu'                             => __( 'Close child menu', 'facyl' ),
      'Close child menu for'                         => __( 'Close child menu for', 'facyl' ),
      'Skip to content'                              => __( 'Skip to content', 'facyl' ),
      'Skip over the carousel element'               => __( 'Skip over the carousel element', 'facyl' ),
      'External site'                                => __( 'External site', 'facyl' ),
      'opens in a new window'                        => __( 'opens in a new window', 'facyl' ),
      'Page not found.'                              => __( 'Page not found.', 'facyl' ),
      'The reason might be mistyped or expired URL.' => __( 'The reason might be mistyped or expired URL.', 'facyl' ),
      'Search'                                       => __( 'Search', 'facyl' ),
      'Block missing required data'                  => __( 'Block missing required data', 'facyl' ),
      'This error is shown only for logged in users' => __( 'This error is shown only for logged in users', 'facyl' ),
      'No results found for your search'             => __( 'No results found for your search', 'facyl' ),
      'Edit'                                         => __( 'Edit', 'facyl' ),
      'Previous slide'                               => __( 'Previous slide', 'facyl' ),
      'Next slide'                                   => __( 'Next slide', 'facyl' ),
      'Last slide'                                   => __( 'Last slide', 'facyl' ),
    ],
    'fi'  => [
      'Add a menu'                                   => 'Luo uusi valikko',
      'Open main menu'                               => 'Avaa päävalikko',
      'Close main menu'                              => 'Sulje päävalikko',
      'Main navigation'                              => 'Päävalikko',
      'Back to top'                                  => 'Takaisin ylös',
      'Open child menu'                              => 'Avaa alavalikko',
      'Open child menu for'                          => 'Avaa alavalikko kohteelle',
      'Close child menu'                             => 'Sulje alavalikko',
      'Close child menu for'                         => 'Sulje alavalikko kohteelle',
      'Skip to content'                              => 'Siirry suoraan sisältöön',
      'Skip over the carousel element'               => 'Hyppää karusellisisällön yli seuraavaan sisältöön',
      'External site'                                => 'Ulkoinen sivusto',
      'opens in a new window'                        => 'avautuu uuteen ikkunaan',
      'Page not found.'                              => 'Hups. Näyttää, ettei sivua löydy.',
      'The reason might be mistyped or expired URL.' => 'Syynä voi olla virheellisesti kirjoitettu tai vanhentunut linkki.',
      'Search'                                       => 'Haku',
      'Block missing required data'                  => 'Lohkon pakollisia tietoja puuttuu',
      'This error is shown only for logged in users' => 'Tämä virhe näytetään vain kirjautuneille käyttäjille',
      'No results for your search'                   => 'Haullasi ei löytynyt tuloksia',
      'Edit'                                         => 'Muokkaa',
      'Previous slide'                               => 'Edellinen dia',
      'Next slide'                                   => 'Seuraava dia',
      'Last slide'                                   => 'Viimeinen dia',
    ],
    'fr'  => [
      'Add a menu'                                   => __( 'Ajouter un menu', 'facyl' ),
      'Open main menu'                               => __( 'Ouvrir le menu principal', 'facyl' ),
      'Close main menu'                              => __( 'Fermer le menu principal', 'facyl' ),
      'Main navigation'                              => __( 'Navigation principale', 'facyl' ),
      'Back to top'                                  => __( 'Retour au début', 'facyl' ),
      'Open child menu'                              => __( 'Ouvrir le menu enfant', 'facyl' ),
      'Open child menu for'                          => __( 'Ouvrir le menu enfant pour', 'facyl' ),
      'Close child menu'                             => __( 'Fermer le menu enfant', 'facyl' ),
      'Close child menu for'                         => __( 'Fermer le menu enfant pour', 'facyl' ),
      'Skip to content'                              => __( 'Aller au contenu', 'facyl' ),
      'Skip over the carousel element'               => __( "Sauter l'élément carrousel", 'facyl' ),
      'External site'                                => __( 'Site externe', 'facyl' ),
      'opens in a new window'                        => __( "s'ouvre dans une nouvelle fenêtre", 'facyl' ),
      'Page not found.'                              => __( 'Page non trouvée.', 'facyl' ),
      'The reason might be mistyped or expired URL.' => __( 'La raison peut être une erreur de frappe ou une URL expirée.', 'facyl' ),
      'Search'                                       => __( 'Recherche', 'facyl' ),
      'Block missing required data'                  => __( 'Bloc manquant des données requises', 'facyl' ),
      'This error is shown only for logged in users' => __( "Cette erreur n'est affichée que pour les utilisateurs connectés", 'facyl' ),
      'No results found for your search'             => __( 'Aucun résultat trouvé pour votre recherche', 'facyl' ),
      'Edit'                                         => __( 'Modifier', 'facyl' ),
      'Previous slide'                               => __( 'Diapositive précédente', 'facyl' ),
      'Next slide'                                   => __( 'Diapositive suivante', 'facyl' ),
      'Last slide'                                   => __( 'Last slide', 'facyl' ),
    ],
  ];

  return ( array_key_exists( $language, $strings ) ) ? $strings[ $language ] : $strings['fr'];
} // end get_default_localization_strings

function get_default_localization( $string ) {
  if ( function_exists( 'ask__' ) && array_key_exists( "Accessibility: {$string}", apply_filters( 'air_helper_pll_register_strings', [] ) ) ) {
    return ask__( "Accessibility: {$string}" );
  }

  return esc_html( get_default_localization_translation( $string ) );
} // end get_default_localization

function get_default_localization_translation( $string ) {
  $language = get_bloginfo( 'language' );
  if ( function_exists( 'pll_the_languages' ) ) {
    $language = pll_current_language();
  }

  $translations = get_default_localization_strings( $language );

  return ( array_key_exists( $string, $translations ) ) ? $translations[ $string ] : '';
} // end get_default_localization_translation
