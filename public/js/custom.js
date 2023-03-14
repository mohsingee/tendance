$("body").on("submit", "#contactSubmission", function (e) {
	e.preventDefault();
	$.ajax({
		type: "post",
		url: "contact-submission",
		data: new FormData(this),
		dataType: "json",
		contentType: false,
		cache: false,
		processData: false,
		success: function (response) {
            $('#contactSubmission')[0].reset();
			if (response.status == "success") {
				Swal.fire({
					position: 'top-end',
					toast: true,
					// showConfirmButton: false,
					timer: 5000,
					icon: 'success',
					text: response.message,
				});
			}
		},
	});
});

$("body").on("submit", "#userRegister", function (e) {
	e.preventDefault();
	$.ajax({
		type: "post",
		url: "user-registration",
		data: new FormData(this),
		dataType: "json",
		contentType: false,
		cache: false,
		processData: false,
		success: function (response) {
            $('#userRegister')[0].reset();
			if (response.status == "success") {
				Swal.fire({
					position: 'top-end',
					toast: true,
					// showConfirmButton: false,
					timer: 5000,
					icon: 'success',
					text: response.message,
				});
			}
		},
	});
});

function addWishlist(id){
	$.ajaxSetup({
		headers: {
			"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
		},
	});
	$.ajax({
		type: "post",
		url: "add-wishlist",
		data: {
			id: id,
		},
		dataType: "json",
		success: function (response) {
			if (response.status == "success") {
				Swal.fire({
					position: 'top-end',
					toast: true,
					timer: 5000,
					icon: 'success',
					text: response.message,
				});
			}
			else{
				Swal.fire({
					position: 'top-end',
					toast: true,
					timer: 5000,
					icon: 'error',
					text: response.message,
				});
			}
		},
	});
}

function showWishlist(){
	$.ajax({
		type: "get",
		url: "show-wishlist",
		dataType: "json",
		success: function (response) {
			$('#wishlistShow').html(response.view);
		},
	});
}

$("body").on("submit", "#orderSubmission", function (e) {
	e.preventDefault();
	$.ajax({
		type: "post",
		url: "order-submit",
		data: new FormData(this),
		dataType: "json",
		contentType: false,
		cache: false,
		processData: false,
		success: function (response) {
            $('#orderSubmission')[0].reset();
			if (response.status == "success") {
				Swal.fire({
					position: 'top-end',
					toast: true,
					// showConfirmButton: false,
					timer: 5000,
					icon: 'success',
					text: response.message,
				});
			}
			else{
				Swal.fire({
					position: 'top-end',
					toast: true,
					timer: 5000,
					icon: 'error',
					text: response.message,
				});
			}
		},
	});
});