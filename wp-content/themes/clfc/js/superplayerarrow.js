document.addEventListener('DOMContentLoaded', function() {

const buttons = document.querySelectorAll('.list-group button');

buttons.forEach(button => {
  button.addEventListener('click', function() {
    buttons.forEach(btn => {
      btn.classList.remove('btn');
    });
    this.classList.add('btn');
  });
});

});