// Name: Ke Zhang; Net ID: kz238
var index = 0;
var piclist = ["fun1.png", "fun2.png", "fun3.png", "fun4.png", "fun5.png"];

// function to display the next picture in the array
function pic_next() {
    "use strict";
    // if the currently displayed picture is NOT the last one
    
    if (index < piclist.length - 1) {
        index += 1;// change the index to the next one
    } else {
        //if the currently displayed picture is the last one
        index = 0; // change the index to the the first picture
    }
    var hanfu_pic = document.getElementById('testimonials');
    hanfu_pic.src = 'images/' + piclist[index];
}

// function to display the previous picture in the array
function pic_previous() {
    "use strict";
    // if the currently displayed picture is NOT the first one
    if (index > 0) {
        index -= 1; // change the index to the previous one
    } else {
        // if the currently displayed picture is the first one
        index = piclist.length - 1; // change the index to the last picture
    }
    var hanfu_pic = document.getElementById('testimonials');
    hanfu_pic.src = 'images/' + piclist[index];

}

window.onload = function get_date() {
    "use strict";
    // get month name text into array
    var month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
    // get date and text of each component
        today_full_date = new Date(),
        month_name = month[today_full_date.getMonth()],
        today_date = today_full_date.getDate(),
        year = today_full_date.getFullYear(),
    // organize information
        new_span = document.createElement('span'),
        new_text = document.createTextNode(today_date + ' ' + month_name + ' ' + year),
        position = document.getElementsByTagName('footer')[0];
    // display the date on the footer
    new_span.appendChild(new_text);
    position.appendChild(new_span);
};