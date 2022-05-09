// JQUERY
$(document).ready(function() {
	// AJAX: Category Index
	category_index();

	function category_index()
	{
		$.ajax({
			url: '/admin/category/index',
			type: 'GET',
			dataType: 'json',
			success: function(response) {
				$('tbody').html('');
				$.each(response.categories, function(key, item) {
					$('tbody').append('<tr class="border-t">\
						<td class="px-[10px] py-[16px]">'+item.name+'</td>\
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
		})
	}

	// AJAX: Create a new Category
	// Open Create Category Modal
	$('button#createCategory').click(function() {
		$('section#createCategoryModal').fadeIn(400);
		$('button#closeCreateCategoryModal').click(function() {
			$('section#createCategoryModal').fadeOut(400);
		});
	});

	$(document).on('submit', 'form#createCategory', function(event) {
		event.preventDefault();

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url: '/admin/category',
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
					$('p#imageError').html('');
					$('p#imageError').show();
					$('p#imageError').text(response.errors.image);
				} else {
					$('p#nameError').hide();
					$('p#imageError').hide();
					$('div#success div p').text(response.message);
					$('div#success').css('display', 'flex');
					$('section#createCategoryModal').hide();
					// Clear all input values
					$('section#createCategoryModal').find('input').val('');
					category_index();
				}
			}
		});
	});

	// AJAX: Edit a Category
	$(document).on('click', 'button#edit', function(event) {
		event.preventDefault();
		// Get id of this category
		let categoryId = $(this).val();
		// Store the id in hidden input
		$('input#updateId').val(categoryId);

		$('section#editCategoryModal').fadeIn();
		$('button#closeEditCategoryModal').on('click', function() {
			$('section#editCategoryModal').fadeOut();
		});

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			type: 'GET',
			url: '/admin/category/' + categoryId,
			success: function(response) {
				if(response.status == 200) {
					$('input#name').val(response.category.name);
					$('img#currentImage').attr('src', 'assets/images/category/' + response.category.image);
				}
			}
		});
	});

	// AJAX: Update a Category
	$(document).on('submit', 'form#updateCategory', function(event) {
		event.preventDefault();

		let categoryId = $('input#updateId').val();

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url: '/admin/category/' + categoryId,
			method: $(this).attr('method'),
			data: new FormData(this),
			contentType: false,
			processData: false,
			dataType: 'json',
			success: function(response) {
				if(response.status == 400) {
					$('p#nameError').html('');
					$('p#nameError').show();
					$('p#nameError').text(response.errors.updateName);
					$('p#imageError').html('');
					$('p#imageError').show();
					$('p#imageError').text(response.errors.updateImage);
				} else {
					$('p#nameError').hide();
					$('p#imageError').hide();
					$('div#success div p').text(response.message);
					$('div#success').css('display', 'flex');
					$('section#editCategoryModal').hide();
					$('section#editCategoryModal').find('input').val('');
					category_index();
				}
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
			url: '/admin/category/' + categoryId,
			success: function(response) {
				$('div#success div p').text(response.message);
				$('div#success').css('display', 'flex');
				category_index();
			}
		});
	});
});