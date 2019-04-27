$('[type="submit"]').click(function(){
    $.post(
        "php/send-contact.php",

        {
            name: $('[name="name"]').val(),
            email: $('[name="email"]').val(),
            phone: $('[name="phone"]').val(),
            message: $('[name="message"]').val()
        },
        function(data) {
            $(".result").html(data);
        }
    );
});