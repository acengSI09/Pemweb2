
function login() {

var username = document.getElementById("username").value; 
var password = document.getElementById("password").value;

if (username == "admin" && password == "admin") { 
    alert("Selamat Anda Berhasil login");
    window.location = "../admin_backend/index2.html" 
    return false;
} else if (username == "" || password === "") {
    alert ("username & password tidak boleh kosong") 
    return false;
 }
 else {
    alert('Username & password yang anda masukan salah')
 }
}
