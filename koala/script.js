function tim() {
  var h24 = new Date().getHours();
  var m = new Date().getMinutes();
  if (h24 > 12) {
    h12 = h24 - 12;
  } else if (h24 == 0) {
    h12 = 12;
  } else {
    h12 = h24;
  }
  if (h24 < 12) {
    ap = " AM";
  } else {
    ap = " PM";
  }
  if (h12 < 10) {
    hh = "0" + h12;
  } else {
    hh = h12;
  }
  if (m < 10) {
    mm = "0" + m;
  } else {
    mm = m;
  }
  alert("It's " + hh + ":" + mm + ap);
}

function cc() {
  var m = document.getElementById("m");
  var f = document.getElementById("f");
  if (m.checked == true) {
    g = " Mr.";
  } else if (f.checked == true) {
    g = " Mrs.";
  } else {
    g = "";
  }
}

function log() {
  var un = document.getElementById("name").value;
  if (un == "") {
    n = "!";
  } else {
    n = " " + un + "!";
  }
  if (confirm("Hey" + g + n + "\n" + "Press OK to know more about Koala🐨")) {
    window.open("https://en.wikipedia.org/wiki/Koala");
  } else {
    alert("Bye" + g + n);
  }
}
