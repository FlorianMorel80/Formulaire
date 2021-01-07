// Avancer ou reculer dans l'historique de l'utilisateur est possible en utilisant les méthodes back(), forward() et go().

var btnBack = document.querySelector('.backPage');
btnBack.addEventListener('click', function () {
    window.history.back();
  });

  var btnForward = document.querySelector('.forwardPage');
  btnForward.addEventListener('click', function () {
    window.history.forward();
  });