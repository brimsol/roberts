$(document).ready(function() {
	
	$('[data-toggle="modal"]').click(function(e) {
		e.preventDefault();
		var url = $(this).attr('href');
		if (url.indexOf('#') == 0) {
			$(url).modal('open');
		} else {
			$.get(url, function(data) {
				$('<div class="modal hide fade">' + data + '</div>').modal();
			}).success(function() {
				//$('input:text:visible:first').focus();
			});
		}
	});
	var base_url = "http://roberts.app";
	var url = base_url + "/backend/categories/filter";
	
	$('#category').change(function() {
		
		//$('#preloader').show();
		var id = $('#category').val();
		//alert (id);
			var posting = $.post(url, {
				 table : 'sub_category_a',
				 id : id,
				 id_field : 'product_id',
				 id_field_get : 'aid'

			});
			/* Put the results in a div */
			posting.done(function(data) {
				//var content = $(data).find('#content');
				$("#sub_category_a").empty().append(data);
				$("#sub_category_a").removeAttr('disabled')
				
			});
			posting.fail(function() {
				alert("Some error occured please try again");
			});
		

		//alert('hide')
		//$('#preloader').fadeOut(2000);
	});
	
	$('#sub_category_a').change(function() {
		
		//$('#preloader').show();
		var id = $('#sub_category_a').val();
		//alert (id);
			var posting = $.post(url, {
				 table : 'sub_category_b',
				 id : id,
				 id_field : 'sub_aid',
				 id_field_get : 'bid'

			});
			/* Put the results in a div */
			posting.done(function(data) {
				//var content = $(data).find('#content');
				$("#sub_category_b").empty().append(data);
				$("#sub_category_b").removeAttr('disabled')
				
			});
			posting.fail(function() {
				alert("Some error occured please try again");
			});
		

		//alert('hide')
		//$('#preloader').fadeOut(2000);
	});
	$('#sub_category_b').change(function() {
		
		//$('#preloader').show();
		var id = $('#sub_category_b').val();
		//alert (id);
			var posting = $.post(url, {
				 table : 'sub_category_c',
				 id : id,
				 id_field : 'sub_bid',
				 id_field_get : 'cid'

			});
			/* Put the results in a div */
			posting.done(function(data) {
				//var content = $(data).find('#content');
				$("#sub_category_c").empty().append(data);
				$("#sub_category_c").removeAttr('disabled')
				
			});
			posting.fail(function() {
				alert("Some error occured please try again");
			});
		

		//alert('hide')
		//$('#preloader').fadeOut(2000);
	});
});
