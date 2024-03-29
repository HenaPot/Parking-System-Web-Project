// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();





// client section owl carousel
/*$(".client_owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    nav: true,
    navText: [],
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive: {
        0: {
            items: 1
        },
        992: {
            items: 2
        }
    }
});*/

$(document).ready(function() {
    // Initialize the carousel
    $('#carouselExampleCaptions').carousel({
      interval: 2000, // Change slides every 2 seconds (adjust as needed)
      pause: 'hover', // Pause on hover
      wrap: true, // Loop back to the first slide after the last one
      keyboard: false
    });
  });

