function validate() {
        if(document.register.FName.value === "") {
                     alert( "Please provide your first name!" );
                     document.register.FName.focus() ;
                     return false;
                }
        else if(document.register.LName.value === "") {
                     alert( "Please provide your last name!" );
                     document.register.LName.focus() ;
                     return false;
                }
        else if(document.register.email.value === "") {
                     alert( "Please provide your E-Mail!" );
                     document.register.email.focus() ;
                     return false;
                }       
        else if(document.register.phn.value === "") {
                     alert( "Please provide your Phone Number!" );
                     document.register.phn.focus() ;
                     return false;
                }
        else if(document.register.city.value === "") {
                     alert( "Please provide the City!" );
                     document.register.city.focus() ;
                     return false;
                }
        else if(document.register.cntry.value === "") {
                     alert( "Please provide the Country!" );
                     document.register.cntry.focus() ;
                     return false;
                }
        else if(document.register.UName.value === "") {
                     alert( "Please provide a valid Username!" );
                     document.register.UName.focus() ;
                     return false;
                }
        else if(document.register.PWord.value === "") {
                     alert( "Please provide a valid Password!" );
                     document.register.PWord.focus() ;
                     return false;
                }
        else if(document.register.CPWord.value === "") {
                     alert( "Please re-type your Password!" );
                     document.register.FName.focus() ;
                     return false;
                }
        else if(document.register.CPWord.value != document.register.PWord.value) {
            alert( "Passwords do not match!" );
            document.register.FName.focus() ;
            return false;
        }
    return( true );
                
}