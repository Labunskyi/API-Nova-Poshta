(function ($) {
$(document).ready(function () {
				var branches = '';
				$.ajax({ type: "GET",
						url: 'http://np.local/index.php',					
						success: function (data) {
							branches = JSON.parse(data);
							$.each(branches, function (index, value) {
								$(".chosen-select").append('<option value="' + value + '">' + value + '</option>');
							}); 
							$(".chosen-select").trigger("chosen:updated");
							$(".chosen-select").chosen();
						}
					
					});
});
})(jQuery);