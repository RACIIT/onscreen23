// $(document).ready(function() {
//     // Transition effect for navbar 
//     $(window).scroll(function() {
//       // checks if window is scrolled more than 500px, adds/removes solid class
//       if($(this).scrollTop() > 200) { 
//           $('.navbar').addClass('solid');
//       } else {
//           $('.navbar').removeClass('solid');
//       }
//     });
// });


	//********** menu background color change while scroll

	// $(window).on('scroll', function () {
	// 	var menu_area = $('.nav-area');
	// 	if ($(window).scrollTop() > 200) {
	// 		menu_area.addClass('sticky_navigation');
	// 	} else {
	// 		menu_area.removeClass('sticky_navigation');
	// 	}
	// });


	// Use the CDN or host the script yourself
// https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js
// https://matthewelsom.com/assets/js/libs/instafeed.min.js


 // IGQVJYV3dGWHVvcVdaM0hfTllieDJZAd0JDS1VQRXZAlNXRWUTBGektORkltbWVETVM0N3BvTDVqS2M3V1U5UlB4M2lrOWZAsVlE3a0hVd21kcFJJX3ltMTNRbDZAZAWTV5RDlFTV9LbXRxOVZAqX2hEUkZA4dQZDZD


  
      $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
      
  
      VanillaTilt.init(document.querySelectorAll(".phase "), {
		max: 10,
		speed: 400,
    glare:true,
    "max-glare":1,
	});
     
 
      
      var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 120,
          modifier: 1,
          slideShadows: true,
        },
        loop:true,
                autoplay:{
          delay:2000,
          disableOnInteraction:false,
        }

      });
     
    
      $('.js-scroll-trigger').click(function() {
$('.navbar-collapse').collapse('hide');
});
  

 
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


  // next.onclick=function(){
  //   form1.style.left="-590px";
  //   form2.style.left="0px";
  //   progress.style.width="240px";
  // }
  back1.onclick=function(){
    form1.style.left="0px";
    form2.style.left="550px";
    progress.style.width="120px";
  }


  // next1.onclick=function(){
  //   form2.style.left="-550px";
  //   form3.style.left="0px";
  //   progress.style.width="360px";
  // }
  back2.onclick=function(){
    form2.style.left="0px";
    form3.style.left="550px";
    progress.style.width="240px";
  }


  // next2.onclick=function(){
  //   form3.style.left="-1550px";
  //   form4.style.left="0px";
  //   progress.style.width="600px";
  // }
  back3.onclick=function(){
    form3.style.left="0px";
    form4.style.left="550px";
    progress.style.width="360px";
  }


  // submitbtn.onclick=function(){
  //   progress.style.width="600px";
  // }


 

 
  document.addEventListener( 'DOMContentLoaded', function () {
  new Splide( '.splide', {
    arrows :'false' ,
    type    : 'loop',
    perPage : 1,
    autoplay: true,

	pagination:false,
	focus    : 'center',
    cover: false,
    

  }).mount();
});


// let scene, camera, renderer;
//       function init() {
//         scene = new THREE.Scene();
//         scene.background = new THREE.Color(0xdddddd);
//         camera = new THREE.PerspectiveCamera(40,window.innerWidth/window.innerHeight,1,5000);
//         camera.rotation.y = 45/180*Math.PI;
//         camera.position.x = 800;
//         camera.position.y = 100;
//         camera.position.z = 1000;
//         controls = new THREE.OrbitControls(camera);
//         controls.addEventListener('change', renderer);
//         hlight = new THREE.AmbientLight (0x404040,100);
//         scene.add(hlight);
//         directionalLight = new THREE.DirectionalLight(0xffffff,100);
//         directionalLight.position.set(0,1,0);
//         directionalLight.castShadow = true;
//         scene.add(directionalLight);
//         light = new THREE.PointLight(0xc4c4c4,10);
//         light.position.set(0,300,500);
//         scene.add(light);
//         light2 = new THREE.PointLight(0xc4c4c4,10);
//         light2.position.set(500,100,0);
//         scene.add(light2);
//         light3 = new THREE.PointLight(0xc4c4c4,10);
//         light3.position.set(0,100,-500);
//         scene.add(light3);
//         light4 = new THREE.PointLight(0xc4c4c4,10);
//         light4.position.set(-500,300,500);
//         scene.add(light4);
//         renderer = new THREE.WebGLRenderer({antialias:true});
//         renderer.setSize(window.innerWidth,window.innerHeight);
//         document.body.appendChild(renderer.domElement);
//         let loader = new THREE.FBXLoader();
//         loader.load('asset/model/3dm.FBX', function(fbx){
//           car = fbx.scene.children[0];
//           car.scale.set(0.5,0.5,0.5);
//           scene.add(fbx.scene);
//           animate();
//         });
//       }
      // function animate() {
      //   renderer.render(scene,camera);
      //   requestAnimationFrame(animate);
      // }
      // init();
 


// GENERAL SETTING
window.sr = ScrollReveal({       distance: "260px",
duration: 2800,});
// Custom Settings
sr.reveal('.abt-1', { 
  duration: 2000,
  origin: "left",
  mobile: false,
  distance: "50px",
  
  easing: "ease-in-out"
});


sr.reveal('.abt-2', { 
  duration: 2000,
  origin: "right",
  distance: "50px",
  mobile: false,
  easing: "ease-in-out"
});

sr.reveal('.fact-1', { 
  duration: 2000,
  origin: "bottom",
  distance: "140px",
  mobile: false,
  easing: "ease-in-out"
});

sr.reveal('.fact-2', { 
  duration: 2100,
  mobile: false,
  origin: "bottom",
  distance: "140px",
  easing: "ease-in-out"
});

sr.reveal('.fact-3', { 
  duration: 2200,
  origin: "bottom",
  mobile: false,
  distance: "140px",
  easing: "ease-in-out"
});
sr.reveal(`.judge-1,.register-1`, { 
  duration: 2000,
  origin: "bottom",
  mobile: false,
  distance: "50px",
  easing: "ease-in-out"
});
sr.reveal('.judge-2, .register-2',{
  distance: '50px',
  opacity: 0,
  mobile: false,
  easing: "ease-in-out",
  duration:2500
});

sr.reveal('.trailer-1', { 
  duration: 2000,
  mobile: false,
  origin: "right",
  distance: "70px",
  easing: "ease-in-out"
});


sr.reveal('.trailer-2', { 
  duration: 2000,
  origin: "left",
  mobile: false,
  distance: "70px",
  easing: "ease-in-out"
});

sr.reveal('.trailer-3', { 
  duration: 2000,
  origin: "bottom",
  mobile: false,
  distance: "70px",
  easing: "ease-in-out"
});

sr.reveal('.merch-1', { 
  duration: 2000,
  origin: "left",
  mobile: false,
  distance: "70px",
  
  easing: "ease-in-out"
});
sr.reveal('.merch-2,.merch-3,.merch-3,.merch-4,.merch-5,.merch-6,.merch-7,.merch-8', { 
  duration: 2200,
  origin: "left",
  mobile: false,
  distance: "50px",
  
  easing: "ease-in-out"
});

sr.reveal('.merch-9, .register-2',{
  distance: '10px',
  opacity: 0,
  mobile: false,
  easing: "ease-in-out",
  duration:2500
});

sr.reveal('.tile', { 
  duration: 2000,
  origin: "top",
  mobile: false,
  distance: "10px",
  easing: "ease-in-out"

});
$("#menu").onePageNav({
  currentClass: "active-link",
  changeHash: false,
  scrollSpeed: 750,
  scrollThreshold: 0.5,
  filter: "",
  easing: "swing",
});


// sr.reveal('.intro',{
//   distance: '0px',
//   opacity: 0,
//   mobile: false,
//   easing: "ease-in-out",
//   duration:5500
// });



$(document).ready(function() {
        // Transition effect for navbar 
        $(window).scroll(function() {
          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 200) { 
              $('.navbar').addClass('solid');
          } else {
              $('.navbar').removeClass('solid');
          }
        });
});