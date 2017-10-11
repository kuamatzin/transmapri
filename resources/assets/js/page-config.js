//Easy animated.css jquery function
$.fn.extend({
    animateCss: function(animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
        return this;
    }
});

//Smoth scroll to tags for one page websites
$(document).ready(function() {
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
            // Store hash
            var hash = this.hash;
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});

//Wow efect for every scrolling for animated.css
WOW.prototype.addBox = function(element) {
    this.boxes.push(element);
};

var wow = new WOW();

wow.init();
$('.wow').on('scrollSpy:exit', function() {
    $(this).css({
        'visibility': 'hidden',
        'animation-name': 'none'
    }).removeClass('animated');
    wow.addBox(this);
}).scrollSpy();

//Show loader gif unit page is completed loaded
document.onreadystatechange = function() {
    var state = document.readyState
    if (state == 'interactive') {
        $('#contents').hide();
    } else if (state == 'complete') {
        setTimeout(function() {
            document.getElementById('interactive');
            $('#load').hide();
            $('#contents').show();
        }, 1000);
    }
}