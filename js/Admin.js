//sets the default elements used
const menuEL = document.querySelector('.passChange');
const rowEl = document.querySelectorAll('tr.user');
const menuNameEL = document.querySelector('h3.username');
const closeButton = document.querySelector('span#cross');

rowEl.forEach((element) => {
    //variable for name and the change element within each row.
    let name = element.querySelector('.name').innerHTML;
    let changeEl = element.querySelector('.change');

    // opens menu when change button is pressed
    changeEl.addEventListener('click',() =>{
            menuEL.style.display = 'flex';
            menuEL.style.opacity = 1;
            menuNameEL.innerHTML = 'Change pass for ' + name;
    });
});

// closes menu when close button is pressed.
closeButton.addEventListener('click', () => {
        menuEL.style.display = 'none'
        menuEL.style.opacity = 0;
})