
$(document).ready(function() {
    


    jQuery.validator.addMethod("noSpace", function(value, element) {
        return value.trim() === value && value !== "";
    }, "Spaces at the beginning or end are not allowed");


    jQuery.validator.addMethod("alpha", function(value, element) {
        var regex = /^[a-zA-Z\s]+$/;
        
        return regex.test(value.trim());
    }, "Spaces at the beginning or end are not allowed");

    jQuery("#createForm, #editForm").validate({
        rules: {
            name: {
                required: true,
                alpha: true
            },
            price: {
                required: true,
                noSpace: true,
                number: true
            },
            quantity: {
                required: true,
                noSpace: true,
                number: true
            }
        },
        messages: {
            name: {
                required: "please enter name !",
                alpha: "use only alphabets! for name"
            },
            price: {

                required: "price is required",
                noSpace: "remove spaces",
                number: "Use only number! "
            },
            quantity: {
                required: "Please, enter the quantity",
                noSpace: "remove spaces",
                number: "Use only number! "

            },

        }
    })
});

