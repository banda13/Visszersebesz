function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTo({top: 0, behavior: 'smooth'})
    //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


$(document).ready(function () {
    mybutton = $("#scrollTopButton");
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.css("display", "block");
        } else {
            mybutton.css("display", "none");
        }
    }
});
