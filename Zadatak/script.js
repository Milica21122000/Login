"use strict"



let napomena=document.getElementById("text");
let day=document.getElementById("day");
let month=document.getElementById("month");
let year=document.getElementById("year");
let dayto=document.getElementById("today");
let monthto=document.getElementById("tomonth");
let yearto=document.getElementById("toyear");

function DateValidation(){



if(day.value<=0 || day.value>31){
    day.style="background:red";
    napomena.innerText+="Nevazeci dan ";
}
else if(dayto.value<=0 || dayto.value>31){
    dayto.style="background:red";
    napomena.innerText+="Nevazeci dan ";
}
else if(month.value<=0 || month.value>12){
    month.style="background:red";
    napomena.innerText+="Nevazeci mesec ";
}
else if(monthto.value<=0 || monthto.valueto>12){
    monthto.style="background:red ";
    napomena.innerText+="Nevazeci mesec ";
}
else if(year.value<=0 || year.value>3000){
    year.style="background:red";
    napomena.innerText+="Nevazec godina ";
}
else if(yearto.value<=0 || yearto.valueto>3000){
    yearto.style="background:red";
    napomena.innerText+="Nevazeca godina ";
}
}



