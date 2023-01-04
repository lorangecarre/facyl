const devis = document.querySelector('.devis');
const valeurDevis = parseFloat(document.querySelector('.devis__estimation_value').dataset.valeur);
const affichageDevis = document.querySelector('.devis__estimation_value');
const valeurPage = document.getElementsByName('menu-page');
const valeurHerbergement = document.getElementsByName('menu-hebergement');
const valeurMaintenance = document.getElementsByName('menu-maintenance');
const checkboxFonction = document.getElementsByName('checkbox-fonction[]');
const checkboxPrestations = document.getElementsByName('checkbox-prestations[]');

const devisFinal = {};
let valeurFinaleDevis = valeurDevis;

const fonction = {
  'Inscription newsletter': 100,
  'Moteur de recherche interne': 100,
  'Module de demande de devis': 200,
  'Intégration CRM / ERP': 100,
  'Module de prise de RDV': 200,
  'Installation d\'un outil d\'analyse d\'audience (Matomo)': 100,
};

const prestations = {
  'Création de logo': 500,
  'Charte graphique complète': 100,
  'Rédaction de contenus': 200,
  'Accompagnement  référencement SEO (Optimisation pour les moteurs de recherche)': 500,
};

const page = {
  5: 0,
  '5-7': 250,
  '7-10': 500,
  '10-12': 750,
  '12-15': 1000,
};

const hebergement = {
  'Je compte m\'en occuper moi-même': 0,
  'Je souhaite un hébergement standard': 90,
  'Je souhaite un hébergement premium (pour un site à fort trafic)': 150,
};

const maintenance = {
  'Je compte m\'en occuper moi-même': 0,
  'Je souhaite un forfait de maintenance minimal': 350,
  'Je souhaite un forfait avec maintenance et évolutions régulières': 600,
};

function afficherDevis() {
  affichageDevis.innerHTML = `${devisFinal.valeur} €`;
}

Object.defineProperty(devisFinal, 'valeur', {
  get() {
    return valeurFinaleDevis;
  },
  set(nouvelleValeur) {
    valeurFinaleDevis += nouvelleValeur;
    afficherDevis();
  },
  enumerable: true,
  configurable: true,
});

if (devis) {
  afficherDevis();

  checkboxFonction.forEach((element) => {
    element.addEventListener('change', () => {
      if (element.checked) {
        devisFinal.valeur = fonction[element.value];
      } else {
        devisFinal.valeur = -fonction[element.value];
      }
    });
  });
  checkboxPrestations.forEach((element) => {
    element.addEventListener('change', () => {
      if (element.checked) {
        devisFinal.valeur = prestations[element.value];
      } else {
        devisFinal.valeur = -prestations[element.value];
      }
    });
  });

  let valeurPageActuelle = page['5'];
  valeurPage[0].addEventListener('change', () => {
    devisFinal.valeur = -valeurPageActuelle + page[valeurPage[0].options[valeurPage[0].selectedIndex].value];
    valeurPageActuelle = page[valeurPage[0].options[valeurPage[0].selectedIndex].value];
  });

  let valeurHerbergementActuel = 0;
  valeurHerbergement[0].addEventListener('change', () => {
    devisFinal.valeur = -valeurHerbergementActuel + hebergement[valeurHerbergement[0].options[valeurHerbergement[0].selectedIndex].value];
    valeurHerbergementActuel = hebergement[valeurHerbergement[0].options[valeurHerbergement[0].selectedIndex].value];
  });

  let valeurMaintenanceActuel = 0;
  valeurMaintenance[0].addEventListener('change', () => {
    devisFinal.valeur = -valeurMaintenanceActuel + maintenance[valeurMaintenance[0].options[valeurMaintenance[0].selectedIndex].value];
    valeurMaintenanceActuel = maintenance[valeurMaintenance[0].options[valeurMaintenance[0].selectedIndex].value];
  });
}
