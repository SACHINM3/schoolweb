let popupBtns = document.querySelector('.popup_btn');
let popupBg = document.querySelector(".popup-bg");
let closeBtn = document.querySelector(".close_btn");

popupBtns.addEventListener('click', function(){
     popupBg.classList.add('bg-active');
    })
    
closeBtn.addEventListener('click', function(){
    popupBg.classList.remove('bg-active');
    })

    let popupBtns_1 = document.querySelector('.popup_btn_1');
    let popupBg_1 = document.querySelector(".popup-bg_1");
    let closeBtn_1 = document.querySelector(".close_btn_1");
    
    popupBtns_1.addEventListener('click', function(){
         popupBg_1.classList.add('bg-active_1');
        })
        
    closeBtn_1.addEventListener('click', function(){
        popupBg_1.classList.remove('bg-active_1');
        })  

    
    let popupBtns_2 = document.querySelector('.popup_btn_2');
    let popupBg_2 = document.querySelector(".popup-bg_2");
    let closeBtn_2 = document.querySelector(".close_btn_2");
    
    popupBtns_2.addEventListener('click', function(){
         popupBg_2.classList.add('bg-active_2');
        })
        
    closeBtn_2.addEventListener('click', function(){
        popupBg_2.classList.remove('bg-active_2');
        })      
        
           


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