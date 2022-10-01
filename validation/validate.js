const regexText= /^([a-z A-Z 0-9]{3,20})$/ ;
const regexNumber =/^([0-9]{10})$/;
const regexEmail =/^([a-z A-Z 0-9]+)@([a-z A-Z]+).([a-z]{2,6})$/;

function validate() {

    const Name = document.myform.firstname.value ;
   
     const mob = document.myform.mNumber.value;
    const  pass = document.myform.password.value;
    const email = document.myform.email.value;
     const errorFields = document.querySelectorAll('.errorField')

let name = false;

let Mob =false ;
let Pass = false ;
let Email = false ;

function fade(){errorFields.forEach((element,i) => { setInterval(()=>{errorFields[i].textContent="" ;  fade = true; },3000) })}; 

if(!regexText.test(Name)) { errorFields[0].textContent = "Enter a valid name !" ;  }
else{name = true ; } ;



if(!regexNumber.test(mob)) { errorFields[1].textContent = "Enter a valid mobile number !" ;}
else{Mob = true ; } ;

if(pass.length<8) { errorFields[3].textContent = "Enter a valid password !" ; }
else{Pass = true ; } ;

if(!regexEmail.test(email)) { errorFields[2].textContent = "Enter a valid Email !" ;  }
else{Email = true ; } ;

fade();

if(name  && Mob && Pass && Email ){return true ;} 
else {return false ;};

 }

