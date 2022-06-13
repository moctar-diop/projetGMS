function saveform(){
  var username = $("#username").val();
  var email = $("#email").val();
  var subjet = $("#subjet").val();
  var message = $("#message").val();

 if(username != "" && email != "" && subjet != "" && message != ""){
    $.ajax({
      url: "../../php/contact.php",
}