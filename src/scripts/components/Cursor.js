export default class Cursor {
  constructor(element) {
    this.element = element;

    this.mouseCursor = document.querySelector('.cursor');
    this.links = document.querySelectorAll('a');

    this.init();
  }

  init() {
    console.log('jexiste');
    window.addEventListener('mousemove', this.cursorMove.bind(this));

    for (let i = 0; i < this.links.length; i++) {
      const element = this.links[i];

      element.addEventListener('mouseover', this.mouseInLink.bind(this));
      element.addEventListener('mouseout', this.mouseOutLink.bind(this));
    }
  }

  cursorMove(e) {
    this.mouseCursor.style.top = e.clientY + 'px';
    this.mouseCursor.style.left = e.clientX + 'px';
  }

  mouseInLink(e) {
    this.mouseCursor.classList.add('link-grow');
  }

  mouseOutLink() {
    this.mouseCursor.classList.remove('link-grow');
    this.mouseCursor.classList.add('link-shrink');
    setTimeout(() => {
      this.mouseCursor.classList.remove('link-shrink');
    }, 150);
  }
}
