<x-admin-layout>
	<x-slot:navigation>
		<x-admin.primary-navigation/>

		<x-admin.mobile-navigation/>
	</x-slot:navigation>

	<x-slot:header>
		<x-admin.header/>
	</x-slot:header>

	<section class="relative min-h-screen p-[36px] bg-[#f5f6fe]">
		<div class="mb-[16px]">
			<span class="text-[24px] font-[600] mr-[8px]">Products</span>
			<button class="text-[20px] text-[#5d6778] duration-[500ms] hover:text-[#15a362]" id="create">
				<i class="fa-solid fa-circle-plus"></i>
			</button>
		</div>

		{{-- Success Message --}}
			<div class="hidden flex justify-center items-center mb-[16px]" id="success">
				<div class="px-[26px] py-[14px] bg-white rounded shadow-md">
					<i class="fa-solid fa-circle-check text-[20px] text-green-500 mr-[4px]"></i>
					<p class="inline-block text-center text-[16px]"></p>
				</div>
			</div>
		{{-- End of Success Message --}}
		
		<div class="flex overflow-auto">
			<table class="table-auto basis-[100%] min-w-[800px] bg-white rounded shadow-md">
				<thead>
					<tr>
						<th class="px-[10px] py-[16px] text-left">Name</th>
						<th class="px-[10px] py-[16px] text-left">Sub-category</th>
						<th class="px-[10px] py-[16px] text-left">Unit Price</th>
						<th class="px-[10px] py-[16px] text-left">Sale Price</th>
						<th class="px-[10px] py-[16px] text-left">Rate</th>
						<th class="px-[10px] py-[16px] text-left">Vendor</th>
						<th class="px-[10px] py-[16px] text-left">SKU</th>
						<th class="px-[10px] py-[16px] text-left">Availability</th>
						<th class="px-[10px] py-[16px] text-left">Color</th>
						<th class="px-[10px] py-[16px] text-left">Size</th>
						<th class="px-[10px] py-[16px] text-left">Image</th>
						<th class="px-[10px] py-[16px] text-right" rowspan="2">Options</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>

		{{-- Modal: Create a new Product --}}
			<section class="fixed top-[20px] left-[35%] w-[50%] hidden bg-white p-[20px] rounded-md shadow-md" id="createModal">
				<div class="flex justify-between items-center mb-[10px]">
					<p class="uppercase text-[20px] font-[600]">Create a new product</p>
					<button class="text-[20px] p-[10px] duration-[500ms] hover:text-red-500" id="closeCreateModal">
						<i class="fa-solid fa-xmark"></i>
					</button>
				</div>
				<form action="" method="POST" class="flex flex-wrap gap-[10px]" id="store" enctype="multipart/form-data">
					@csrf
					<label class="group relative basis-[60%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">Name</span>
						<input type="text" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="name" name="name"/>
						<p class="hidden text-red-600 text-[12px]" id="nameError"></p>
					</label>

					<label class="group relative basis-[36%]">
						<select class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="subCategory" name="subCategory">
							<option value="">Select a sub-category...</option>
						</select>
						<p class="hidden text-red-600 text-[12px]" id="subCategoryError"></p>
					</label>

					<label class="group relative basis-[30%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">Unit Price</span>
						<input type="number" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="unitPrice" name="unitPrice"/>
						<p class="hidden text-red-600 text-[12px]" id="unitPriceError"></p>
					</label>

					<label class="group relative basis-[30%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">Sale Price</span>
						<input type="number" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="salePrice" name="salePrice"/>
						<p class="hidden text-red-600 text-[12px]" id="salePriceError"></p>
					</label>

					<label class="group relative basis-[30%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">Rate</span>
						<input type="number" min="1" max="5" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="rate" name="rate"/>
						<p class="hidden text-red-600 text-[12px]" id="rateError"></p>
					</label>

					<label class="group relative basis-[30%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">Vendor</span>
						<input type="text" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="vendor" name="vendor"/>
						<p class="hidden text-red-600 text-[12px]" id="vendorError"></p>
					</label>

					<label class="group relative basis-[30%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">SKU</span>
						<input type="text" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="sku" name="sku"/>
						<p class="hidden text-red-600 text-[12px]" id="skuError"></p>
					</label>

					<label class="group relative basis-[30%]">
						<select class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="availability" name="availability">
							<option value="">Select availability...</option>
							<option value="In stock">In stock</option>
							<option value="Out of stock">Out of stock</option>
						</select>
						<p class="hidden text-red-600 text-[12px]" id="availabilityError"></p>
					</label>

					<label class="group relative basis-[100%]">
						<textarea type="text" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="description" name="description" placeholder="Description..."></textarea>
						<p class="hidden text-red-600 text-[12px]" id="descriptionError"></p>
					</label>

					<label class="group relative basis-[45%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">Color</span>
						<input type="text" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="color" name="color"/>
						<p class="hidden text-red-600 text-[12px]" id="colorError"></p>
					</label>

					<label class="group relative basis-[45%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">Size</span>
						<input type="text" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="size" name="size"/>
						<p class="hidden text-red-600 text-[12px]" id="sizeError"></p>
					</label>

					<input type="file" class="w-[100%] py-[12px] mb-[6px] rounded outline-none duration-[100ms] focus:border-[#15a362]" id="image" name="image"/>
					<p class="hidden w-[100%] text-red-600 text-[12px]" id="imageError"></p>

					<button type="submit" class="basis-fit uppercase font-[600] py-[12px] px-[24px] border-[#15a362] rounded border cursor-pointer duration-[500ms] hover:text-white hover:bg-[#15a362]">Create</button>
				</form>
			</section>
		{{-- End of Modal --}}

		{{-- Modal: Edit a Category --}}
			<section class="fixed overflow-scroll top-[40px] bottom-[40px] left-[35%] w-[50%] hidden bg-white p-[20px] rounded-md shadow-md" id="editModal">
				<div class="flex justify-between items-center mb-[10px]">
					<p class="uppercase text-[20px] font-[600]">Edit a sub-category</p>
					<button class="text-[20px] p-[10px] duration-[500ms] hover:text-red-500" id="closeEditModal">
						<i class="fa-solid fa-xmark"></i>
					</button>
				</div>
				<form action="" method="POST" class="flex flex-wrap gap-[10px]" id="update" enctype="multipart/form-data">
					@csrf
					<input type="hidden" id="updateId">
					<label class="group relative basis-[60%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">Name</span>
						<input type="text" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="name" name="name"/>
						<p class="hidden text-red-600 text-[12px]" id="nameError"></p>
					</label>

					<label class="group relative basis-[36%]">
						<select class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="subCategory" name="subCategory">
							<option value="">Select a sub-category...</option>
						</select>
						<p class="hidden text-red-600 text-[12px]" id="subCategoryError"></p>
					</label>

					<label class="group relative basis-[30%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">Unit Price</span>
						<input type="number" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="unitPrice" name="unitPrice"/>
						<p class="hidden text-red-600 text-[12px]" id="unitPriceError"></p>
					</label>

					<label class="group relative basis-[30%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">Sale Price</span>
						<input type="number" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="salePrice" name="salePrice"/>
						<p class="hidden text-red-600 text-[12px]" id="salePriceError"></p>
					</label>

					<label class="group relative basis-[30%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">Rate</span>
						<input type="number" min="1" max="5" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="rate" name="rate"/>
						<p class="hidden text-red-600 text-[12px]" id="rateError"></p>
					</label>

					<label class="group relative basis-[30%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">Vendor</span>
						<input type="text" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="vendor" name="vendor"/>
						<p class="hidden text-red-600 text-[12px]" id="vendorError"></p>
					</label>

					<label class="group relative basis-[30%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">SKU</span>
						<input type="text" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="sku" name="sku"/>
						<p class="hidden text-red-600 text-[12px]" id="skuError"></p>
					</label>

					<label class="group relative basis-[30%]">
						<select class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="availability" name="availability">
							<option value="">Select availability...</option>
							<option value="In stock">In stock</option>
							<option value="Out of stock">Out of stock</option>
						</select>
						<p class="hidden text-red-600 text-[12px]" id="availabilityError"></p>
					</label>

					<label class="group relative basis-[100%]">
						<textarea type="text" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="description" name="description" placeholder="Description..."></textarea>
						<p class="hidden text-red-600 text-[12px]" id="descriptionError"></p>
					</label>

					<label class="group relative basis-[45%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">Color</span>
						<input type="text" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="color" name="color"/>
						<p class="hidden text-red-600 text-[12px]" id="colorError"></p>
					</label>

					<label class="group relative basis-[45%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">Size</span>
						<input type="text" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="size" name="size"/>
						<p class="hidden text-red-600 text-[12px]" id="sizeError"></p>
					</label>

					<img src="" class="mt-[8px] w-[100px]" id="currentImage">
					<input type="file" class="w-[100%] py-[12px] mb-[6px] rounded outline-none duration-[100ms] focus:border-[#15a362]" id="image" name="image"/>
					<p class="hidden w-[100%] text-red-600 text-[12px]" id="imageError"></p>

					<button type="submit" class="basis-fit uppercase font-[600] py-[12px] px-[24px] border-[#15a362] rounded border cursor-pointer duration-[500ms] hover:text-white hover:bg-[#15a362]">Update</button>
				</form>
			</section>
		{{-- End of Modal --}}
	</section>

	<x-slot:script>
		<script src="assets/jquery/3.6.0/jquery.min.js"></script>
		<script src="assets/js/admin/dashboard.js"></script>
		<script src="assets/js/admin/product.js"></script>
	</x-slot:script>
</x-admin-layout>