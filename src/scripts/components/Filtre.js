export default class Filtre {
  constructor(element) {
    this.element = element;
    //.show pour les chambre en display block
    //this.element.querySelectorAll('[data-filtre]') (changer selon le filtre?)
    this.tblChambres = document.querySelectorAll('.chambre');
    this.btnChambres = document.querySelectorAll('.btn_chambre');

    this.init();
  }

  init() {
    for (let i = 0; i < this.tblChambres.length; i++) {
      const chambre = this.tblChambres[i];

      if (chambre.dataset.filtre == 'queen') {
        chambre.classList.add('show');
      }
    }

    for (let i = 0; i < this.btnChambres.length; i++) {
      const btnChambre = this.btnChambres[i];

      if (btnChambre.dataset.filtre == 'queen') {
        btnChambre.classList.add('active');
      }

      btnChambre.addEventListener('click', this.classButton.bind(this));
    }
  }

  classButton(e) {
    const btnCible = e.currentTarget;

    for (let i = 0; i < this.btnChambres.length; i++) {
      const btnChambre = this.btnChambres[i];

      if (btnChambre.classList.contains('active')) {
        btnChambre.classList.remove('active');
      }
    }

    btnCible.classList.add('active');

    const currentButton = this.element.querySelector('.active');
    this.showChambres(currentButton);
  }

  showChambres(btnCible) {
    for (let i = 0; i < this.tblChambres.length; i++) {
      const chambre = this.tblChambres[i];

      if (btnCible.dataset.filtre == chambre.dataset.filtre) {
        chambre.classList.add('show');
      }
      if (btnCible.dataset.filtre != chambre.dataset.filtre) {
        chambre.classList.remove('show');
      }
    }
  }
}
