//ambilelementyangibutuhkan
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

//tambah kan event ketika di tulis
keyword.addEventListener("keyup", function () {
    //object ajax
    var xhr = new XMLHttpRequest();

    //cek kesiapan
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }
    //eksekusi ajax
    xhr.open("GET", "ajax/mahasiswa.php?keyword=" + keyword.value, true);
    xhr.send();
});