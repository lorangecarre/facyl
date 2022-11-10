const buttons = document.querySelectorAll('#plan__buttonOpen');

if (buttons) {
  buttons.forEach((button) => {
    button.addEventListener('click', () => {
      if (button.className === 'plan__buttonOpen') {
        button.parentNode.children[1].classList.remove('close');
        button.parentNode.children[2].classList.remove('close');
        button.classList.remove('plan__buttonOpen');
        button.classList.add('plan__buttonClose');
      } else if (button.className === 'plan__buttonClose') {
        button.parentNode.children[1].classList.add('close');
        button.parentNode.children[2].classList.add('close');
        button.classList.add('plan__buttonOpen');
        button.classList.remove('plan__buttonClose');
      }
    });
  });
}
