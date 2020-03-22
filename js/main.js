$(document).ready(function(){

    //Filter button
    $(".filter-btn").click(function(){
        var value = $(this).attr('data-filter');

        if (value == "all") {
            $('.filter').show();
        } else {
            $('.filter').not('.' + value).hide();
            $('.filter').filter('.' + value).show();
        }
    });

    // Add active class to the current button (highlight it)
    // Get container element
    var BtnContainer = document.getElementById("BtnContainer");
    // Get all button inside the container
    var buttons = BtnContainer.getElementsByClassName("btn");
    //Loop and add active class to button via replace function
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("filter-btn active");
            current[0].className = current[0].className.replace("filter-btn active","filter-btn");
            this.className += " active";
        });
    }
});
