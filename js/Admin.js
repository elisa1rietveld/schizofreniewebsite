//sets the default elements used
const menuEL = document.querySelector('.passChange');
const rowEl = document.querySelectorAll('tr.user');
const menuNameEL = document.querySelector('h3.username');
const closeButton = document.querySelector('span#cross');
const body = document.querySelector('body');

async function update_user(data) {
    const response = await fetch('/php/Controllers/update.php', {
        method: "POST",
        body: data
    });
    return response.json();
}

function closeMenu() {
    menuEL.style.display = 'none';
    body.style.overflow = 'auto';

    pass.classList.remove('active');
    userRole.classList.remove('active');
    selectEl.value = '';
    document.querySelector('#Roles').value= '';

}

function popUp(element) {
    element.classList.add('visible');
    setTimeout(() => {
        element.classList.remove('visible');
    },3000);
}

rowEl.forEach((element) => {
    //variable for name and the change element within each row.
    let name = element.querySelector('.name').innerHTML;
    let changeEl = element.querySelector('.change');
    
    if (changeEl != null) {
        // opens menu when change button is pressed
        changeEl.addEventListener('click',() =>{
                menuEL.style.display = 'flex';
                body.style.overflow = 'hidden';
                menuNameEL.innerHTML = 'User options for ' + name;
        });
    }
});

// closes menu when close button is pressed.
closeButton.addEventListener('click', () => {
    closeMenu();
})






//for inside the form
const selectEl = document.querySelector('select#choice');
const pass = document.querySelector('#pass');
const userRole = document.querySelector('#userRole');



//when either user or password option is chosen.
selectEl.addEventListener('change',() => {

    if (selectEl.value == 'pass') {
        userRole.classList.remove('active');
        pass.classList.add('active');


    } else if (selectEl.value == 'userRole') {
        pass.classList.remove('active');
        userRole.classList.add('active');
    }
})



//after the submit
const form = document.querySelector('form#form1');

form.addEventListener('submit',(event) => {
    event.preventDefault();

    // takes the data from the form
    let formData = new FormData(form);

    //adds a new post named 'user' with the username
    let name = document.querySelector('.username').innerHTML.replace('User options for ','');
    formData.append('name',name);
    let data = new URLSearchParams(formData);

    // sends data and shows return.
    update_user(data)
    .then(() =>{
        closeMenu();
        const confirm = document.querySelector('.confirm');
        popUp(confirm);
    })
})






