/* eslint-disable max-len */
/**
 * @Author: Roni Laukkarinen
 * @Date:   2022-05-07 12:20:13
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-05-12 18:04:26
 */
import MoveTo from 'moveto';

const scroll = () => {
  // Go to button
  const moveToDiv = new MoveTo({ duration: 300, easing: 'easeOutQuart' });
  const scrollButton = document.querySelector('.scroll-icon');
  const divMore = document.getElementById('more');

  function goToDivEvent(event) {
    event.preventDefault();

    // Focus to the first focusable element on the page
    moveToDiv.move(divMore);
  }

  if (scrollButton) {
    scrollButton.addEventListener('click', goToDivEvent);
  }
};

export default scroll;
