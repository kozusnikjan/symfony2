var sendMail = function(sendName, sendMail, sendText){
    $.post( "mail.php", { jmeno: sendName, email: sendMail, text: sendText } );
};