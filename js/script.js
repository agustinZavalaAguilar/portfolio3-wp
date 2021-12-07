/*document.getElementById('about').innerHTML = "<h1>surprise!</h1>";*/

/*document.querySelector('h1').style.color = '#201F2E';*/

/*document.querySelector('h1').style.fontFamily = 'serif';*/
/*----About me effect--------------------------*/
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

/*------------Switch to drawing pic-effect----*/

let flipPic = document.getElementById('pic1');

let flipDraw = document.getElementById('pic2');

flipPic.addEventListener('mouseenter' , function(){
    flipPic.style.display = 'none'; 
    flipDraw.style.display = 'block';
});

flipDraw.addEventListener('mouseout' , function(){
    flipDraw.style.display = 'none';
    flipPic.style.display = 'block';

});

