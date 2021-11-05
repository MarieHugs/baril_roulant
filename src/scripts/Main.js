import ComponentFactory from './ComponentFactory';
import Icons from './utils/Icons';

class Main {
  constructor() {
    this.init();
  }

  init() {
    document.documentElement.classList.add('has-js');

    Icons.load("wp-content/themes/baril-roulant-theme/assets/icons.svg");

    new ComponentFactory();
  }
}
new Main();
