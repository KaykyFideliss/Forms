window.addEventListener('load', () => {
  const loader = document.getElementById('loader');
  const progressBarFill = document.getElementById('progress-bar-fill');

  let progress = 0;
  const interval = setInterval(() => {
    progress += 5; // incrementa 5% a cada 100ms
    if (progress > 100) progress = 100;

    progressBarFill.style.width = progress + '%';

    if (progress >= 100) {
      clearInterval(interval);
      loader.classList.add('hide');

      // Após a transição, esconde o loader para liberar o site
      setTimeout(() => {
        loader.style.display = 'none';
      }, 800); // tempo do transition no CSS
    }
  }, 100);
});
