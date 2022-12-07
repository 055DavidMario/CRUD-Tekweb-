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

const name = document.getElementById("tempat");
const lokasi = document.getElementById("lokasi");
const harga = document.getElementById("harga");
const waktu = document.getElementById("waktu");
const transportasi = document.getElementById("transportasi");

wisata1.addEventListener("click", function(){
    const tempat = "London";
    const lokasi = "England";
    const harga = "20,000,000";
    const waktu = "13 jam 30 menit";
    const transportasi = "Pesawat";
    addToCart(tempat, lokasi, harga, waktu, transportasi);
});

wisata4.addEventListener("click", function(){
    const tempat = "Candi Borobudur";
    const lokasi = "Yogyakarta";
    const harga = "300,000";
    const waktu = "8 jam 55 menit";
    const transportasi = "Kereta Api";
    addToCart(tempat, lokasi, harga, waktu, transportasi);
});

wisata7.addEventListener("click", function(){
    const tempat = "Kebun Raya Bogor";
    const lokasi = "Bogor";
    const harga = "18,000";
    const waktu = "2 jam 15 menit";
    const transportasi = "Bus";
    addToCart(tempat, lokasi, harga, waktu, transportasi);
});

function addToCart(tempat, lokasi, harga, waktu, transport){
    name.innerHTML = tempat;
    lokasi.innerHTML = lokasi;
    harga.innerHTML = "Rp" + harga;
    waktu.innerHTML = waktu;
    transport.innerHTML = transportasi;
}