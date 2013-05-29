// JavaScript Document
$(document).ready(function() {
	$('#preloader').hide();
	var base_url = "http://roberts.app";
	var url = base_url + "/ourwork/view_main";
	var url_products = base_url + "/home/products_view_ajax";
	var url_product_list = base_url + "/products";
	var url_ourworks = base_url + "/ourworks";
	var url_work_filter = base_url + "/ourwork/filter";

	
	//var Keyword_length = 2;
	$('#ourworks_filter').change(function() {
		//alert('sdsdsd');
		$('#preloader').show();

		//$('input:checkbox:checked').each(function() {

		//array.push($(this).val());

		//});
		/* Send the data using post */
		//alert('show');
		var id = $('#ourworks_filter').val();
		var reload = $('#ourworks_filter').val();
		if (reload != 'All') {
			var posting = $.post(url, {
				id : id

			});
			/* Put the results in a div */
			posting.done(function(data) {
				//var content = $(data).find('#content');
				$("#ajax_ourworks").empty().append(data);

				//---------------------------------------------------
				$('.accordion-header').toggleClass('inactive-header');

				//Set The Accordion Content Width
				var contentwidth = $('.accordion-header').width();

				//Open The First Accordion Section When Page Loads
				$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
				$('.accordion-content').first().slideDown().toggleClass('open-content');

				// The Accordion Effect
				$('.accordion-header').click(function() {
					if ($(this).is('.inactive-header')) {
						$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
						$(this).toggleClass('active-header').toggleClass('inactive-header');
						$(this).next().slideToggle().toggleClass('open-content');
					} else {
						$(this).toggleClass('active-header').toggleClass('inactive-header');
						$(this).next().slideToggle().toggleClass('open-content');
			
					}
				});

				//return false;
 //--------------------------------------------------------------------------------------
 
 
 $('.accordion-header2').toggleClass('inactive-header2');
	
	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header2').width();
	
	//Open The First Accordion Section When Page Loads
	//$('.accordion-header2').first().toggleClass('active-header2').toggleClass('inactive-header2');
	//$('.accordion-content2').first().slideDown().toggleClass('open-content');
	
	// The Accordion Effect
	$('.accordion-header2').click(function () {
		if($(this).is('.inactive-header2')) {
			$('.active-header2').toggleClass('active-header2').toggleClass('inactive-header2').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header2').toggleClass('inactive-header2');
			$(this).next().slideToggle().toggleClass('open-content');
		}
		
		else {
			$(this).toggleClass('active-header2').toggleClass('inactive-header2');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});
	
	return false;
 
 
 
 
 
 
 //---------------------------------------------------------------------------------------------
			});
			posting.fail(function() {
				alert("Some error occured please try again");
			});
		} else {

				window.location = url_ourworks;

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
		var name = $('#products_filter option:selected').text();
		//$("ht").empty().append(name);
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

			window.location = url_product_list;

		}

		//alert('hide')
		$('#preloader').fadeOut(2000);
	});
	
//----------------------------------------------------------------------------	
	
	$('.sub_cat_a').live("click",(function() {
		var sub_cat_a = $(this).attr('id');
             $('#preloader').show(); 
			var posting = $.post(url_work_filter, {
				sub_cat_a : sub_cat_a,
				db_field : 'sub_category_a'

			});
			/* Put the results in a div */
			posting.done(function(data) {
				//var content = $(data).find('#content');
				$("#ajax_ourworks_filter").empty().append(data);
			});
			posting.fail(function() {
				alert("Some error occured please try again");
			});
		
		$('#preloader').fadeOut(2000);
		
	}));
	
	$('.sub_cat_b').live("click",(function() {
		var sub_cat_a = $(this).attr('id');
              $('#preloader').show();
			var posting = $.post(url_work_filter, {
				sub_cat_a : sub_cat_a,
				db_field : 'sub_category_b'

			});
			/* Put the results in a div */
			posting.done(function(data) {
				//var content = $(data).find('#content');
				$("#ajax_ourworks_filter").empty().append(data);
			});
			posting.fail(function() {
				alert("Some error occured please try again");
			});
		
		$('#preloader').fadeOut(2000);
		
	}));
	$('.sub_cat_c').live("click",(function() {
		var sub_cat_a = $(this).attr('id');
              $('#preloader').show(); 
			var posting = $.post(url_work_filter, {
				sub_cat_a : sub_cat_a,
				db_field : 'sub_category_c'

			});
			/* Put the results in a div */
			posting.done(function(data) {
				//var content = $(data).find('#content');
				$("#ajax_ourworks_filter").empty().append(data);
			});
			posting.fail(function() {
				alert("Some error occured please try again");
			});
		
		$('#preloader').fadeOut(2000);
		
	}));
//---------------------------------------------------------------------------------	

});

