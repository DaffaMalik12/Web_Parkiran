// Daftar kursi
var seats = [];

// Fungsi untuk mengatur status kursi saat diklik
function toggleSeatStatus(event) {
  var seat = event.target;
  if (seat.classList.contains('selected')) {
    seat.classList.remove('selected');
  } else {
    seat.classList.add('selected');
  }
}

// Fungsi untuk mendapatkan kursi yang dipilih
function getSelectedSeats() {
  var selectedSeats = [];
  var seatElements = document.querySelectorAll('.seat.selected');
  seatElements.forEach(function(seat) {
    selectedSeats.push(seat.getAttribute('data-seat'));
  });
  return selectedSeats;
}

// Fungsi untuk memproses pemesanan
function bookSeats() {
  var selectedSeats = getSelectedSeats();
  if (selectedSeats.length === 0) {
    alert('Pilih Tempat Parkirmu.');
  }
  else if (selectedSeats.length > 1) {
    alert('Anda Memilih Lebih dari Satu Tempat.');
  }
  else {
    // Kirim data kursi yang dipilih ke server menggunakan AJAX atau formulir
    // Implementasikan sesuai kebutuhan Anda
    console.log('Kursi yang dipilih:', selectedSeats);
  }
}

// Fungsi untuk menampilkan kursi saat halaman dimuat
function displaySeats() {
  var seatsContainer = document.querySelector('.seats-container');
  seatsContainer.innerHTML = '';

  for (var i = 1; i <= 112; i++) {
    var seat = document.createElement('div');
    seat.className = 'seat';
    seat.setAttribute('data-seat', i);
    seat.addEventListener('click', toggleSeatStatus);
    seatsContainer.appendChild(seat);
    seats.push(i);
  }
}

// Panggil fungsi displaySeats saat halaman dimuat
window.onload = function() {
  displaySeats();
  var btnBook = document.getElementById('btn-book');
  btnBook.addEventListener('click', bookSeats);
};
