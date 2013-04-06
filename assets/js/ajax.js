// JavaScript Document
$(document).ready(function() {
	$('#preloader').hide();
	var base_url = "http://roberts.app";
	var url = base_url + "/home/ourworks_filtered";
	//var Keyword_length = 2;
	$('#ourworks_filter').change(function() {
		//alert('sdsdsd');
		$('#preloader').show();

		var array = [];
		//$('input:checkbox:checked').each(function() {

		//array.push($(this).val());

		//});
		/* Send the data using post */
		//alert('show');
		array.push($('#ourworks_filter').val());
		var reload = $('#ourworks_filter').val();
		if (reload != 'All') {
			var posting = $.post(url, {
				filter : array

			});
			/* Put the results in a div */
			posting.done(function(data) {
				//var content = $(data).find('#content');
				$("#ajax_ourworks").empty().append(data);
			});
			posting.fail(function() {
				alert("Some error occured please try again");
			});
		} else {

			location.reload();

		}

		//alert('hide')
		$('#preloader').fadeOut(2000);
	});
	
});

