function saveform(){
    var username = $("#username").val();
    var email = $("#email").val();
    var subjet = $("#subjet").val();
    var message = $("#message").val();
  
   if(username != "" && email != "" && subjet != "" && message != ""){
      $.ajax({
          type: 'post',
        url: "../form/contact.php",
        data: {
            submit_contact : "submit_contact",
            name : username,
            email : email,
            subjet : subjet,
            message : message
        },
        success: function(data){
            if(data == "success"){
                $("#contact-form").fadeOut(500);
                $("#contact-form").after("<div class='alert alert-success'><strong>Success!</strong> Your message has been sent.</div>");
            }else{
                $("#contact-form").fadeOut(500);
                $("#contact-form").after("<div class='alert alert-danger'><strong>Error!</strong> Your message has not been sent.</div>");
            }
        }
        
  });

}

}