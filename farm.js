function addCart()
{
alert("added to cart");
location.reload();

}


function validation()

{
	
            var user = document.getElementById('user').value;
            var name = document.getElementById('name').value;
            var mobile = document.getElementById('mobile').value;
            var email=document.getElementById('email').value;
            var pass=document.getElementById('pass').value;
            var cpass=document.getElementById('cpass').value;

        /*first name validation*/

            if (user == "")
            {
                document.getElementById('userr').innerHTML="Please enter right first name";
                return false;
            }
            if (user.length<2)
            {
                document.getElementById('userr').innerHTML="Please write more than one character";
                return false;
            }
            if (!isNaN(user)) 
            {
                document.getElementById('userr').innerHTML="Please write alphabets";
                return false;
            }
            else
            {
                document.getElementById('userr').innerHTML="";
            }


        /*last name validation*/

            if (name == "")
            {
                document.getElementById('namee').innerHTML="Please enter right last name";
                return false;
            }
            if (name.length<2)
            {
                document.getElementById('namee').innerHTML="Please write more than one character";
                return false;
            }
            if (!isNaN(name)) 
            {
                document.getElementById('namee').innerHTML="Please write alphabets";
                return false;
            }
            else
            {
                document.getElementById('namee').innerHTML="";
            }

        /*mobile number validation*/
            if (mobile == "")
            {
                document.getElementById('mobilee').innerHTML="Please enter mobile number";
                return false;
            }
            if (mobile.length<10)
            {
                document.getElementById('mobilee').innerHTML="Please write 10 digit mobile no.";
                return false;
            }
            if (mobile.length>10)
            {
                document.getElementById('mobilee').innerHTML="Please write 10 digit mobile no.";
                return false;
            }
            if (isNaN(mobile)) 
            {
                document.getElementById('mobilee').innerHTML="Please write digits in the box";
                return false;
            }
            else
            {
                document.getElementById('mobilee').innerHTML="";
            }
        /*email address validation*/

            if (email == "")
            {
                document.getElementById('emaill').innerHTML="Please enter right email address";
                return false;
            }
            if (email.indexOf('@')<=0)
            {
                document.getElementById('emaill').innerHTML="invalid position of @";
                return false;
            }
          
            else
            {
                document.getElementById('emaill').innerHTML="";
            }

        /*password validation*/

            if (pass == "")
            {
                document.getElementById('passs').innerHTML="Please enter password";
                return false;
            }
            if (pass.length<8)
            {
                document.getElementById('passs').innerHTML="Please enter atleast 8 characters";
                return false;
            }
            if (pass.search(/[0-9]/)==-1)
            {
                document.getElementById('passs').innerHTML="Please atleast 1 number in password";
                return false;
            }

            if (pass.search(/[!/@/#/$/*/^/%]/)==-1)
            {
                document.getElementById('passs').innerHTML="Please atleast 1 special symbol in password";
                return false;
            }
            else
            {
                document.getElementById('passs').innerHTML="";
            }

            if (cpass == "")
            {
                document.getElementById('cpasss').innerHTML="Please enter password again";
                return false;
            }
            if (cpass != pass)
            {
                document.getElementById('cpasss').innerHTML="password not matches";
                return false;
            }
            else
            {
                document.getElementById('cpasss').innerHTML="";
            }


	

}