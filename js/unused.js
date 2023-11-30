let aboutTarget = document.getElementById('about');

aboutTarget.addEventListener('mouseenter', function(){
    aboutTarget.innerHTML = 'this is me'; 
    /*aboutTarget.style.fontSize = '5em';   */
});

aboutTarget.addEventListener('mouseout', function(){
    aboutTarget.innerHTML = 'about';
    /*aboutTarget.style.fontSize = '4em';      */
});

/*------------- Work/ Portfolio effect-----------------*/
let workTarget = document.getElementById('work');

workTarget.addEventListener('mouseenter', function(){
    workTarget.innerHTML = 'portfolio';
    /*workTarget.style.fontSize = '5em';    */
});

workTarget.addEventListener('mouseout', function(){
    workTarget.innerHTML = 'work';
    /*workTarget.style.fontSize = '4em';     */
});

/*------------ Contact/ let's talk effect----------*/

let contactTarget = document.getElementById('contact');

contactTarget.addEventListener('mouseenter', function(){
    contactTarget.innerHTML = "let's talk";
    /*contactTarget.style.fontSize = '5em';*/

});

contactTarget.addEventListener('mouseout', function(){
    contactTarget.innerHTML = "contact";
    /*contactTarget.style.fontSize = '4em';     */
});
