function AddUser() {
  let user = {
    username: document.getElementById("register-username").value,
    birthday: document.getElementById("register-birthday").value,
    email: document.getElementById("register-email").value,
    phone: document.getElementById("register-phone").value,
    password: document.getElementById("register-password").value,
    confirm_password: document.getElementById("register-confirm-password")
      .value,
    gender: document.getElementById("register-form").gender.value,
    score: 0,
  };

  //checking if input exist in register
  if (
    user.username === "" ||
    user.birthday === "" ||
    user.email === "" ||
    user.phone === "" ||
    user.password === "" ||
    user.confirm_password === "" ||
    user.gender === "" ||
    user.score === ""
  ) {
    alert("Please enter details");
  } else {
    //retrieve
    let fetch_username = JSON.parse(localStorage.getItem(user.username));

    if (fetch_username != undefined) {
      alert("Username already exists");
    } else {
      // storing username if it doesnt exist in local storage (user.username serving as primary key)
      //parameters take key and data
      localStorage.setItem(user.username, JSON.stringify(user));
    }
  }
  ValidateEmail()
}

var ValidatePassword = function () {
  if (
    document.getElementById("register-password").value ==
    document.getElementById("register-confirm-password").value
  ) {
    document.getElementById("message").style.color = "green";
    document.getElementById("message").innerHTML = "matching";
    document.getElementById("submit").disabled = false;
  } else {
    document.getElementById("message").style.color = "red";
    document.getElementById("message").innerHTML = "not matching";
    document.getElementById("submit").disabled = true;
  }
};

function ValidateEmail() {
  var mailInput = document.getElementById("register-email").value;
  var mailFormat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if (mailInput.match(mailFormat)) {
    document.getElementById("email-message").style.color = "green";
    document.getElementById("email-message").innerHTML = "Valid email address!";
    return true;
  } else {
    document.getElementById("email-message").style.color = "red";
    document.getElementById("email-message").innerHTML = "You have entered an invalid email address!";
    return false;
  }
}
