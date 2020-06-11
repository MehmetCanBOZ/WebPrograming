//function that makes menu appear when the icon is clicked when screen size is smaller
function myFunction() {
    'use strict';
    var x = document.getElementById("navBar");
    if (x.className === "navBar") {
        x.className += " responsive";
    } else {
        x.className = "navBar";
    }
}


//add event listener to logo
var image = document.getElementById("logo");
image.addEventListener('mouseover', swap);
image.addEventListener('mouseout', swapBack);
//swap logo colors when hover
function swap() {
    'use strict';
    image.src = "images/logo2.png";
}
function swapBack() {
    'use strict';
    image.src = "images/logo.png";
}


var instructor1 = document.getElementById("instructor1");
instructor1.addEventListener('mouseover', swap1);
instructor1.addEventListener('mouseout', swapBack1);
function swap1() {
    'use strict';
    instructor1.src = "images/instructors/instructor2.jpg";
}
function swapBack1() {
    'use strict';
    instructor1.src = "images/instructors/instructor2.2.jpg";
}


var instructor2 = document.getElementById("instructor2");
instructor2.addEventListener('mouseover', swap2);
instructor2.addEventListener('mouseout', swapBack2);
function swap2() {
    'use strict';
    instructor2.src = "images/instructors/instructor3.2.jpg";
}
function swapBack2() {
    'use strict';
    instructor2.src = "images/instructors/instructor3.jpg";
}

