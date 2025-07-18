const trigger = document.querySelector('.custom-select-trigger');
const options = document.querySelector('.custom-options');

trigger.addEventListener('click', () => {
  options.style.display = options.style.display === 'flex' ? 'none' : 'flex';
});