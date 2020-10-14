const flashdata = $('.flash-data').data('flashdata')

if (flashdata) {
	Swal.fire({
		icon: 'success',
		title: 'Fakultas Teknik ',
		text: `Data Berhasil ${flashdata}`,
		type: 'success',
		position: 'top',
		width: 500,
		heightAuto: false,
		showConfirmButton: false,
		timer: 2000,
	})
}


$('.tombol-hapus').on('click', function(e) {
	
	e.preventDefault()

	const href = $(this).attr('href')

	Swal.fire({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus data !',
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href
		}
	})

})
