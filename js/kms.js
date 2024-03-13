// Dit is de meest omslachtige manier om dit te doen maar holy shit
// als ik hier ajax voor moet gebruiken, dan sterf ik.
// weet ik veel hoe ik dat dan had moeten doen.
// Er lijkt geen manier te zijn zonder jQuery.
let svg = document.querySelector('circle.fg');
let cText = document.querySelector('text#nice');
var total = 0;

// returns the quesitions in json format.
async function get() {
    let response = await fetch('/js/get.php');
    return response.json();
}

// does the function
get()

    // puts the return in res and makes total add up all question values.
    .then((res) => {
       for (var i in res) {
            if(res[i] != null) {
              total += res[i];
            }
            else {
               total = null;
               break;
            }       
        }
    // splices up the circle up into blue and grey based off of percentage.
    const num = total * 4;
    const round = 816.81408993334624200028727965267;
    const blue = round * (num / 100);
    const grey = round - blue;
    // sets the values.
    svg.setAttribute('stroke-dasharray', (blue + " " + grey));
    cText.innerHTML = num + '%';
});