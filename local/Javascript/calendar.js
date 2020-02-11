limit = () => {

let inputBox = document.getElementsByClassName("calendar__input");
let minutes = document.getElementsByName("minute");
minutes = [...minutes];
inputBox = [...inputBox];
let regex =/^[0-9]/;
let regexNumber = /^[0-5]/;
let regexNumber1 = /[0-9]$/;
let regex1 =/^([0-9]|[0-1][0-2]|0[1-9])$/;

inputBox.forEach((el) => {

el.addEventListener("input", (text) =>{


if(el.name == "minute" && (!text.target.value.charAt(0).match(regexNumber))){
    text.target.value = "";
}
else if(el.name == "minute" && (!text.target.value.match(regexNumber1))){
text.target.value = text.target.value.charAt(0) + "";
}

if(el.name == "hour" && (!text.target.value.charAt(0).match(regex))){

    text.target.value = ""; 
}
   
else{ 
 if ((el.name == "hour") && (!text.target.value.match(regex1))){
text.target.value = text.target.value.charAt(0) + "";
 }
}
})
})}

limit();

date = (calendarInput, radioStartNameClass, radioEndNameClass) => {
        //calendar__time-start
        let radiostart;
        let radioend;
        let totalSleep;
        let arr = [];
        let hour = calendarInput;
        //class name calendar__input
        //get array
        let hourStart = parseInt(hour[0].value);
        let minuteStart = parseFloat(hour[1].value/100);
        let totalStartTime = parseFloat((hourStart + minuteStart));
        let hourEnd = parseInt(hour[2].value);
        let minuteEnd = parseFloat(hour[3].value/100);
        let totalEnd = parseFloat((hourEnd + minuteEnd));
        let radioButtonStart = radioStartNameClass;
        let radioButtonEnd = radioEndNameClass;
        radioButtonStart = [...radioButtonStart];
        radioButtonEnd = [...radioButtonEnd];

        //sleep-start
        //sleep-end
        if(radioButtonStart[0].checked == true && radioButtonEnd[0].checked == true){
        
         if(hourStart == 12 &&(hourEnd != 12) && (minuteEnd > minuteStart)){
                totalSleep = hourEnd + ((minuteEnd - minuteStart));
                console.log(hourEnd);
                console.log(totalSleep);
             }
        else if((hourStart == 12 && hourEnd < 12) && minuteEnd < minuteStart){
        totalSleep = +hourEnd - 1 + ((0.6 - (minuteStart - minuteEnd)));
        console.log(totalSleep);
        }

        else if((hourStart == 12 && hourEnd < 12) && minuteEnd == minuteStart){
            totalSleep = hourEnd;
            console.log(totalSleep);
            }




        else if((hourEnd == 12 && hourStart<12) && minuteEnd < minuteStart){
            totalSleep = 23 + (hourEnd -hourStart) + (0.6 - (minuteStart - minuteEnd));
            console.log(totalSleep);
            }
        else if((hourEnd == 12 && hourStart < 12) && minuteEnd > minuteStart){
        totalSleep = 24 + (hourEnd - hourStart) + (minuteEnd - minuteStart);
        console.log(totalSleep);
        }
        else if((hourEnd == hourStart) && minuteEnd > minuteStart){
            totalSleep = minuteEnd - minuteStart;
            console.log(totalSleep.toPrecision(2));
            }
            else if((hourEnd == hourStart) && minuteEnd < minuteStart){
                totalSleep = 24-1 + (0.6- (minuteStart - minuteEnd) );
                console.log(totalSleep);
                }   
        else if(hourEnd == 12 && minuteEnd == minuteStart){
            totalSleep = 24 + (hourEnd - hourStart);
            console.log(totalSleep);
            }
            else if((hourStart == 12 && hourEnd == 12) && (minuteEnd > minuteStart)){
                totalSleep = minuteEnd - minuteStart;
                console.log(totalSleep);
                }
                else if(hourEnd == hourStart && minuteEnd == minuteStart){
                    totalSleep = 24
                    console.log(totalSleep);
                    }
                    else if((hourStart == 12 && hourEnd == 12) && (minuteEnd > minuteStart)){
                        totalSleep = minuteEnd - minuteStart;
                        console.log(totalSleep);
                        }
                else if((hourStart < hourEnd) && (minuteEnd == minuteStart)){
        totalSleep = hourEnd - hourStart;
        console.log(totalSleep);
        }
        else if((hourEnd > hourStart) && (minuteEnd > minuteStart)){
            totalSleep = totalEnd - totalStartTime;
            console.log(totalStartTime);
        } else if((hourEnd < hourStart) && (minuteEnd == minuteStart))
        {
                totalSleep = hourEnd;
        console.log(totalSleep);
            }
            
        else if((hourEnd > hourStart) && (minuteEnd < minuteStart)){
            console.log(minuteStart);
        totalSleep = ((hourEnd - hourStart) - 1) + ((0.6 - (minuteStart - minuteEnd)));
        console.log(totalSleep);
        }
        else if((hourEnd < hourStart && hourStart != 12) && (minuteEnd > minuteStart)){
        
            totalSleep = (24 - (hourStart - hourEnd) + (minuteEnd - minuteStart));
            console.log(totalSleep);
        }
        else if((hourEnd < hourStart) && (minuteEnd < minuteStart)){
        totalSleep = (23 - ((hourStart - hourEnd))) + ((0.6 - (minuteStart - minuteEnd)));
            console.log(totalSleep);
        }
        else if((hourEnd < hourStart) && (minuteEnd == minuteStart)){
            totalSleep = 24 - (hourStart - hourEnd);
        console.log(totalSleep);
        }
        }
        else if(radioButtonStart[0].checked == true && radioButtonEnd[0].checked == false){
        
         if((hourEnd < hourStart && hourStart!=12) && (minuteEnd < minuteStart)){
                console.log(minuteStart);
            totalSleep = (hourEnd + ((12 - hourStart) - 1) + (0.6 - (minuteStart - minuteEnd))).toPrecision(4);
            console.log(totalSleep);
            
        }
        else if((hourEnd == 12) && (hourStart < 12) && (minuteEnd < minuteStart)){
        
        totalSleep = hourEnd - (hourStart - 1) + (0.6 - (minuteStart - minuteEnd));
                    console.log(totalSleep);
            }
        
        else if((hourEnd == 12 && hourStart < 12) && (minuteEnd == minuteStart)){
                totalSleep = hourEnd - hourStart;
                console.log(totalSleep);
                }
        
                else if((hourEnd == 12 && hourStart < 12) && (minuteEnd == minuteStart)){
                    totalSleep = hourEnd - hourStart;
                    console.log(totalSleep);
                    }
        else if((hourEnd == 12) && (hourStart < 12) && (minuteEnd > minuteStart)){
        
        totalSleep = (hourEnd - hourStart) + (0.6 - (minuteEnd - minuteStart));
                            console.log(totalSleep);
                    }
    else if((hourStart == 12) && (hourEnd < 12) && (minuteEnd < minuteStart)){
    totalSleep = (11 + (hourEnd)) + (0.6 - (minuteStart - minuteEnd));
    console.log(totalSleep);}        
    
    else if((hourStart == 12) && (hourEnd < 12) && (minuteEnd > minuteStart)){
        
        totalSleep = 12 + hourEnd + (minuteEnd - minuteStart);
                    
    }
        else if((hourEnd < hourStart && hourStart != 12) && (minuteEnd > minuteStart)){
        totalSleep = hourEnd + (12-hourStart) + (minuteEnd - minuteStart);
        console.log(totalSleep);
        }
        else if(hourEnd < hourStart && (minuteEnd == minuteStart)){
            totalSleep = 12 + hourEnd;
            console.log(totalSleep);
        }
        else if(hourEnd > hourStart && (minuteEnd == minuteStart)){
            totalSleep = 12 + (hourEnd- hourStart);
            console.log(totalSleep);
        }
        else if(hourEnd > hourStart && (minuteEnd > minuteStart)){
            totalSleep = 12 + (hourStart - hourEnd) + (minuteEnd - minuteStart);
            console.log(totalSleep);
            }
        else if((hourEnd > hourStart && hourEnd <12) && (minuteEnd < minuteStart)){
        totalSleep = ((12 + (hourEnd - hourStart) - 1)) + (0.6 - (minuteStart - minuteEnd));
        console.log(totalSleep);
                }
        else if(hourEnd > hourStart && (minuteEnd == minuteStart)){
        totalSleep = 12 +(hourEnd - hourStart);
        console.log(totalSleep)
        }
        else if(hourEnd < hourStart && (minuteEnd == minuteStart)){
            totalSleep = 12 - (hourStart - hourEnd);
            console.log(totalSleep)
        }
        else if(hourEnd == hourStart && (minuteEnd == minuteStart)){
            totalSleep = 12;
            console.log(totalSleep)
        }
        }
        else if (radioButtonStart[0].checked == false && radioButtonEnd[0].checked == false){
        
        if((hourStart == 12 && hourEnd <12) && minuteEnd > minuteStart ){
        totalSleep = hourEnd + (minuteEnd - minuteStart);
        console.log(totalSleep)
        }    
        else if((hourStart == 12 && hourEnd <12) && minuteEnd < minuteStart){
        totalSleep = (hourEnd - 1) + (0.6 - (minuteStart - minuteEnd))
        console.log(totalSleep);
        }
        else if((hourStart == 12 && hourEnd != 12) && minuteEnd == minuteStart ){
            totalSleep = hourEnd;
            console.log(totalSleep)
            }    
            else if((hourStart < 12 && hourEnd <12) && minuteEnd == minuteStart){
            totalSleep = hourEnd - hourStart;
            console.log(totalSleep);
            }    
            else if((hourStart < hourEnd) && minuteEnd > minuteStart){
            totalSleep = (hourEnd - hourStart) + (minuteEnd - minuteStart);
            console.log(totalSleep);
        }
        else if((hourStart < hourEnd) && minuteEnd < minuteStart){
            totalSleep = ((hourEnd - hourStart) - 1) + (0.6 - (minuteStart - minuteEnd))
            console.log(totalSleep);
        }
    
    }
    else if (radioButtonStart[0].checked == false && radioButtonEnd[0].checked == true){

    if( (hourStart == 12 && hourEnd < 12) && (minuteEnd < minuteStart)){
        totalSleep = (11 + (hourEnd)) + (0.6 - (minuteStart - minuteEnd));
        console.log(totalSleep);
    }
else if((hourStart == 12 && hourEnd < 12)  && (minuteEnd > minuteStart)){
    totalSleep = (12 + (hourEnd)) + (minuteEnd - minuteStart);
    console.log(totalSleep);
}
else if((hourStart < 12 && hourEnd == 12)  && (minuteEnd > minuteStart)){
    totalSleep = (hourEnd - hourStart) + (minuteEnd - minuteStart);
    console.log(totalSleep);
}
else if((hourStart < 12 && hourEnd == 12)  && (minuteEnd < minuteStart)){
    totalSleep = ((hourEnd - hourStart) - 1) + (0.6 - (minuteStart - minuteEnd));
    console.log(totalSleep);
}
else if((hourStart < hourEnd && hourEnd != 12)  && (minuteEnd < minuteStart)){
    totalSleep = ((hourEnd - hourStart) + 11) + (0.6 - (minuteStart - minuteEnd));
    console.log(totalSleep);
}
else if((hourStart < hourEnd && hourEnd != 12)  && (minuteEnd > minuteStart)){
    totalSleep = ((hourEnd - hourStart) + 12) + (minuteEnd - minuteStart);
    console.log(totalSleep);
}
else if((hourStart > hourEnd && hourEnd != 12)  && (minuteEnd > minuteStart)){
    totalSleep = (12 - (hourStart-hourEnd) ) + (minuteEnd - minuteStart);
    console.log(totalSleep);
}
else if((hourStart > hourEnd && hourEnd != 12)  && (minuteEnd < minuteStart)){
    totalSleep = ((12 - (hourStart-hourEnd)) - 1 ) + (0.6 - (minuteStart - minuteEnd));
    console.log(totalSleep);
}
else if((hourStart == hourEnd)  && (minuteEnd < minuteStart)){
    totalSleep = minuteStart - minuteEnd;
    console.log(totalSleep);
}
else if((hourStart == hourEnd)  && (minuteEnd > minuteStart)){
    totalSleep = 11 + minuteStart - minuteEnd;
    console.log(totalSleep);
}
else if((hourStart == hourEnd)  && (minuteEnd > minuteStart)){
    totalSleep = 11 + minuteStart - minuteEnd;
    console.log(totalSleep);
}
else if((hourStart < hourEnd)  && (minuteEnd == minuteStart)){
    totalSleep = hourEnd - hourStart;
    console.log(totalSleep);
}
else if((hourStart > hourEnd && hourStart!=12)  && (minuteEnd == minuteStart)){
    totalSleep = (12 - hourStart) + hourEnd;
    console.log(totalSleep);    
}
else if((hourStart == 12 &  hourEnd < 12)  && (minuteEnd == minuteStart)){
    totalSleep = 24 - (hourStart - hourEnd);
    console.log(totalSleep);
}
}
if(radioButtonStart[0].checked == true){
    radiostart = "true";
    }
    else{ 
        radiostart = "false";
    
    }
if(radioButtonEnd[0].checked == true){
radioend = "true";
}
else{ 
radioend = "false";

}
arr.push(radiostart)
arr.push(radioend);
arr.push(totalSleep);
arr.push(hourStart);
arr.push(minuteStart);
arr.push(hourEnd);
arr.push(minuteEnd);

console.log(arr);
return arr;
    }
    
SleepTime = (classindex,calendarStart, radioname1,radioname2 ) => {

    let radioButtonStartClass = document.getElementsByName(radioname1);
    radioButtonStartClass = [...radioButtonStartClass];
    
    let radioButtonEndClass = document.getElementsByName(radioname2);
    radioButtonEndClass = [...radioButtonEndClass];
    
    
    let className1 =  document.getElementsByClassName(calendarStart);
    className1 = [...className1];
    
    
    let className2 = className1[classindex].getElementsByClassName("calendar__input");
    className2 = [...className2];
    
    

    let arr = [className2, radioButtonStartClass, radioButtonEndClass];
    
    return date(...arr);
}

button = (btnName, classindex,calendarStart, radioname1, radioname2, calendarText) => {
    let button = document.getElementsByName(btnName)
    button = [...button];
    button[0].addEventListener("click", (callback) => {
    //get button
let array1 = yea();
//get array of elements that are clicked

let arr = SleepTime(classindex, calendarStart, radioname1, radioname2);
// get array of the scheduled times;
arr = [...arr];


if(calendarText == "other"){
let name = document.getElementsByName("userinput");
calendarText = name[0].value;
}


calculate(arr, array1,calendarText);
content = document.getElementsByClassName("testing");
arr[2] = arr[2].toFixed(2);
let string = arr[2].toString();
string = string.split(".");
arr[2] = arr[2].split(".");


content[classindex].textContent = `you have spent a total of ${string[0]} hours and ${string[1]} minutes on each selected day`;
console.log(content);



})}



let stride = document.getElementsByName("userinput");
console.log(stride[0].value);

button("sleep-schedule",0, "calendar__time-start", "sleep-start", "sleep-end", "sleep");
button("work-schedule",1, "calendar__time-start", "work-start", "work-end", "work");
button("other-schedule",2, "calendar__time-start", "other-start", "other-end", "other");
//parameters-- button name, classname index// calendar time start within the index,  



function yea(){
let a = document.getElementsByClassName("calendar-date");
let b = document.getElementsByClassName("weekselection");
b = [...b];

let array1 = [];
for(let i = 0; i<b.length; i++){

if(b[i].checked == true){
console.log("true");
array1.push(a[i]);
}
else{

    console.log("false");
}

}
return array1;
}



calculate =(arr,array1,calendarText = "hello") => {


    array1.forEach(el => {
    
    el = el.getElementsByClassName("calendar-date__input-text");
    let startTime = arr[3];
    
    let startMinute = arr[4];
    let totalHours = arr[2];
    let endTime = arr[5];
    let endMinute = arr[6];
    
  


    if(arr[3] == 12 && arr[0] == "false"){
        startTime = 0;
    }
    else if(startTime < 12 && arr[0] == "true"){
    startTime = 12 + startTime;
    }
    else if(arr[1] == "true" && endTime < 12){
        endTime = endTime + 12;
    }

    if(startMinute > endMinute){

        totalHours = arr[2] + 1;
    }
    console.log(totalHours);


    for(let i = 0; i<=totalHours;i++) {

        if(startTime == 24 ){
            startTime = 0;
        } 
        el[startTime].style.cssText = `background-color:#F8F8F8; color:#2f9bff; opacity:1;`;
        el[startTime].textContent = calendarText;
            startTime++;
        }

    
    })
}
    
reset = (classindex,calendarStart, radioname1, radioname2) => {

let rest = document.getElementsByName("reset");
console.log(rest);

rest[classindex].addEventListener("click", () => {
    
    //get array of elements that are clicked
    let array1 = yea();

    let arr = SleepTime(classindex, calendarStart, radioname1, radioname2);
    // get array of the scheduled times;
    arr = [...arr];

    array1.forEach(el => {
        el = el.getElementsByClassName("calendar-date__input-text");
        let startTime = arr[3];
        let startMinute = arr[4];
        let endTime = arr[5];
        let endMinute = arr[6];
        let totalHours = arr[2]
        content[classindex].textContent = ``;
        if(arr[3] == 12 && arr[0] == "false"){
            startTime = 0;
        }
        else if(startTime < 12 && arr[0] == "true"){
        startTime = 12 + startTime;
        }   
        if(startMinute > endMinute){

            totalHours = arr[2] + 1;
        }
        for(let i = 0; i<=totalHours;i++) {
            
            if(startTime == 24 ){
                startTime = 0;
            } 
            el[startTime].style.cssText = `content:none;`;
                startTime++;
            }
        
        } )
    });
}
reset(0,"calendar__time-start", "sleep-start","sleep-end")
reset(1 ,"calendar__time-start", "work-start", "work-end");
reset(2 ,"calendar__time-start", "other-start", "other-end");


clearCalendar = () => {

let clearAll = document.getElementsByName("clear-all");

clearAll[0].addEventListener("click", () => {


let all = document.getElementsByClassName("calendar-date__input-text");

let target = yea();

target = [...target];

target.forEach( (el) => {

el = el.getElementsByClassName("calendar-date__input-text");

for(let i = 0;  i<el.length; i++){


el[i].style.cssText = "content:none;";

}


})

})
}
clearCalendar();

//calendar__time-start
 //sleep-start
        //sleep-end
        //calendar__input
        //
/*
getDay = (any, calculation()) => {

    let hourSlept = calculation();
    console.log(hourSlept);
let aaa = document.getElementsByClassName("calendar-date-monday");
console.log(aaa);
}
getDay();
*/