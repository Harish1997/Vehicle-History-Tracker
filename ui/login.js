//Select operations

var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);


























var container=document.getElementsByClassName("container")[0];
var log_user_email=document.getElementById("login_username");
var log_user_pass=document.getElementById("login_pass");

var signup_user_email=document.getElementById("signup_email");
var signup_user_pass=document.getElementById("signup_pass");
var signup_user_fname_=document.getElementById("signup_first_name");
var signup_user_lname_=document.getElementById("signup_last_name");
var signup_user_contact=document.getElementById("signup_phone");
var signup_user_organization_type=document.getElementById("signup_org_type");
var signup_user_organization_name=document.getElementById("signup_org_name");



var loginbtn=document.getElementById("loginbutton");
var signupbtn=document.getElementById("signupbutton");


var login_label=document.getElementById("login_label");
var signup_label=document.getElementById("signup_label");


var loginbutton=document.getElementsByClassName("logintab")[0];
var signupbutton=document.getElementsByClassName("signuptab")[0];
var logindiv=document.getElementsByClassName("login")[0];
var signupdiv=document.getElementsByClassName("signup")[0];

loginbtn.addEventListener('click',function(){
    loginUser(log_user_txt.value,log_user_pass.value);
});
signupbtn.addEventListener('click',function(){
    registerUser(signup_user_email.value,signup_user_pass.value,signup_user_contact.value,signup_user_fname_.value,signup_user_lname_.value,signup_user_organization_type.options[signup_user_organization_type.selectedIndex].value,signup_user_organization_name.value);
});

function viewLogin(){
    hidden();
    container.classList.remove('heightcontainer');
    logindiv.classList.remove('hide');
    signupbutton.classList.remove('changeme');
    signup_label.classList.remove('changemetxt');
    loginbutton.classList.add('changeme');
    login_label.classList.add('changemetxt');
}
function viewSignup(){
    hidden();
        container.classList.add('heightcontainer');
    signupdiv.classList.remove('hide');
    
    loginbutton.classList.remove('changeme');
    login_label.classList.remove('changemetxt');
    signupbutton.classList.add('changeme');
    signup_label.classList.add('changemetxt');
}
function hidden(){
    logindiv.classList.add('hide');
    signupdiv.classList.add('hide');
}

async function loginUser(username,password) {
    let url="http://localhost:5001/vhs/login";
    let loginRequest=await fetch(url,{
        method:"post",
        headers:{
            "Content-Type":"application/json"
        },
        body:JSON.stringify({
            "username":username,
            "password":password
        })
        }
    ); 
    let result = await loginRequest.json();
    console.log(result);
    if(result['isSuccess']){
        var token=result['responseBody']['token'];
        window.location="main.html";
        sessionStorage.setItem('token',token);
    }
    else{
        window.alert("Invalid credentials");
    }
}

async function registerUser(email,password,contact,first_name,last_name,organization_type,organization_name) {
    let url="http://localhost:5001/vhs/signup";
    let registerRequest=await fetch(url,{
        method:"post",
        headers:{
            "Content-Type":"application/json"
        },
        body:JSON.stringify({
            "email":email,
            "password":password,
            "contact":contact,
            "first_name":first_name,
            "last_name":last_name,
            "organization_type":organization_type,
            "organization_name":organization_name
        })
        }
    );
    let result = await registerRequest.json();
    console.log(result);
    if(result['response']==1){
        window.alert("Registered successfully");
        var token=result['responseBody']['token'];
        //window.location=".html";
        sessionStorage.setItem('token',token);
    }
    else{
        window.alert("Invalid credentials");
    } 
}