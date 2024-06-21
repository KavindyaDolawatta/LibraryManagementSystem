function displaySuccessMessage(){
 
 var messageinput = document.getElementById("messageinput");
 //display success message
 var successMessage = document.getElementById("successMessage");
 
 if(messageinput.value !==""){
      successMessage.classList.remove("hidden");
	  }
      
 }