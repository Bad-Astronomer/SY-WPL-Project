function validateForm(){
  var username = document.getElementById("usrnm").value;
  var password = document.getElementById("pwd").value;

  const regUsrNm = /^\w{6,}$/g;
  const regPwd = /^\w{8,}$/g;

  if (!regUsrNm.test(username)) {
    alert("Enter a username with atleast 6 characters");
    return false;
  }

  if (!regPwd.test(password)){
    alert("Enter a password with atleast 6 characters");
    return false;
  }

  return true;
}

const sub_btn = document.getElementById
