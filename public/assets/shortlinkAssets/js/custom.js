//flash data
const flashData = $(' .flash-data').data('flashdata');

if (flashData) {
    Swal.fire ({
        title : 'Data Link ',
        text : 'Berhasil ' + flashData,
        icon : 'success',
        background: '#005045',
        color: '#fff'

    });
}

//tombol-hapus
$(' .tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "data link akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        background: '#005045',
        color: '#fff',
      }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
      })
     
});

//tombol-ubah
$(' .tombol-ubah').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "data link akan diubah",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ubah',
        background: '#005045',
        color: '#fff'
      }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
      })
     
});


// // disable right click
// document.addEventListener('contextmenu', event => event.preventDefault());

// // disable F12 
// document.onkeypress = function (event) {
//     event = (event || window.event);
//         if (event.keyCode == 123) {
//     return false;
//         }
//     }
    
// document.onmousedown = function (event) {
//     event = (event || window.event);
//         if (event.keyCode == 123) {
//     return false;
//         }
//     }
    
// document.onkeydown = function (event) {
//     event = (event || window.event);
//         if (event.keyCode == 123) {
//     return false;
//         }
//     }

// // disable ctrl+c, ctrl+u
// jQuery(document).ready(function($){
//     $(document).keydown(function(event) {
//     var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();
//         if (event.ctrlKey && (pressedKey == "c" || pressedKey == "u")) {
//         return false;
//         }
//     });
// });


