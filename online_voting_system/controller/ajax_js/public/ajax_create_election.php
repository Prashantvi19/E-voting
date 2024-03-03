
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/custom.js"></script>
<script src="../../js/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		// $('#get_admin_password').addClass('d-none');
		$('#get_admin_data').removeClass('d-none');
		// console.log('R3EFERER');
	});
	$(document).on('click', '#next', function() {
		$('#get_admin_data').addClass('d-none');
		$('#get_admin_password').removeClass('d-none');
		// $('#get_admin_data').hide();
		// $('#get_admin_data').hide();
		// $('#get_admin_password').removeClass('d-none');
		// $('#get_admin_password').show();
		// console.log('R3EFERER');
		// $.ajax({
		// 	url: 'controller.php',
		//     type: 'POST',  // http method
		//     data: $('form').serialize(),
		//     success: function (data) {
		//     	//alert(data);
		//     	Swal.fire(
		// 		  'Good job!',
		// 		 	data,
		// 		  'success'
		// 		)
		//     	$('form')[0].reset();
		//     },
		//     error: function ( errorMessage) {
		//         alert('Error => '+errorMessage);
		//     }
		// });
	});
</script>