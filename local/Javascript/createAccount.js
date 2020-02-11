

window.onload 

function signUp(){window.addEventListener("DOMContentLoaded", () => {
let heading = document.getElementById("paragraphedit");
console.log(heading);
let num = 14;
let username = document.getElementsByName("uid");
heading.style.cssText = "color:green; font-size: 13px; width: 70%;margin-right: -3rem; margin-bottom: -25px;"
//div.append(paragraph);
heading.textContent = `you have ${num} characters left`;

username[0].addEventListener("input", (el) => {

//num = num - 
let max = 14;
let count = el.target.value.length;
let left = max - count;
heading.textContent = `you have ${left} characters left`;
if(left < 0){

    heading.textContent = "you've exceeded the maximum length";
}

})
//divContainer[0].appendChild(block);

 //let style = div.setAttribute("style", "border:solid yellow;");

//headingNames[1].appendChild(style);
//headingNames[1].insertAdjacentHTML('afterbegin','<div id="hello">hello</div>');

})}
signUp();