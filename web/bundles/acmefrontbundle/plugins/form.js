       
   
       
var kontaktForm = function(){       
       $("#kontaktOdeslat").live('click',function(){
                    var err;  
                    $("#kontaktFormForm .err").hide();   
                    var jmeno = $("#kontaktFormForm #kontaktJmeno").val();
                    if(jmeno === 'Jméno') {
                       $("#kontaktFormForm #kontaktJmeno").after("<div class='err'>Musíte zadat Vaše jméno</div>"); 
                       err = "err";
                    }
                    var email = $("#kontaktFormForm #kontaktEmail").val();
                    if(email === 'Email'){
                       $("#kontaktFormForm #kontaktEmail").after("<div class='err'>Musíte zadat Váš email</div>");
                       err = "err";
                    }
                    var text = $("#kontaktFormForm #kontaktText").val();
                    if(text === 'Text'){
                       $("#kontaktFormForm #kontaktText").after("<div class='err'>Musíte zadat Text</div>");
                       err = "err";
                    }
                    if(err !== 'err'){
                    sendMail(jmeno, email, text);
                    $("#kontaktFormForm #kontaktJmeno").val('Jméno');
                    $("#kontaktFormForm #kontaktEmail").val('Email');
                    $("#kontaktFormForm #kontaktText").val('Text');
                    $("#kontaktFormForm").after("<span style='color: #00a284'>Zpráva byla úspěšně odeslána. Děkuji</span>");
                    }
                    return false;
                    
        });
};

var sendMail = function(sendName, sendMail, sendText){
    $.post( "mail.php", { jmeno: sendName, email: sendMail, text: sendText } );
};

var ebookForm = function(){
            $("#ebookFormSend").live('click',function(){
                    var err;  
                    $("#ebookForm .errBig").hide();   
                    var jmeno = $("#ebookForm #ebookName").val();
                    if(jmeno === 'Jméno') {
                       $("#ebookForm .errBig").html("<span class='err'>Musíte zadat Vaše jméno</span>"); 
                       err = "err";
                    }
                    var email = $("#ebookForm #ebookEmail").val();
                    if(email === 'Email'){
                       $("#ebookForm .errBig").html("<span class='err'>Musíte zadat Váš email</span>");
                       err = "err";
                    }
                    if(err !== 'err'){
                    regEbookUser(jmeno, email);
                    $("#ebookForm #ebookName").val('Jméno');
                    $("#ebookForm #ebookEmail").val('Email');
                    $("#ebookForm").after("<span style='color: #00a284'>Děkuji za přihlášení k odběru e-book.</span>");
                    }
                    return false;
                    
        });
};

var regEbookUser = function(name, email){
    $.post( "ebook.php", { name: name, email: email } );
};