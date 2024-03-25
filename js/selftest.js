const questions = document.querySelectorAll('.question')
const dictCook = getCookies();
const form = document.querySelector('#form');

function getCookies() {
    // splits the cookies
    if(document.cookie != '') {
        let split = (document.cookie).replace(/\s/g, '').split(';');
        
        let cookie = {};
        // splits the esperate cookie into name and value
        split.forEach((element) =>{
            let newElem = element.split('=');
            //    adds the cookie name and value to a dictionary
            cookie[newElem[0]] = newElem[1];
        })
        return cookie;
    } else {
        console.error('cookies are empty');
        return false;
    }
}

function deletecookies() {
    let cookies = getCookies();
    for (let name in cookies) {
        //makes the age die out aka removing the cookies
        if (name != 'PHPSESSID') {
            document.cookie = name+'=; Max-Age=-99999999;';
        }
    }
}

function newCookie(name, value) {
    let cookie = name+'='+value;
    document.cookie = cookie;
}

questions.forEach((element, key) =>{
    let inputs = element.querySelectorAll('input');

    inputs.forEach((input) => {
        let name = input.name;
        //set the cookie values to the element name values
        if (dictCook[name] != null && dictCook[name] == input.value){
            input.checked = true;
            if(key < 5) {
                questions[key].classList.remove('active');
                questions[key+1].classList.add('active');    
            }

        }
        input.addEventListener('change', () => {
            newCookie(input.name, input.value);
            if(key < 5) {
                questions[key].classList.remove('active');
                questions[key+1].classList.add('active');    
            } 
        })
    })
})

form.addEventListener('submit', (event) =>{
    deletecookies();
})