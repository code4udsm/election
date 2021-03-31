$(document).ready(function() {
    $("#voter_registration_form").submit(function(e) {
        const errors = validateForm();
        if (errors == "") {
            return true;
        } else {
            e.preventDefault();
            return false;
        }
    });
    function validateForm() {
        const errorFields = new Array();
        return errorFields;
    }
});