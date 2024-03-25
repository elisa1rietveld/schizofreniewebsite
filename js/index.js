    const items = document.querySelectorAll('.FAQcontainer .FAQitem');
    const next = document.getElementById('next');
    const prev = document.getElementById('prev');
    let active = Math.floor(items.length/2);
    
    function loadShow(){
      console.log('hi');

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

  next.onclick = function(){
    active = active + 1 <items.length ? active + 1 : active;
    
    loadShow();
  }
  
  prev.onclick = function(){
    active = active - 1 >= 0 ? active - 1 : active;
    loadShow();
  }

  loadShow();