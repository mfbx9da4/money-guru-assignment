jQuery(document).ready(function($) {
	// show regster form	
	$('#editUserData').on('click', function(event) {
		event.preventDefault();
		$('#userDataEditForm').show()
	});

});

// var Utils = {};

// Utils.serialize = function(obj) {
// 	var str = [],
// 		key, value;
// 	for (key in obj) {
// 		if (obj.hasOwnProperty(key)) {
// 			value = obj[key];

// 			str.push(
// 				encodeURIComponent(key) + "=" +
// 				encodeURIComponent(value)
// 			);
// 		}
// 	}

// 	// 	return str.join("&");
	// };

	// Utils.request = function(type, resource, data, callback, body) {
	// 	Utils.auth(function(token) {
	// 		data.access_token = Utils.cookie.get("access_token");

	// 		var async = data.async || false;
	// 		if (data.async) { delete data.async; }

	// 		$.ajax({
	// 			url: "https://www.googleapis.com/youtube/v3/" + resource + "?" + Utils.serialize(data),
	// 			type: type,
	// 			async: async,
	// 			success: callback,
	// 			data: body,
	// 			contentType: 'application/json'
	// 		});
	// 	});
	// };