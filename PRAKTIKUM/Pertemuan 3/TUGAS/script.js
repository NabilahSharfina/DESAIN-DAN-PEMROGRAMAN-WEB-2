function tampil(){
    alert('Hello World!')
}

let warna = document.getElementById('warna')

warna.addEventListener('change', (event) =>{
    document.body.style.backgroundColor = warna.value
})

let x = window.prompt('Masukkan nama Anda: ')
window.alert('Hello, ' + x + "!")