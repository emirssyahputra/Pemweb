function tombol() {
    const a = document.getElementById('judul'); 
    a.innerHTML = 'Halooooo';

    const b = document.getElementById('bawahjudul');
    b.innerHTML = 'Perkenalkan :)';

    const elemenH3 = document.createElement('h3');
    const teksElemenH3 = document.createTextNode('Halo, nama saya Emirssyah Putra dengan NIM 120140169, saya kelas pemrograman web RB, ini tugas ketiga saya :)'); // Deklarasi Variabel untuk mengisi teks

    elemenH3.appendChild(teksElemenH3); 

    const cetak = document.getElementById('body');

    cetak.appendChild(elemenH3);
}
