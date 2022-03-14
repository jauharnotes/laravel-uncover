const getElement = document.getElementsByTagName("ol");
getElement[0].addEventListener("click", tampilkan);

function tampilkan(event) {
    alert("Cek data mahasiswa " + event.target.innerHTML);
}