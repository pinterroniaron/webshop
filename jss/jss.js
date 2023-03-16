var cars = [18, 45, 141];
cars.push(145);
var all = cars[0] + cars[3];
alert("I am going to count up from " + all + " to 300");
for (; all <= 300; all++) {
  document.write(all + "<br />");
}
alert(all - 1);

