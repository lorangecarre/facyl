document.addEventListener(
  'DOMContentLoaded',
  () => {
    // Gestion thème de couleur
    const choosedTheme = sessionStorage.getItem('theme');
    document.documentElement.setAttribute('data-theme', choosedTheme);

    const defaultThemeBtn = document.getElementById('themeDefault');
    const reverseColorBtn = document.getElementById('themeReverseColor');

    defaultThemeBtn.addEventListener(
      'click',
      (e) => {
        document.documentElement.setAttribute('data-theme', '');
        sessionStorage.setItem('theme', '');
      },
    );

    reverseColorBtn.addEventListener(
      'click',
      (e) => {
        document.documentElement.setAttribute('data-theme', 'reverseColor');
        sessionStorage.setItem('theme', 'reverseColor');
      },
    );

    // Gestion choix police par default ou Dys
    const choosedFont = sessionStorage.getItem('font');
    document.documentElement.setAttribute('data-font', choosedFont);

    const fontDefaultBtn = document.getElementById('fontDefault');
    fontDefaultBtn.addEventListener(
      'click',
      (e) => {
        document.documentElement.setAttribute('data-font', '');
        sessionStorage.setItem('font', '');
      },
    );

    const fontDysBtn = document.getElementById('fontDys');
    fontDysBtn.addEventListener(
      'click',
      (e) => {
        document.documentElement.setAttribute('data-font', 'dysFont');
        sessionStorage.setItem('font', 'dysFont');
      },
    );

    // Gestion de la hauteur d'interlignage
    const choosedLineHeight = sessionStorage.getItem('lineHeight');
    document.documentElement.setAttribute('data-lineHeight', choosedLineHeight);

    const lineHeightDefaultBtn = document.getElementById('lineHeightDefault');
    lineHeightDefaultBtn.addEventListener(
      'click',
      (e) => {
        document.documentElement.setAttribute('data-lineHeight', '');
        sessionStorage.setItem('lineHeight', '');
      },
    );

    const lineHeightDysBtn = document.getElementById('lineHeightAugmented');
    lineHeightDysBtn.addEventListener(
      'click',
      (e) => {
        document.documentElement.setAttribute('data-lineHeight', 'highLineHeight');
        sessionStorage.setItem('lineHeight', 'highLineHeight');
      },
    );

    // Gestion de la fenêtre modal d'options d'accessibilité
    const triggers = document.querySelectorAll('[aria-haspopup="dialog"]');
    const doc = document.querySelector('.js-document');
    const focusableElementsArray = [
      '[href]',
      'button:not([disabled])',
      'input:not([disabled])',
      'select:not([disabled])',
      'textarea:not([disabled])',
      '[tabindex]:not([tabindex="-1"])',
    ];
    const keyCodes = {
      tab: 9,
      enter: 13,
      escape: 27,
    };

    const open = function (dialog) {
      const focusableElements = dialog.querySelectorAll(focusableElementsArray);
      const firstFocusableElement = focusableElements[0];
      const lastFocusableElement = focusableElements[focusableElements.length - 1];

      dialog.setAttribute('aria-hidden', false);

      // return if no focusable element
      if (!firstFocusableElement) {
        return;
      }

      window.setTimeout(
        () => {
          firstFocusableElement.focus();
          // trapping focus inside the dialog
          focusableElements.forEach(
            (focusableElement) => {
              if (focusableElement.addEventListener) {
                focusableElement.addEventListener(
                  'keydown',
                  (event) => {
                    const tab = event.which === keyCodes.tab;
                    if (!tab) {
                      return;
                    }
                    if (event.shiftKey) {
                      if (event.target === firstFocusableElement) { // shift + tab
                        event.preventDefault();

                        lastFocusableElement.focus();
                      }
                    } else if (event.target === lastFocusableElement) { // tab
                      event.preventDefault();
                      firstFocusableElement.focus();
                    }
                  },
                );
              }
            },
          );
        },
        100,
      );
    };

    const close = function (dialog, trigger) {
      dialog.setAttribute('aria-hidden', true);
      doc.setAttribute('aria-hidden', false);

      // restoring focus
      trigger.focus();
    };

    triggers.forEach(
      (trigger) => {
        const dialog = document.getElementById(trigger.getAttribute('aria-controls'));
        const dismissTriggers = dialog.querySelectorAll('[data-dismiss]');
        // open dialog
        trigger.addEventListener(
          'click',
          (event) => {
            event.preventDefault();
            open(dialog);
          },
        );
        trigger.addEventListener(
          'keydown',
          (event) => {
            if (event.which === keyCodes.enter) {
              event.preventDefault();

              open(dialog);
            }
          },
        );
        // close dialog
        // @link https://jolicode.com/blog/une-fenetre-modale-accessible
        dialog.addEventListener(
          'keydown',
          (event) => {
            if (event.which === keyCodes.escape) {
              close(dialog, trigger);
            }
          },
        );
        dismissTriggers.forEach(
          (dismissTrigger) => {
            const dismissDialog = document.getElementById(dismissTrigger.dataset.dismiss);
            dismissTrigger.addEventListener(
              'click',
              (event) => {
                event.preventDefault();
                close(dismissDialog, trigger);
              },
            );
          },
        );
        window.addEventListener(
          'click',
          (event) => {
            if (event.target === dialog) {
              close(dialog, trigger);
            }
          },
        );
      },
    );
  },
);

// Focus auto au premier champs non valide d'un formulaire fait avec Contact Form 7
document.addEventListener('wpcf7invalid', () => {
  setTimeout(() => {
    const firstInput = document.querySelector('.wpcf7-not-valid');
    firstInput.scrollIntoView(false);
    firstInput.focus();
    firstInput.style.outline = 'solid 2px #e95420';
    firstInput.style.borderRadius = '10px';
    firstInput.onblur = () => {
      firstInput.style = '';
    };
  }, 100);
}, false);
