// validation form login
const inputUsername = document.querySelector(".input-login-username");
const inputPassword = document.querySelector(".input-login-password");
const btnLogin = document.querySelector(".login__signInButton");

// validation form login

btnLogin.addEventListener("click", (e) => {
  e.preventDefault();
  if (inputUsername.value === "" || inputPassword.value === "") {
    alert("Vui lòng không để trống");
  } else {
    const user = JSON.parse(localStorage.getItem(inputUsername.value));
    if (!user) {
      alert("Bạn đã nhập sai tên người dùng, vui lòng nhập lại");
    } else if (user.password === inputPassword.value) {
      alert("Đăng nhập thành công");
      window.location.href = "trangchu.html";
    } else {
      alert("Bạn đã nhập sai mật khẩu, hãy nhập lại");
    }
  }
});
