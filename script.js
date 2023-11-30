/*document.getElementById('about').innerHTML = "<h1>surprise!</h1>";*/

/*document.querySelector('h1').style.color = '#201F2E';*/

/*document.querySelector('h1').style.fontFamily = 'serif';*/
/*----About me effect--------------------------*/

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

