function validateForm(event) {
    // Validate Name (Alphabetic characters only)
    const nameInput = document.getElementById('name');
    const nameRegex = /^[a-zA-Z ]+$/;
    if (!nameRegex.test(nameInput.value)) {
        alert('Please enter a valid name (alphabetic characters only).');
        event.preventDefault();
        return;
    }

    // Validate Feedback (Minimum length of 10 characters)
    const feedbackInput = document.getElementById('feedback');
    if (feedbackInput.value.length < 10) {
        alert('Feedback must be at least 10 characters long.');
        event.preventDefault();
        return;
    }

    // Validate Rating (Select option is not the default)
    const ratingInput = document.getElementById('rating');
    if (ratingInput.value === '') {
        alert('Please select a rating.');
        event.preventDefault();
        return;
    }

    // Additional validations can be added as needed

    // Form is valid, continue with submission or other actions
}
