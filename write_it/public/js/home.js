document.getElementById("like-it-icon").addEventListener("click", function () {
    $("#like-it-icon").addClass("on-change-thumbs-up");
});

$(document).ready(function () {
    $("#like_the_post").click(function () {
        id = this.getAttribute('data-id')
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            url: "like_the_post",
            method: "post",
            data:{id:id},
            success: function(response){
                // Change the alert to display the response in a different way
                // For example, you could create a div with the response inside
                var $responseDiv = $('<div>');
            
                // Add a heart icon to the div
                var $heartIcon = $('<i>').addClass('fas fa-heart').css({
                    'color': 'red',
                    'position': 'absolute',
                    'bottom': '0',
                    'left': '50%',
                    'transform': 'translateX(-50%)',
                    'font-size': '4em'
                });
                $responseDiv.append($heartIcon);
            
                // Add the response div to the page and animate it
                $('body').append($responseDiv);
                $responseDiv.css({
                    'position': 'fixed',
                    'top': '100%',
                    'left': '50%',
                    'transform': 'translate(-50%, -100%)',
                    'text-align': 'center',
                    'opacity': 0
                }).animate({
                    'top': '50%',
                    'opacity': 1
                }, 1000, function() {
                    // Animation complete
                    $heartIcon.animate({
                        'opacity': 0
                    }, 500, function() {
                        $responseDiv.animate({
                            'top': '-100%',
                            'opacity': 0
                        }, 500, function() {
                            $responseDiv.remove();
                        });
                    });
                });
            }
            
        });
    });
});
function submitLogin() {
    document.getElementById('login_form').submit();
  }
  
  