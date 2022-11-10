/**
 * @Author: Roni Laukkarinen
 * @Date:   2021-04-22 08:06:03
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-05-12 15:09:18
 */
// If you use this module,
// remember to comment out window.scrollTo(0, 0); from navigation.js
function stickyNav() {
  const header = document.querySelector('.site-header');
  const navbar = document.querySelector('.nav-container');
  const headerHeight = getComputedStyle(header).height.split('px')[0];
  const scrollValue = window.scrollY;

  const buttonContact = document.querySelector('.button-isContact');
  const accessibiliteHeader = document.querySelector('.accessibiliteHeader');

  if (scrollValue > headerHeight) {
    navbar.classList.add('is-fixed');
    accessibiliteHeader.classList.add('stickyAccessibilityHeader');
    buttonContact.classList.add('buttonSticky');
    accessibiliteHeader.classList.remove('nonStickyAccessibilityHeader');
    buttonContact.classList.remove('buttonNonSticky');
  } else if (scrollValue < headerHeight) {
    navbar.classList.remove('is-fixed');
    accessibiliteHeader.classList.remove('stickyAccessibilityHeader');
    buttonContact.classList.remove('buttonSticky');
    accessibiliteHeader.classList.add('nonStickyAccessibilityHeader');
    buttonContact.classList.add('buttonNonSticky');
  }

  if (window.pageYOffset > headerHeight) {
    navbar.classList.add('is-fixed');
    accessibiliteHeader.classList.add('stickyAccessibilityHeader');
    buttonContact.classList.add('buttonSticky');
    accessibiliteHeader.classList.remove('nonStickyAccessibilityHeader');
    buttonContact.classList.remove('buttonNonSticky');
  }
}

window.addEventListener('scroll', stickyNav);
window.addEventListener('DOMContentLoaded', stickyNav);
