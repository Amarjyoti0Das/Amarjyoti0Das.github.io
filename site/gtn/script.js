var v = Math.floor(Math.random() * 10 + 1);

function f() {
  var a = document.getElementById("x").value;
  var z;
  if (a <= 0) {
    z = "Use a number between 1 to 10";
  } else if (a > 10) {
    z = "Use a number between 1 to 10";
  } else if (a < v) {
    z = "Guess a Higher Number";
  } else if (a > v) {
    z = "Guess a Lower Number";
  } else if (a == v) {
    z = "You Win!";
  } else {
    z = "unexpected error try again";
  }
  document.getElementById("o").innerHTML = z;
}
