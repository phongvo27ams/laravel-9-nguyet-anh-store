// JQUERY
$(document).ready(function() {
	sub_category_index();

	// AJAX: Sub-category index
	function sub_category_index()
	{
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url: '/admin/sub-category/index',
			type: 'GET',
			dataType: 'json',
			success: function(response) {
				$('tbody').html('');
				$.each(response.subCategories, function(key, item) {
					$('tbody').append('<tr class="border-t">\
						<td class="px-[10px] py-[16px]">'+item.name+'</td>\
						<td class="px-[10px] py-[16px]">'+item.category_id+'</td>\
						<td class="py-[16px] text-right">\
							<button class="px-[10px] text-blue-500 duration-[500ms] hover:text-blue-700" value="'+item.id+'" id="edit">\
								<i class="fa-solid fa-pen-to-square"></i>\
							</button>\
							<button class="px-[10px] text-red-500 duration-[500ms] hover:text-red-700" value="'+item.id+'" id="delete">\
								<i class="fa-solid fa-trash-can"></i>\
							</button>\
						</td>\
					</tr>');
				});
			}
		});
	}

	// AJAX: Create a new Sub-category
	$(document).on('click', 'button#create', function() {
		// Open Modal
		$('section#createModal').fadeIn();
		// Close Modal
		$(document).on('click', 'button#closeCreateModal', function() {
			$('section#createModal').fadeOut();
		});

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		// Display categories on Select
		$.ajax({
			url: '/admin/sub-category/create',
			method: 'GET',
			dataType: 'json',
			success: function(response) {
				$('select#category').html('<option value="">Select a category...</option>');
				$.each(response.categories, function(key, item) {
					$('select#category').append('<option value="' + item.id + '">' + item.name + '</option>');
				});
			}
		});
	});

	$('form#store').on('submit', function(event) {
		event.preventDefault();

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url: '/admin/sub-category',
			method: 'POST',
			data: new FormData(this),
			contentType: false,
			processData: false,
			dataType: 'json',
			success: function(response) {
				if(response.status == 400) {
					$('p#nameError').html('');
					$('p#nameError').show();
					$('p#nameError').text(response.errors.name);
					$('p#categoryError').html('');
					$('p#categoryError').show();
					$('p#categoryError').text(response.errors.category);
				} else {
					$('p#nameError').hide();
					$('p#categoryError').hide();
					$('div#success div p').text(response.message);
					$('div#success').css('display', 'flex');
					$('section#createModal').hide();
					$('form#create').find('input').val('');
					sub_category_index();
				}
			}
		});
	});

	// AJAX: Edit a Sub-category
	$(document).on('click', 'button#edit', function(event) {
		event.preventDefault();
		// Get the id from button#subCategoryEdit 
		let subCategoryId = $(this).val();
		// Store the id value in hidden input
		$('input#updateId').val(subCategoryId);

		$('section#editModal').fadeIn();
		$('button#closeEditModal').on('click', function() {
			$('section#editModal').fadeOut();
		});

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		// Display categories on Select
		$.ajax({
			url: '/admin/sub-category/create',
			method: 'GET',
			dataType: 'json',
			success: function(response) {
				$('select#category').html('<option value="">Select a category...</option>');
				$.each(response.categories, function(key, item) {
					$('select#category').append('<option value="' + item.id + '">' + item.name + '</option>');
				});
			}
		});
		// Get the sub-category data with the id from hidden input
		$.ajax({
			type: 'GET',
			url: '/admin/sub-category/' + subCategoryId,
			success: function(response) {
				if(response.status == 200) {
					$('input#name').val(response.subCategory.name);
					// Display the selected value
					$('select#category').val(response.subCategory.category_id).attr('selected', 'selected');
				}
			}
		});
	});

	// AJAX: Update a sub-category
	$(document).on('submit', 'form#update', function(event) {
		event.preventDefault();

		// Get the id from hidden input
		let categoryId = $('input#updateId').val();

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url: '/admin/sub-category/' + categoryId,
			method: $(this).attr('method'),
			data: new FormData(this),
			contentType: false,
			processData: false,
			dataType: 'json',
			success: function(response) {
				if(response.status == 400) {
					$('p#nameError').html('');
					$('p#nameError').show();
					$('p#nameError').text(response.errors.name);
					$('p#categoryError').html('');
					$('p#categoryError').show();
					$('p#categoryError').text(response.errors.category);
				} else {
					$('p#nameError').hide();
					$('p#categoryError').hide();
					$('div#success div p').text(response.message);
					$('div#success').css('display', 'flex');
					$('section#editModal').hide();
					$('section#editModal').find('input').val('');
					sub_category_index();
				}
			}
		});
	});

	// AJAX: Delete a Category
	$(document).on('click', 'button#delete', function(event) {
		event.preventDefault();

		let subCategoryId = $(this).val();

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			type: 'DELETE',
			url: '/admin/sub-category/' + subCategoryId,
			success: function(response) {
				$('div#success div p').text(response.message);
				$('div#success').css('display', 'flex');
				sub_category_index();
			}
		});
	});
});