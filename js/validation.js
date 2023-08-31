// const Participant1= document.getElementById("Participant-1")
// const Participant2= document.getElementById("Participant-2")
// const Participant3= document.getElementById("Participant-3")

// const Email1= document.getElementById("Email-1")
// const Email2= document.getElementById("Email-2")
// const Email3= document.getElementById("Email-3")

// const firstnext=document.getElementById("firstnext")
// const submitform=document.getElementById("submit-form")
// const errorElement =document.getElementById('error')


// form.addEventListener('firstn', (e) => {
//     let messages = []
//     if (Participant1.value === '' || Participant1.value == null) {
//       messages.push('Name is required')
//     }
  
//     if (password.value.length <= 6) {
//       messages.push('Password must be longer than 6 characters')
//     }
  
//     if (password.value.length >= 20) {
//       messages.push('Password must be less than 20 characters')
//     }
  
//     if (password.value === 'password') {
//       messages.push('Password cannot be password')
//     }
  
//     if (messages.length > 0) {
//       e.preventDefault()
//       errorElement.innerText = messages.join(', ')
//     }
//   })




 
var form1=document.getElementById("form1");
var form2=document.getElementById("form2");
var form3=document.getElementById("form3");
var form4=document.getElementById("form4");


var next=document.getElementById("firstnext");
var next1=document.getElementById("next1");
var next2=document.getElementById("next2");
var submitbtn=document.getElementById("submit-btn");

var back1=document.getElementById("prev1");
var back2=document.getElementById("prev2");
var back3=document.getElementById("prev3");

var progress=document.getElementById("progress");





const Name1 = document.querySelector("#name1-input");
const Name2 = document.querySelector("#name2-input");
const Name3 = document.querySelector("#name3-input");
const Email1 = document.querySelector("#email1-input");
const Email2 = document.querySelector("#email2-input");
const Email3 = document.querySelector("#email3-input");
const TeamLeader = document.querySelector("#leader-input");
const TeamName = document.querySelector("#team-input");
const TeamLeaderEmail = document.querySelector("#leaderEmail-input");
const TeamContact = document.querySelector("#teamContact-input");
const RotaractClub = document.querySelector("#Club-input");
const Queries = document.querySelector("#query-input");
const Merch = document.querySelector("#merchandise-input");

// |------------------------------ Sliding Form (Slider) -------------------------------|

const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
var progress=document.getElementById("progress");

let current = 1;

// ! First Next Button
nextBtnFirst.addEventListener("click", function (event) {
  if (
    Name1.value == "" ||
    Name1.value == null 
  ) {
    event.preventDefault();
    Swal.fire({
      heightAuto: false,
      position: "center",
      icon: "error",
      title: "Please check the missing name fields!",
      footer: "<p>Participants name fields are compulsory.</p>",
      showConfirmButton: false,
      showCancelButton: true,
      background: "#edfffc",
      timer: 5000,
    });
  } else if (
    Email1.value == "" ||
    Email1.value == null 
  ) {
    event.preventDefault();
    Swal.fire({
        heightAuto: false,
      position: "center",
      icon: "error",
      title: "Email fields cannot be empty!",
      footer: "<p>Please enter the correct email address.</p>",
      showConfirmButton: false,
      showCancelButton: true,
      background: "#edfffc",
      timer: 5000,
    });
  } else if (
    !Email1.value.match(
      /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    ) 
    // ||
    // !Email2.value.match(
    //   /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    // )
  ) {
    event.preventDefault();
    Swal.fire({
      heightAuto: false,
      position: "center",
      icon: "error",
      // title: "Oops...",
      title: "You have entered the email field incorrectly",
      footer:
        "<p>Please check the fields and enter the valid email address!</p>",
      background: "#edfffc",
      showCancelButton: true,
      showConfirmButton: false,
      color: "fff",
      timer: 5000,
    });
  } 
  else {
 
        form1.style.left="-590px";
        form2.style.left="0px";
        progress.style.width="240px";
  
    

  }
});

// ! Second Next button
nextBtnSec.addEventListener("click", function (event) {
  if (TeamLeader.value == "" || TeamLeader.value == null) {
    event.preventDefault();
    Swal.fire({
        heightAuto: false,
      position: "center",
      icon: "error",
      title: "Team Leader name is missing!",
      footer: "<p>Team Leader name field is compulsory.</p>",
      showConfirmButton: false,
      showCancelButton: true,
      background: "#edfffc",
      timer: 5000,
    });
  } else if (TeamName.value == "" || TeamName.value == null) {
    event.preventDefault();
    Swal.fire({
        heightAuto: false,
      position: "center",
      icon: "error",
      title: "Team name cannot be empty!",
      footer: "<p>Please enter your Team name.</p>",
      showConfirmButton: false,
      showCancelButton: true,
      background: "#edfffc",
      timer: 5000,
    });
  } else if (TeamLeaderEmail.value == "" || TeamLeaderEmail.value == null) {
    event.preventDefault();
    Swal.fire({
        heightAuto: false,
      position: "center",
      icon: "error",
      title: "Team leader email cannot be empty!",
      footer: "<p>Please enter the correct email address.</p>",
      showConfirmButton: false,
      showCancelButton: true,
      background: "#edfffc",
      timer: 5000,
    });
  } else if (
    !TeamLeaderEmail.value.match(
      /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    )
  ) {
    event.preventDefault();
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "You have entered the email field incorrectly!",
      footer: "<p>Please check the field and enter a valid email address.</p>",
      background: "#edfffc",
      showCancelButton: true,
      showConfirmButton: false,
      color: "fff",
      timer: 5000,
    });
  } else if (TeamContact.value == "" || TeamContact.value == null) {
    event.preventDefault();
    Swal.fire({
        heightAuto: false,
      position: "center",
      icon: "error",
      title: "Team contact number field is empty!",
      footer: "<p>Please enter a valid contact number.</p>",
      showConfirmButton: false,
      showCancelButton: true,
      background: "#edfffc",
      timer: 5000,
    });
  } 
  else {
 

        form2.style.left="-550px";
        form3.style.left="0px";
        progress.style.width="360px";
      



}



});
next2.onclick=function(){
  form3.style.left="-1550px";
  form4.style.left="0px";
  progress.style.width="600px";
}

// // ! Third Next Button
// nextBtnThird.addEventListener("click", function (event) {
//     event.preventDefault();
    
  
//   });

// ! Submit Button
submitBtn.addEventListener("click", function (event) {
  if (Merch.value == "" || Merch.value == null) {
    event.preventDefault();
    Swal.fire({
        heightAuto: false,
      position: "center",
      icon: "error",
      title: "Merchandise field is empty!",
      footer: "<p>Please enter Yes or No on your preference.</p>",
      showConfirmButton: false,
      showCancelButton: true,
      background: "#edfffc",
      timer: 5000,
    });
  }

 
    // document.getElementById('submit-form').reset();
    //         setTimeout(function () {
    //             window.location.reload();
    //         }, 5000);
   

   
// }

});



prevBtnSec.addEventListener("click", function (event) {
    event.preventDefault();
    slidePage.style.marginLeft = "0%";
  
  });
  
  prevBtnThird.addEventListener("click", function (event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-26%";
  
  });
  
  prevBtnFourth.addEventListener("click", function (event) {
    event.preventDefault();
    slidePage.style.marginLeft = "-52%";
  
  });
  

     
  
