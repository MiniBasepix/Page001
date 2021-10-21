window.onload = function() {
    const spinner = document.getElementById('loading');
    spinner.classList.add('loaded');
  }

$(function(){
  setTimeout('stopload()',10000);
});
  
function stopload(){
  $('.loaded').delay(600).fadeOut(300);
}
