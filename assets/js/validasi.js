function validateForm() {
    let u = document.forms["Myform"]["name"].value
    let v = document.forms["Myform"]["email"].value
    let w = document.forms["Myform"]["phone"].value
    let x = document.forms["Myform"]["date"].value
    let y = document.forms["Myform"]["time"].value
    let z = document.forms["Myform"]["people"].value
    let atps = v.indexOf("@")
    let dots = v.lastIndexOf(".")
    let tgl = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/
    let jam = /^([01]?[0-9]|2[0-3]):[0-5][0-9] (AM|PM)$/

    if (u == "" && v == "" && w == "" && x == "" && y == "" && z == ""){
      alert("Anda harus mengisi data dengan lengkap !!");
      return false;
    }
    if (u == ""){
      alert("Nama tidak boleh kosong");
      return false;
    }
    if (atps < 1 || dots < atps+2 || dots+2 >= v.length) {
      alert("Alamat email tidak valid !!");
      return false;
    }
    if (!tgl.test(x)){
      alert("Gunakan format tanggal= dd-mm-yyyy")
      return false;
    }
    if (!jam.test(y)){
      alert("Gunakan format jam= HH:MM AM/PM")
      return false
    }
    if (z == ""){
      alert("Banyaknya orang tidak boleh kosong");
      return false;
    } else {
        form = document.getElementById('my-form');
        form.target='_blank';
        form.action='tampil.php';
        form.submit();
        form.action='https://formspree.io/f/xnqwrjvb';
        form.target='_self';
    }
}
