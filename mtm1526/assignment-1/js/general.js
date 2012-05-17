// JavaScript Document

var letter = '';

while(!letter) {
	letter=prompt('Enter a letter.');
}

console.log(letter);

if (letter) {

	for (var i=0; i<10; i++){
		for (var j=0; j<i; j++) {
			document.write(letter);
			}
		document.write('<br>');
	}
}



