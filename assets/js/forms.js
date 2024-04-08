
    $(document).ready(function() {
        // Initialize jQuery Validation plugin
        $('#login-form').validate({
            rules: {
                login_email: {
                    required: true,
                    email: true
                },
                login_password: {
                    required: true,
                    minlength: 8
                }
            },
            messages: {
                login_email: {
                    required: 'Please enter your email',
                    email: 'Please enter a valid email address'
                },
                login_password: {
                    required: 'Please enter your password',
                    minlength: 'Password must be at least 8 characters long'
                }
            },
            submitHandler: function(form) {
                var enteredEmail = $('#login_email').val().trim();
                var enteredPassword = $('#login_password').val().trim();
                console.log(enteredEmail);
                console.log(enteredPassword);
    
                // Use jQuery AJAX to fetch JSON data from the file
                $.ajax({
                    url: 'json/profiles.json', 
                    dataType: 'json',
                    success: function(data) {
                        var found = false; // Flag to track if a matching user is found
                        // Iterate over each item in the JSON array
                        $.each(data, function(index, item) {
                            // Check if the current item's email and password match the entered credentials
                            if (item.email === enteredEmail && item.password === enteredPassword) {
                                // Store user data in local storage
                                localStorage.setItem('user', JSON.stringify(item));
                                // Redirect to the profile page
                                window.location.href = 'index.html#profile';
                                found = true; // Set the flag to true since a matching user is found
                                return false; // Exit the loop since we found a matching user
                            }
                        });
    
                        // If no matching user is found, display an error message
                        if (!found) {
                            console.log("failed");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error loading JSON data:', error);
                    }
                });
    
                // Reset the form 
                form.reset();
            }
        });
    });