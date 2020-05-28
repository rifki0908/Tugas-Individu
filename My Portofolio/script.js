// slow Scroll//

jQuery(document).ready(function($) {

    $('.slowscroll').on('click',function (e) {
         e.preventDefault();
 
         var target = this.hash,
         $target = $(target);
 
         $('html, body').stop().animate({
             'scrollTop': $target.offset().top
         }, 500, 'swing', function () {
             window.location.hash = target;
         });
     });
   
 });

 // Validasi form content //
function validasi() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    if (name != "" && email!="" && message !="") {
        return true;
    }else{
        alert('Anda harus mengisi data dengan lengkap !');
    }
}