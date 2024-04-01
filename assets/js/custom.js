// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

$(document).ready(function() {
    // Initialize the carousel
    $('#carouselExampleCaptions').carousel({
      interval: 2000, // Change slides every 2 seconds (adjust as needed)
      pause: 'hover', // Pause on hover
      wrap: true, // Loop back to the first slide after the last one
      keyboard: false
    });
  });





  /*
$(document).ready(function() {
    // Use jQuery AJAX to fetch JSON data from the file - SLIDER PARKING LOT
    $.ajax({
        url: 'json/parking_lots.json',
        dataType: 'json',
        success: function(data) {
            //console.log('you are here !');
            // Iterate over each item in the JSON array
            $.each(data, function(index, item) {
                // Create option element with attributes
                var option = $('<option>', {
                    value: item.value,
                    text: item.text,
                    // Add additional attributes here
                    class: 'input-group', // Example: Add a class
                    'data-display': item.text, // Example: Add a data attribute
                });
                
                // Append the option to the select element
                $('#select-parking').append(option);
            });
        },
        error: function(xhr, status, error) {
            console.error('Error loading JSON data:', error);
        }
    });

});

$(document).ready(function() {
    // Use jQuery AJAX to fetch JSON data from the file - SLIDER PRICING
    $.ajax({
        url: 'json/pricing.json',
        dataType: 'json',
        success: function(data) {
            //console.log('you are here !');
            // Iterate over each item in the JSON array
            $.each(data, function(index, item) {
                // Create option element with attributes
                var option = $('<option>', {
                    value: item.value,
                    text: item.text,
                    // Add additional attributes here
                    class: 'input-group', // Example: Add a class
                    'data-display': item.text, // Example: Add a data attribute
                });
                
                // Append the option to the select element
                $('#select-pricing').append(option);
            });
        },
        error: function(xhr, status, error) {
            console.error('Error loading JSON data:', error);
        }
    });

}); */




