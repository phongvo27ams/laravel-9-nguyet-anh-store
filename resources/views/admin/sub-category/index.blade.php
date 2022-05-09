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
			<span class="text-[24px] font-[600] mr-[8px]">Sub-categories</span>
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
		
		<div class="flex overflow-auto">
			<table class="table-auto basis-[100%] min-w-[500px] bg-white rounded shadow-md">
				<thead>
					<tr>
						<th class="px-[10px] py-[16px] text-left w-[60%]">Name</th>
						<th class="px-[10px] py-[16px] text-left w-[20%]">Category</th>
						<th class="px-[10px] py-[16px] text-right w-[20%]" rowspan="2">Options</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>

		{{-- Modal: Create a new Sub-category --}}
			<section class="absolute top-[36px] left-[25%] w-[50%] hidden bg-white p-[20px] rounded-md shadow-md" id="createModal">
				<div class="flex justify-between items-center mb-[10px]">
					<p class="uppercase text-[20px] font-[600]">Create a new sub-category</p>
					<button class="text-[20px] p-[10px] duration-[500ms] hover:text-red-500" id="closeCreateModal">
						<i class="fa-solid fa-xmark"></i>
					</button>
				</div>
				<form action="" method="POST" enctype="multipart/form-data" class="flex flex-wrap gap-[12px]" id="store">
					@csrf
					<label class="group relative basis-[100%]">
						<span class="absolute top-[12px] left-[10px] text-[#5d6778] bg-white duration-[500ms]">Name</span>
						<input type="text" class="w-[100%] p-[12px] mb-[12px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="name" name="name"/>
						<p class="hidden text-red-600 text-[12px]" id="nameError"></p>

						<select class="w-[100%] p-[12px] my-[6px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="category" name="category">
							<option value="">Select a category...</option>
						</select>
						<p class="hidden text-red-600 text-[12px]" id="categoryError"></p>
					</label>
					<button type="submit" class="basis-fit uppercase font-[600] py-[12px] px-[24px] border-[#15a362] rounded border cursor-pointer duration-[500ms] hover:text-white hover:bg-[#15a362]">Create</button>
				</form>
			</section>
		{{-- End of Modal --}}

		{{-- Modal: Edit a Category --}}
			<section class="absolute top-[36px] left-[25%] w-[50%] hidden bg-white p-[20px] rounded-md shadow-md" id="editModal">
				<div class="flex justify-between items-center mb-[10px]">
					<p class="uppercase text-[20px] font-[600]">Edit a sub-category</p>
					<button class="text-[20px] p-[10px] duration-[500ms] hover:text-red-500" id="closeEditModal">
						<i class="fa-solid fa-xmark"></i>
					</button>
				</div>
				<form action="" method="POST" enctype="multipart/form-data" class="flex flex-wrap gap-[12px]" id="update">
					@csrf
					<input type="hidden" id="updateId">
					<label class="group relative basis-[100%]">
						<span class="absolute top-[12px] left-[10px] text-[13px] text-[#15a362] font-[600] px-[4px] top-[-10px] bg-white duration-[500ms]">Name</span>
						<input type="text" class="w-[100%] p-[12px] mb-[6px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="name" name="name"/>
						<p class="hidden text-red-600 text-[12px]" id="nameError"></p>

						<select class="w-[100%] p-[12px] mb-[6px] rounded border outline-none duration-[100ms] focus:border-[#15a362]" id="category" name="category">
							<option value="">Select a category...</option>
						</select>
						<p class="hidden text-red-600 text-[12px]" id="categoryError"></p>
					</label>
					<button type="submit" class="basis-fit uppercase font-[600] py-[12px] px-[24px] border-[#15a362] rounded border cursor-pointer duration-[500ms] hover:text-white hover:bg-[#15a362]">Update</button>
				</form>
			</section>
		{{-- End of Modal --}}
	</section>

	<x-slot:script>
		<script src="assets/jquery/3.6.0/jquery.min.js"></script>
		<script src="assets/js/admin/dashboard.js"></script>
		<script src="assets/js/admin/sub-category.js"></script>
	</x-slot:script>
</x-admin-layout>