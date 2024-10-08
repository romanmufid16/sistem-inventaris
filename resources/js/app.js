import './bootstrap';

document.querySelector('form').addEventListener('submit', function (event) {
    const modal = document.querySelector('input[name="modal"]').value;
    const harga = document.querySelector('input[name="harga"]').value;

    if (modal < 0 || harga < 0) {
        event.preventDefault(); // Mencegah form dikirim
        alert("Modal dan Harga tidak boleh negatif!");
    }
});
