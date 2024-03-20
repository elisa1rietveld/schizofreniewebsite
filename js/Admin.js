//sets the default elements used
const menuEL = document.querySelector('.passChange');
const rowEl = document.querySelectorAll('tr.user');
const menuNameEL = document.querySelector('h3.username');
const closeButton = document.querySelector('span#cross');
const body = document.querySelector('body');
const userIn = document.querySelector('input#user');


rowEl.forEach((element) => {
    //variable for name and the change element within each row.
    let name = element.querySelector('.name').innerHTML;
    let changeEl = element.querySelector('.change');

    // opens menu when change button is pressed
    changeEl.addEventListener('click',() =>{
            menuEL.style.display = 'flex';
            body.style.overflow = 'hidden';
            menuNameEL.innerHTML = 'User options for ' + name;
            userIn.value = name;

    });
});

// closes menu when close button is pressed.
closeButton.addEventListener('click', () => {
        menuEL.style.display = 'none';
        body.style.overflow = 'auto';
        userIn.value = 'default';

})





const selectEl = document.querySelector('select#choice');
const pass = document.querySelector('#pass');
const userRole = document.querySelector('#userRole');

selectEl.addEventListener('change',() => {

    if (selectEl.value == 'pass') {
        userRole.classList.remove('active');
        pass.classList.add('active');


    } else if (selectEl.value == 'userRole') {
        pass.classList.remove('active');
        userRole.classList.add('active');
    }
})

