document.addEventListener('DOMContentLoaded', function() {

    // Hide success alert after 3 seconds
    var successAlert = document.getElementById('success-alert');
    var errorAlert = document.getElementById('error-alert');
    if (successAlert) {
        setTimeout(function() {
            successAlert.style.display = 'none';
        }, 5000);
    }
    if (errorAlert) {
        setTimeout(function() {
            errorAlert.style.display = 'none';
        }, 5000);
    }
});