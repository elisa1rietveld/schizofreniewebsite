// Dit is de meest omslachtige manier om dit te doen maar holy shit
// als ik hier ajax voor moet gebruiken, dan sterf ik.
// weet ik veel hoe ik dat dan had moeten doen.
// Er lijkt geen manier te zijn zonder jQuery.

        let bignum = document.getElementById("nice").innerHTML;
        bignum = "0.5" + bignum.replace("%","");

        let num = 0. + Number(bignum);
        console.log(num);
        let round = 816.81;
        let blue = round * num;
        let grey = round - blue;

        const circle = document.querySelector('circle.fg');
        circle.setAttribute("stroke-dasharray",blue + " " + grey);