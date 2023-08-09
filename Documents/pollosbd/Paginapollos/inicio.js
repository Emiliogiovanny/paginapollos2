document.addEventListener('scroll', function() {
    var circle = document.querySelector('.circle');
    var position = circle.getBoundingClientRect();
  
    if (position.top <= window.innerHeight && position.bottom >= 0) {
      circle.classList.add('show');
    }
  });
  