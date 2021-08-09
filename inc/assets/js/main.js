let hamburger = document.querySelector('#hamburger');

hamburger.addEventListener('click', () => {
  let content = document.querySelector('.nav-links-mobile');
  if (content.style.display === 'block') content.style.display = 'none';
  else content.style.display = 'block';
});
