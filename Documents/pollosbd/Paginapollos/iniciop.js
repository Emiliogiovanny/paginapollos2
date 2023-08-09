// Animar elementos al hacer scroll
const animatedElements = document.querySelectorAll('.animated');

animatedElements.forEach((element, index) => {
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: element,
      start: 'top 80%', // Inicia la animación cuando el 80% del elemento está en el viewport
    }
  });

  const colors = ['#ffce56', '#ff6384', '#fcbf49'];
  const color = colors[index % colors.length];

  tl.fromTo(element, { opacity: 0, x: -100 }, { opacity: 1, x: 0, duration: 1 })
    .fromTo(element, { color: '#fff' }, { color: color, duration: 0.5 }, 0);
});

// Animar el texto "Sección" al hacer scroll
const sectionTitles = document.querySelectorAll('.section h1, .section p');

sectionTitles.forEach(title => {
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: title,
      start: 'top 80%', // Inicia la animación cuando el 80% del elemento está en el viewport
    }
  });

  tl.fromTo(title, { opacity: 0, y: -50 }, { opacity: 1, y: 0, duration: 1 });
});
