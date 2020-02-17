

//height of whole window = window.documentElement.scrollHeight;
//height of document = window.innerheight;
//console.log(`hello: ${window.scrollY}`);
//scrollable = scrollheight - inner height.

/*
function fixnav(){

var a = document.getElementsByClassName("header__navbar");

document.addEventListener("scroll", function(){
    
    if(window.scrollY == 0)
{
a[0].style.opacity = "0.5";
}    
else 
{
a[0].style.position = "fixed";
a[0].style.opacity = "1";
}
});
}
*/



/*
function formValidation(){


   document.querySelector(".form__button").addEventListener("click", () =>{

    let x = document.forms.form[0];
console.log(x);
    if(x.value == ""){
    alert(" please enter a value");
    window.stop();
    }}); 
};

formValidation();
*/

fixnav();



/*
if(c.getBoundingClientRect().height > window.scrollY ) {
console.log(c.getBoundingClientRect().top + "hello");
b.style.display = "none";    

}
else {

    b.style.display = "";
}

});
}

fixnav();
*/
/*
var key  = "e31b9c707ac715e0c3fd4aec29ea0772";
var directions = [43.6532, 79.3832]
async function getresults(){
//https://api.darksky.net/forecast/[key]/[latitude],[longitude]
const website = "https://api.darksky.net/forecast";
var data =fetch(`${website}/${key}/${directions[0]},${directions[1]}`);
console.log(data);

}
getresults();

console.log(`hello: ${window.scrollY}`);
    console.log(b);
    console.log(`alex: ${window.innerHeight}`);
    console.log(`okay: ${document.documentElement.scrollHeight}`);


*/
