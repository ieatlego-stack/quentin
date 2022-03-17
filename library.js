 function change(id, newText) {
    var e = document.getElementById(id);
    if (e === null) {
      console.log("There is no element with an id of " + id);
      return;
    }
    e.innerHTML = newText;
  }

  function add(id, toAdd) {
    var e = document.getElementById(id);
    if (e === null) {
      console.log("There is no element with an id of " + id);
      return;
    }
    e.innerHTML += toAdd;
  }

  function equals(id) {
    var e = document.getElementById(id);
    if (e === null) {
      console.log("There is no element with an id of " + id);
      return;
    }
    var exp = e.innerHTML;
    var ans = eval(exp);
    e.innerHTML = ans;
  }

  function get(id) {
    var e = document.getElementById(id);
    if (e === null) {
      console.log("There is no element with an id of " + id);
      return;
    }
    return e.innerHTML;
  }

  function setCSS(id, property, value) {
    var e = document.getElementById(id);
    if (e === null) {
      console.log("There is no element with an id of " + id);
      return;
    }
    e.style[property] = value;
  }

  function getCSS(id, property) {
    var e = document.getElementById(id);
    if (e === null) {
      console.log("There is no element with an id of " + id);
      return;
    }
    if (!e.style[property]) {
      console.log ("The " + property + " property is not defined for the element with id " + id);
      return;
    }
    return e.style[property];
  }
