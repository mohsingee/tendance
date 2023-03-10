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