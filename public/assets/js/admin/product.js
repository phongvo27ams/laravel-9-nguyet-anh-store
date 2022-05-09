// JQUERY
$(document).ready(function() {
	// AJAX: Product Index
	product_index();

	function product_index()
	{
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url: '/admin/product/index',
			type: 'GET',
			dataType: 'json',
			success: function(response) {
				$('tbody').html('');
				$.each(response.products, function(key, item) {
					$('tbody').append('<tr class="border-t">\
						<td class="px-[10px] py-[16px]">' + item.name + '</td>\
						<td class="px-[10px] py-[16px]">' + item.sub_category_id + '</td>\
						<td class="px-[10px] py-[16px]">$' + item.unit_price + '</td>\
						<td class="px-[10px] py-[16px]">$' + item.sale_price + '</td>\
						<td class="px-[10px] py-[16px]">' + item.rate + '</td>\
						<td class="px-[10px] py-[16px]">' + item.vendor + '</td>\
						<td class="px-[10px] py-[16px]">' + item.sku + '</td>\
						<td class="px-[10px] py-[16px]">' + item.availability + '</td>\
						<td class="px-[10px] py-[16px]">' + item.color + '</td>\
						<td class="px-[10px] py-[16px]">' + item.size + '</td>\
						<td class="px-[10px] py-[16px]"><img src="assets/images/product/'+ item.image +'" class="w-[100px]"></td>\
						<td class="py-[16px] text-right">\
							<button class="px-[10px] text-blue-500 duration-[500ms] hover:text-blue-700" value="'+ item.id + '" id="edit">\
								<i class="fa-solid fa-pen-to-square"></i>\
							</button>\
							<button class="px-[10px] text-red-500 duration-[500ms] hover:text-red-700" value="' + item.id + '" id="delete">\
								<i class="fa-solid fa-trash-can"></i>\
							</button>\
						</td>\
					</tr>');
				});
			}
		});
	}

	// AJAX: Create a new Category
	// Open Modal
	$('button#create').on('click', function() {
		$('section#createModal').fadeIn(400);
		// Close Modal
		$('button#closeCreateModal').click(function() {
			$('section#createModal').fadeOut(400);
		});
	});

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	// Display sub-categories on Select
	$.ajax({
		url: '/admin/product/create',
		method: 'GET',
		dataType: 'json',
		success: function(response) {
			$('select#subCategory').html('<option value="">Select a sub-category...</option>');
			$.each(response.subCategories, function(key, item) {
				$('select#subCategory').append('<option value="' + item.id + '">' + item.name + '</option>');
			});
		}
	});

	$('form#store').on('submit', function(event) {
		event.preventDefault();

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url: '/admin/product',
			method: 'POST',
			data: new FormData(this),
			contentType: false,
			processData: false,
			dataType: 'JSON',
			success: function(response) {
				if(response.status == 400) {
					$('p#nameError').show();
					$('p#nameError').html('');
					$('p#nameError').text(response.errors.name);
					$('p#subCategoryError').show();
					$('p#subCategoryError').html('');
					$('p#subCategoryError').text(response.errors.subCategory);
					$('p#unitPriceError').show();
					$('p#unitPriceError').html('');
					$('p#unitPriceError').text(response.errors.unitPrice);
					$('p#rateError').show();
					$('p#rateError').html('');
					$('p#rateError').text(response.errors.rate);
					$('p#vendorError').show();
					$('p#vendorError').html('');
					$('p#vendorError').text(response.errors.vendor);
					$('p#skuError').show();
					$('p#skuError').html('');
					$('p#skuError').text(response.errors.sku);
					$('p#availabilityError').show();
					$('p#availabilityError').html('');
					$('p#availabilityError').text(response.errors.availability);
					$('p#descriptionError').show();
					$('p#descriptionError').html('');
					$('p#descriptionError').text(response.errors.description);
					$('p#colorError').show();
					$('p#colorError').html('');
					$('p#colorError').text(response.errors.color);
					$('p#sizeError').show();
					$('p#sizeError').html('');
					$('p#sizeError').text(response.errors.size);
					$('p#imageError').show();
					$('p#imageError').html('');
					$('p#imageError').text(response.errors.image);
				} else {
					$('p#nameError').hide();
					$('p#subCategoryError').hide();
					$('p#unitPriceError').hide();
					$('p#rateError').hide();
					$('p#vendorError').hide();
					$('p#vendorError').hide();
					$('p#skuError').hide();
					$('p#availabilityError').hide();
					$('p#descriptionError').hide();
					$('p#colorError').hide();
					$('p#sizeError').hide();
					$('p#imageError').hide();
					// Display success message
					$('div#success div p').text(response.message);
					$('div#success').css('display', 'flex');
					$('section#createModal').hide();
					// Clear all input values
					$('section#createModal').find('input').val('');
					product_index();
				}
			},
			error: function(data) {
				let errors = data.responseJSON;
				console.log(errors);
			}
		});
	});

	// AJAX: Edit a Category
	$(document).on('click', 'button#edit', function(event) {
		event.preventDefault();
		// Get id of this category
		let productId = $(this).val();

		$('section#editModal').fadeIn();
		$('button#closeEditModal').on('click', function() {
			$('section#editModal').fadeOut();
		});
		// Store the id in hidden input
		$('input#updateId').val(productId);

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url: '/admin/product/' + productId,
			type: 'GET',
			dataType: 'JSON',
			success: function(response) {
				if(response.status == 200) {
					$('select#subCategory').html('<option value="">Select a sub-category...</option>');
					$.each(response.subCategories, function(key, item) {
						$('select#subCategory').append('<option value="' + item.id + '">' + item.name + '</option>');
					});
					$('input#name').val(response.product.name);
					$('input#unitPrice').val(response.product.unit_price);
					$('input#salePrice').val(response.product.sale_price);
					$('input#rate').val(response.product.rate);
					$('input#vendor').val(response.product.vendor);
					$('input#sku').val(response.product.sku);
					$('select#availability').val(response.product.availability).attr('selected', 'selected');;
					$('textarea#description').text(response.product.description);
					$('input#color').val(response.product.color);
					$('input#size').val(response.product.size);
					// Display the selected value
					$('select#subCategory').val(response.product.sub_category_id).attr('selected', 'selected');
					// Display current image
					$('img#currentImage').attr('src', 'assets/images/product/' + response.product.image);
				}
			}
		});
	});

	// AJAX: Update a Category
	$(document).on('submit', 'form#update', function(event) {
		event.preventDefault();

		let productId = $('input#updateId').val();
		console.log(productId);

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url: '/admin/product/' + productId,
			method: 'POST',
			data: new FormData(this),
			contentType: false,
			processData: false,
			dataType: 'JSON',
			success: function(response) {
				if(response.status == 400) {
					$('p#nameError').show();
					$('p#nameError').html('');
					$('p#nameError').text(response.errors.name);
					$('p#subCategoryError').show();
					$('p#subCategoryError').html('');
					$('p#subCategoryError').text(response.errors.subCategory);
					$('p#unitPriceError').show();
					$('p#unitPriceError').html('');
					$('p#unitPriceError').text(response.errors.unitPrice);
					$('p#rateError').show();
					$('p#rateError').html('');
					$('p#rateError').text(response.errors.rate);
					$('p#vendorError').show();
					$('p#vendorError').html('');
					$('p#vendorError').text(response.errors.vendor);
					$('p#skuError').show();
					$('p#skuError').html('');
					$('p#skuError').text(response.errors.sku);
					$('p#availabilityError').show();
					$('p#availabilityError').html('');
					$('p#availabilityError').text(response.errors.availability);
					$('p#descriptionError').show();
					$('p#descriptionError').html('');
					$('p#descriptionError').text(response.errors.description);
					$('p#colorError').show();
					$('p#colorError').html('');
					$('p#colorError').text(response.errors.color);
					$('p#sizeError').show();
					$('p#sizeError').html('');
					$('p#sizeError').text(response.errors.size);
					$('p#imageError').show();
					$('p#imageError').html('');
					$('p#imageError').text(response.errors.image);
				} else {
					$('p#nameError').hide();
					$('p#subCategoryError').hide();
					$('p#unitPriceError').hide();
					$('p#rateError').hide();
					$('p#vendorError').hide();
					$('p#vendorError').hide();
					$('p#skuError').hide();
					$('p#availabilityError').hide();
					$('p#descriptionError').hide();
					$('p#colorError').hide();
					$('p#sizeError').hide();
					$('p#imageError').hide();
					// Display success message
					$('div#success div p').text(response.message);
					$('div#success').css('display', 'flex');
					$('section#editModal').hide();
					// Clear all input values
					$('section#editModal').find('input').val('');
					product_index();
				}
			},
			error: function(data) {
				let errors = data.responseJSON;
				console.log(errors);
			}
		});
	});

	// AJAX: Delete a Category
	$(document).on('click', 'button#delete', function(event) {
		event.preventDefault();

		let categoryId = $(this).val();

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			type: 'DELETE',
			url: '/admin/product/' + categoryId,
			success: function(response) {
				$('div#success div p').text(response.message);
				$('div#success').css('display', 'flex');
				product_index();
			}
		});
	});
});