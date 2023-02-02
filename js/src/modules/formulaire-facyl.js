const formulaireFacyl = document.querySelector('.formulaire-facyl');

if (formulaireFacyl) {
  (function ($) {
    $(document).ready(() => {
      $('form.wpcf7-form input').each(function () {
        const label = $(this).parent('label');
        let name = $(this).attr('name');
        const type = $(this).attr('type');
        switch (type) {
          case 'radio':
          case 'checkbox':
            name += `-${$(this).attr('value')}`;
        }
        if (label) {
          $(label).attr('for', name);
        }
        $(this).attr('id', name);
      });
    });
  }(jQuery));

  const nomPages = document.querySelector('#nom-pages');
  const listePages = document.querySelectorAll('.formulaire__menu_pages .wpcf7-list-item');

  listePages.forEach((page) => {
    page.style.visibility = 'hidden';
  });

  nomPages.addEventListener('input', (event) => {
    const tabPages = event.target.value.split('\n');
    let cpt = 0;
    tabPages.forEach((nomPage) => {
      listePages[cpt].style.visibility = 'visible';
      listePages[cpt].querySelector('label .wpcf7-list-item-label').innerHTML = nomPage;
      cpt++;
    });
    for (let i = cpt; i < listePages.length; i++) {
      listePages[i].style.visibility = 'hidden';
    }
  });
}
