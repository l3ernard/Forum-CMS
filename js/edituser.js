
var old_element = document.querySelector('#two');

var new_element = document.createElement('span');
new_element.innerHTML = 'Two Edited';

old_element.replaceWith(new_element);
document.getElementsByTagName("H1")[0].setAttribute("class", "democlass");