const nav = document.getElementById('mySideNav');

function navWidth() {
    if (nav.style.width == '250px') {
    nav.style.width = '0px';
    } else {
        nav.style.width = '250px';
    }
    console.log('clicked');
}


const items = document.querySelectorAll('.FAQcontainer .FAQitem');
    const next = document.getElementById('next');
    const prev = document.getElementById('prev');
    let active = Math.floor(items.length/2);
    
    function loadShow(){

    let stt = 0;
    items[active].style.transform = `none`;
    items[active].style.zIndex =  1;
    items[active].style.fliter = 'none';
    items[active].style.opacity = 1;
  
    for(var i = active + 1; i < items.length; i++){
      stt++;
      items[i].style.transform = `translateX(${150*(stt+0.3)}px) scale(${1 - 0.2*stt}) perspective(16px)`;
      items[i].style.fliter = 'blur(5px)';
      items[i].style.opacity = stt > 2 ? 0 : 0.6;
    }
    stt = 0;
    for(var i = active - 1; i >= 0; i--){
      stt++;
      items[i].style.transform = `translateX(${-150*(stt+0.3)}px) scale(${1 - 0.2*stt}) perspective(16px)`;
      items[i].style.fliter = 'blur(5px)';
      items[i].style.opacity = stt > 2 ? 0 : 0.6;
    } 
  }
  loadShow();
  next.onclick = function(){
    active = active + 1 <items.length ? active + 1 : active;
    
    loadShow();
  }

  prev.onclick = function(){
    active = active - 1 >= 0 ? active - 1 : active;
    loadShow();
  }