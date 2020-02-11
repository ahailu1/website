

const linkedin = "https://www.linkedin.com/in/alexanderhailu/"
let heading = document.getElementsByClassName("first__body--text");
//heading[0].textContent = hello("hello world");
iteration = () => {
    let a = 0;
    let i = 0;
    let c = 0;
    let firstText = "My name is Alexander Hailu and I am an aspiring Front-End web-developer."
let secondText = ".Through this website, I hope to demonstrate my skillset and attract the interest of employers. Please Contact me at:\n alex.hailu@hotmail.com and my linkedin at \n" + linkedin;
    let heading = document.getElementsByClassName("first__body--text");
    let firstLength = firstText.length;
//create function that is called by call back function
function final() 
{
heading[0].textContent = firstText.slice(0, i);    
if(i<firstText.length){
    i++
setTimeout(function(){
    final();
},50);
}
else{
//get whole text
//get index
//make sure the length of text does not exceed the length of the index at which we want to stop
    heading[0].textContent = firstText.slice(0, -(a));
if(firstLength > firstText.indexOf("and I")){
    firstLength--;
    a++;
    
setTimeout(function(){
    final();
}, 50);    
}
else{

    let name = firstText.slice(0, firstText.indexOf("and I"));
heading[0].textContent = name + secondText.slice(0, c);
if(secondText.length > c)

setTimeout( () =>{
console.log(i);
c++;
final();
}, 50);

}
}
}
final();

}

iteration();

    //console.log(header[0].textContent);

//call this function after each iteration.
//create function
//iterate over function
//pause one second after function goes through
