function validateForm() {
    // Full Name Validation
    const fullname = document.getElementById('fullname').value.trim();
    if (!/^[A-Za-z\s]+$/.test(fullname)) {
        alert('Full Name can only contain letters and spaces.');
        return false;
    }

    // Email Validation
    const email = document.getElementById('email').value.trim();
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        alert('Please enter a valid email address.');
        return false;
    }

    // Contact Number Validation
    const contact = document.getElementById('contact').value.trim();
    if (!/^\d{10}$/.test(contact)) {
        alert('Contact Number must be a valid 10-digit number.');
        return false;
    }

    // Graduation Year Validation
    const graduationYear = parseInt(document.getElementById('graduation-year').value.trim(), 10);
    if (graduationYear < 1900 || graduationYear > 2099) {
        alert('Graduation Year must be between 1900 and 2099.');
        return false;
    }

    return true; // Form is valid
}
function validateForm() {
    // Full Name Validation
    const fullname = document.getElementById('fullname').value.trim();
    if (!/^[A-Za-z\s]+$/.test(fullname)) {
        alert('Full Name can only contain letters and spaces.');
        return false;
    }

    // Email Validation
    const email = document.getElementById('email').value.trim();
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        alert('Please enter a valid email address.');
        return false;
    }

    // Contact Number Validation
    const contact = document.getElementById('contact').value.trim();
    if (!/^\d{10}$/.test(contact)) {
        alert('Contact Number must be a valid 10-digit number.');
        return false;
    }

    // Graduation Year Validation
    const graduationYear = parseInt(document.getElementById('graduation-year').value.trim(), 10);
    if (graduationYear < 1900 || graduationYear > 2099) {
        alert('Graduation Year must be between 1900 and 2099.');
        return false;
    }

    return true; // Form is valid
}
