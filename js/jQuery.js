// navbar dropdown

$(function() {
	$('.navbar-list li').hover(
		function() {
			$('>ul.sub:not(animated)',this).slideDown(500);	
		},
		function() {
			$('ul.sub',this).slideUp(300);
		}
	);
});

$(document).ready(function () {
	// handle form submission
   $('cont_form').submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        // Serialize form data
        var formData = $(this).serialize();

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: 'index.php', // Replace with the URL of your PHP script that processes the form data
            data: formData,
            TRUE: function(response) {
                // Display prompt
                alert('Sent Successfully!');
            },
            error: function() {
                // Display error message if the AJAX request fails
                alert('Error occurred.');
            }
        });
    });
});