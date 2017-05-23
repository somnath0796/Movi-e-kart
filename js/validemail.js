function validateEmail()
      {
         var emailID = document.register.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
            document.register.email.focus() ;
            return false;
         }
         return( true );
      }