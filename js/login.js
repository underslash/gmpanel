(function($) {
	$("form.form-signin").validate({
		rules: {
			username: {required: true}, 
			password: {required: true}
		}, 
		errorPlacement: function(error, element) {  
		},
		submitHandler: function(form) {
			$(".form-signin input[type=submit]").attr("disabled", "disabled");
			$.ajax({
			  type: "POST",
			  url: "r.php?action=login",
			  data: "un=" + $("input[name=username]").val() + "&pw=" + $("input[name=password]").val(),
			  dataType: "html",
			  success: function(msg)
			  {
				$(".form-signin input[type=submit]").removeAttr("disabled");
				$("#response").html(msg);
			  },
			 error: function (xhr, ajaxOptions, thrownError) {
				alert("Errore " + xhr.status);
			  }
			});			
		}
	});
}) (jQuery);