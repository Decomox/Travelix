function toggleForm() {
    const serviceType = document.getElementById('service_type').value;
    document.getElementById('travelForm').style.display = serviceType === 'travel' ? 'flex' : 'none';
    document.getElementById('rentalForm').style.display = serviceType === 'rental' ? 'flex' : 'none';
}

function sendToWhatsApp() {
    // Ambil nilai dari form
    var namauser = document.getElementById('namauser').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    // Nomor WhatsApp yang dituju (tanpa tanda +)
    var whatsappNumber = '6285155217933'; // Ganti dengan nomor WhatsApp yang diinginkan


    // URL API WhatsApp
    var whatsappURL = "https://wa.me/" + whatsappNumber + "?text=" +
        "*Dihubungi via Website - Republic RentCar*" + "%0a" +
        "---------------------------------" + "%0a" +
        "*Nama*: " + namauser + "%0a" +
        "*Email*: " + email + "%0a" +
        "*Subjek*: " + subject + "%0a" +
        "*Pesan*: " + message + "%0a" +
        "---------------------------------" + "%0a" +
        "*Terima kasih!*";

    // Redirect ke WhatsApp
    window.open(whatsappURL, '_blank');
}

function filterVehicles() {
    const searchInput = document.getElementById('search').value.toLowerCase();
    const jenisMobil = document.getElementById('jenisMobil').value;
    const hargaRange = document.getElementById('harga').value;

    const vehicles = document.querySelectorAll('.card-kendaraan');

    vehicles.forEach(vehicle => {
        const model = vehicle.querySelector('h3').innerText.toLowerCase();
        const jenis = vehicle.getAttribute('data-jenis');
        const harga = parseInt(vehicle.getAttribute('data-harga'));

        // Filter berdasarkan pencarian model
        const matchesSearch = model.includes(searchInput);
        // Filter berdasarkan jenis mobil
        const matchesJenis = jenisMobil === "" || jenis === jenisMobil;
        // Filter berdasarkan rentang harga
        const matchesHarga = (hargaRange === "" || (harga >= parseInt(hargaRange.split('-')[0]) && harga <= parseInt(hargaRange.split('-')[1])));

        // Tampilkan atau sembunyikan kendaraan
        if (matchesSearch && matchesJenis && matchesHarga) {
            vehicle.style.display = 'block';
        } else {
            vehicle.style.display = 'none';
        }
    });
}


