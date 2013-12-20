jQuery(document).ready(function($) {
	// show regster form	
	$('#editUserData').on('click', function(event) {
		event.preventDefault();
		$('#userDataEditForm').show()
	});

	$('.details').on('click', function() {
		var url = "http://dev.moneyguru.com.br/tool/health-insurance/health-plan";
		$.ajax({
			type: "GET",
			url: url,
			data: serialize({
				'userAge': $('#idade').val(),
				'atuacao': $('')
			}),
			error: function(data) {
				console.log(data);
			},
			success: function(data) {
				console.log(data)
				}
			}

		});
	})

	var serialize = function(obj) {
		var str = [], key, value;
		for(key in obj) {
			if (obj.hasOwnProperty(key)) {
				value = obj[key];

				str.push(
					encodeURIComponent(key) + "=" +
					encodeURIComponent(value)
				);
			}
		}

		return str.join("&");
	};
});