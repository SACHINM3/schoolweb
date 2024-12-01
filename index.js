// var responsiveSlider = function() {

//     var slider = document.getElementById("slider");
//     var sliderWidth = slider.offsetWidth;
//     var slideList = document.getElementById("slideWrap");
//     var count = 1;
//     var items = slideList.querySelectorAll("li").length;
//     var prev = document.getElementById("prev");
//     var next = document.getElementById("next");
    
//     window.addEventListener('resize', function() {
//       sliderWidth = slider.offsetWidth;
//     });
    
//     var prevSlide = function() {
//       if(count > 1) {
//         count = count - 2;
//         slideList.style.left = "-" + count * sliderWidth + "px";
//         count++;
//       }
//       else if(count = 1) {
//         count = items - 1;
//         slideList.style.left = "-" + count * sliderWidth + "px";
//         count++;
//       }
//     };
    
//     var nextSlide = function() {
//       if(count < items) {
//         slideList.style.left = "-" + count * sliderWidth + "px";
//         count++;
//       }
//       else if(count = items) {
//         slideList.style.left = "0px";
//         count = 1;
//       }
//     };
    
//     next.addEventListener("click", function() {
//       nextSlide();
//     });
    
//     prev.addEventListener("click", function() {
//       prevSlide();
//     });
    
//     setInterval(function() {
//       nextSlide()
//     }, 8000);
    
//     };
    
//     window.onload = function() {
//     responsiveSlider();  
//     }
// // ***********slider****************


function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }

  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }


//   $(document).ready(function () {
//     $('#login-btn').on('click', function (e) {
//       e.preventDefault();
//       var url = $(this).attr('./login/login.php');
//       var icon = $(this).attr('./login/login.php');
  
// })});