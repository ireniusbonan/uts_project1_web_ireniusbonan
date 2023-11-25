document.addEventListener("DOMContentLoaded", function () {
  // Mengambil elemen form login
  var loginForm = document.getElementById("loginForm");

  // Memastikan elemen form ditemukan sebelum menambahkan event listener
  if (loginForm) {
    // Menambahkan event listener untuk 'submit' event pada form
    loginForm.addEventListener("submit", function (event) {
      // Mengambil nilai dari field username dan password
      var username = document.getElementById("username").value.trim();
      var password = document.getElementById("password").value.trim();

      // Melakukan validasi sederhana apakah field username atau password kosong
      if (username === "" || password === "") {
        // Menampilkan pesan peringatan jika field username atau password kosong
        alert("Username dan password harus diisi.");
        // Mencegah pengiriman form jika validasi tidak terpenuhi
        event.preventDefault();
      }
    });
  }
});
