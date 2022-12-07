import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
const wisata1 = document.getElementById("wisata1");
const wisata2 = document.getElementById("wisata2");
const wisata3 = document.getElementById("wisata3");

const wisata4 = document.getElementById("wisata4");
const wisata5 = document.getElementById("wisata5");
const wisata6 = document.getElementById("wisata6");

const wisata7 = document.getElementById("wisata7");
const wisata8 = document.getElementById("wisata8");
const wisata9 = document.getElementById("wisata9");

const name = document.getElementById("Tempat");
const lokasi = document.getElementById("Lokasi");
const harga = document.getElementById("Harga");
const waktu = document.getElementById("Waktu");
const transportasi = document.getElementById("Transport");

wisata1.addEventListener("click", function(){
    const Tempat = "London";
    const Lokasi = "England";
    const Harga = "20,000,000";
    const Waktu = "13 jam 30 menit";
    const Transport = "Pesawat";
    addToCart(Tempat, Lokasi, Harga, Waktu, Transport);
});

wisata4.addEventListener("click", function(){
    const Tempat = "Candi Borobudur";
    const Lokasi = "Yogyakarta";
    const Harga = "300,000";
    const Waktu = "8 jam 55 menit";
    const Transport = "Kereta Api";
    addToCart(Tempat, Lokasi, Harga, Waktu, Transport);
});

wisata7.addEventListener("click", function(){
    const Tempat = "Kebun Raya Bogor";
    const Lokasi = "Bogor";
    const Harga = "18,000";
    const Waktu = "2 jam 15 menit";
    const Transport = "Bus";
    addToCart(Tempat, Lokasi, Harga, Waktu, Transport);
});

function addToCart(Tempat, Lokasi, Harga, Waktu, Transport){
    name.innerHTML = Tempat;
    lokasi.innerHTML = Lokasi;
    harga.innerHTML = "Rp" + Harga;
    waktu.innerHTML = Waktu;
    transportasi.innerHTML = Transport;
}