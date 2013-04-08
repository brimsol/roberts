// JavaScript Document
$(document).ready(function() {
	$('#preloader').hide();
	var base_url = "http://roberts.app";
	var url = base_url + "/home/ourworks_filtered";
	var url_products = base_url + "/home/products_view_ajax";
	var url_product_list =  base_url + "/products";
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
	$('#products_filter').change(function() {
		//alert('sdsdsd');
		$('#preloader').show();

		//var array = [];
		//$('input:checkbox:checked').each(function() {

		//array.push($(this).val());

		//});
		/* Send the data using post */
		//alert('show');
		var array = $('#products_filter').val();
		var reload = $('#products_filter').val();
		if (reload != 'All') {
			var posting = $.post(url_products, {
				filter : array

			});
			/* Put the results in a div */
			posting.done(function(data) {
				//var content = $(data).find('#content');
				$("#product_view").empty().append(data);
			});
			posting.fail(function() {
				alert("Some error occured please try again");
			});
		} else {

			window.location =url_product_list;

		}

		//alert('hide')
		$('#preloader').fadeOut(2000);
	});
	
});

