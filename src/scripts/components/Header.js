export default class Header {
  constructor(element) {
    this.element = element;
    this.scrollLimit = this.element.dataset.scrollLimit || 0.1;
    this.isHidden = false;
    this.scrollPosition = 0;
    this.lastScrollPosition = 0;
    this.html = document.documentElement;
    this.dropdown = document.querySelector('.dropdown');
    this.subMenu = document.querySelector('.sub-menu');

    this.init();
    this.initNavMobile();
  }

  init() {
    console.log('this');

    this.dropdown.addEventListener('mouseover', this.hoverDropdown.bind(this));
    this.dropdown.addEventListener('click', this.dropDownMobile.bind(this));
    this.subMenu.addEventListener('mouseout', this.closeDropdown.bind(this));

    if (this.element.dataset.autoHide != 'false') {
      window.addEventListener('scroll', this.onScroll.bind(this));
    }
  }

  onScroll(event) {
    this.lastScrollPosition = this.scrollPosition;
    this.scrollPosition = document.scrollingElement.scrollTop;

    this.setHeaderState();
    this.setDirections();
  }

  setHeaderState() {
    if (
      this.scrollPosition >
      document.scrollingElement.scrollHeight * this.scrollLimit
    ) {
      this.html.classList.add('header-is-hidden');
    } else if (this.scrollPosition < this.lastScrollPosition) {
      this.html.classList.remove('header-is-hidden');
    }
  }

  setDirections() {
    if (this.scrollPosition >= this.lastScrollPosition) {
      this.html.classList.remove('is-scrolling-up');
      this.html.classList.add('is-scrolling-down');
    } else {
      this.html.classList.add('is-scrolling-up');
      this.html.classList.remove('is-scrolling-down');
    }
  }

  hoverDropdown() {
    this.html.classList.add('dropdown-is-active');
  }

  closeDropdown() {
    this.html.classList.remove('dropdown-is-active');
  }

  initNavMobile() {
    const toggle = this.element.querySelector('.js-toggle');

    toggle.addEventListener('click', this.onToggleNav.bind(this));
  }

  dropDownMobile() {
    this.subMenu.classList.add('showMobile');
  }

  onToggleNav(event) {
    this.html.classList.toggle('nav-is-active');
  }
}
