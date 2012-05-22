// JavaScript Document
var toDo = document.getElementById('to-do');
var addBtn = document.getElementById('add-btn');
var list = document.getElementById('list');

addBtn.addEventListener('click', function (ev) {
	//alert('I was clicked');

if (toDo.value !== '') { var newLi = document.createElement('li'); newLi.innerHTML = toDo.value; list.appendChild(newLi);}
toDo.value = '';
}, false);

list.addEventListener('click', function (ev) {
//alert('I was clicked');
if(ev.target.className == 'strike-out') {ev.target.className = '';}
else {ev.target.className = 'strike-out';}
}, false);