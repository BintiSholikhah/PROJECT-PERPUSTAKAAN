
//validasi nama
function validasiNama(input) {
    // Dapatkan nilai input nama
    var nama = input.value;

    // Gunakan ekspresi reguler untuk memeriksa apakah hanya terdiri dari huruf
    var validasiNamaRegex = /^[a-zA-Z\s]*$/;

    // Periksa apakah nama valid
    if (validasiNamaRegex.test(nama)) {
        // Nama valid
        input.setCustomValidity('');
    } else {
        // Nama tidak valid, atur pesan kustom untuk ditampilkan
        input.setCustomValidity('Nama hanya boleh mengandung huruf dan spasi.');
    }
}

function validasiNim(input) {
    // Dapatkan nilai input nama
    var nim = input.value;

    // Gunakan ekspresi reguler untuk memeriksa apakah hanya terdiri dari huruf
    var validasiNimRegex = /^\d{8,10}$/;

    // Periksa apakah nama valid
    if (validasiNimRegex.test(nim)) {
        // Nama valid
        input.setCustomValidity('');
    } else {
        // Nama tidak valid, atur pesan kustom untuk ditampilkan
        input.setCustomValidity('NIM harus berupa angka dengan panjang 8-10 digit.');
    }
}


function validateKategori() {
    var selectElement = document.getElementById('kategori');
    var selectedValue = selectElement.value;
    // Hapus pesan kesalahan sebelumnya
    selectElement.setCustomValidity('');
    // Validasi khusus (misalnya, cek apakah opsi yang dipilih bukan default)
    if (selectedValue === '') {
        selectElement.setCustomValidity('Pilih kategori sebelum mengirimkan formulir.');
    }
}
