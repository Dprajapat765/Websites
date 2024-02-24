function emailSend(){

	var userName = document.getElementById('conName').value;
	var phone = document.getElementById('conMobile').value;
	var email = document.getElementById('conEmail').value;
	var msg = document.getElementById('conMessage').value;

	var messageBody = "We have a query: " + 
	"<br/><br/> Name : " + userName +
	"<br/> Phone : " + phone +
	"<br/> Email : " + email +
	"<br/> Message : " + msg;
	Email.send({
    Host : "smtp.elasticemail.com",
    Username : "contact@trodas.com",
    Password : "53BB19613F468366017390EA30893950ABC1",
    To : email,
    From : "contact@trodas.com",
    Subject : "Contact Form Submission",
    Body : messageBody
}).then(
  message => {
  	if(message=='OK'){
  		swal("Successful!", "Thank You. We will contact you shortly.", "success");
  	}
  	else{
  		swal("Error", "There was an error! Please submit again", "error");
  	}
  }
);
}