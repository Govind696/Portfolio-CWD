'use strict';


const headings = [
    "Coder",
    "Developer",
    "Freelancer",
    "Blogger",
    "Designer",
    "SEO_Expert"
]

const headingele = document.getElementById("heading");
const headingele2 = document.getElementById("logo");
// console.log(headingele)
let headingindex = 0;
let charindex = 0;

function type() {
    if (headingindex < headings.length) {
        if (charindex < headings[headingindex].length) {
            headingele.innerHTML += headings[headingindex].charAt(charindex);
            charindex++;
            setTimeout(type, 100);
        } else {
            setTimeout(change, 1000);
        }
    }else{
        headingindex = 0;
        setTimeout(type, 1000);
    }
}

function change() {
    if (charindex >= 0) {
        const currentheading = headings[headingindex];
        headingele.innerHTML = currentheading.substring(0, charindex);
        charindex--;
        setTimeout(change, 50);
    } else {
        headingindex++;
        setTimeout(type, 500);
    }
}


type();
