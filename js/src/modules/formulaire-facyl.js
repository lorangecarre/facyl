const formulaireFacyl = document.querySelector('.formulaire-facyl');

if (formulaireFacyl) {
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
