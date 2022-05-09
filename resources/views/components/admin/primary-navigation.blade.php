<nav class="hidden lg:flex flex-col border-r min-h-screen">
	<div class="text-[20px] p-[16px] pl-[22px] mb-[16px]">
		<i class="fa-solid fa-building-columns bg-[#15a362] px-[10px] py-[10px] rounded-[50%] text-white mr-[10px]"></i>
		<span class="uppercase font-[600] tracking-[0.1rem]">Dashboard</span>
	</div>
	<ul>
		<li>
			<a href="{{ route('admin.category.index') }}" class="flex justify-beetween items-center cursor-pointer w-full p-[16px] {{ (request()->is('admin/category')) ? 'text-[#15a362] font-[600] bg-[#edfdf6] border-l-[6px] border-[#15a362]' : 'pl-[22px] text-[#5d6778] duration-[500ms] hover:text-[#15a362]' }}">
				<div class="basis-[94%]">
					<i class="fa-solid fa-folder mr-[10px] text-[14px]"></i><span>Categories</span>
				</div>
			</a>
		</li>
		<li>
			<a href="{{ route('admin.sub-category.index') }}" class="flex justify-beetween items-center cursor-pointer w-full p-[16px] {{ (request()->is('admin/sub-category')) ? 'text-[#15a362] font-[600] bg-[#edfdf6] border-l-[6px] border-[#15a362]' : 'pl-[22px] text-[#5d6778] duration-[500ms] hover:text-[#15a362]' }}" id="categoryLevel1">
				<div class="basis-[94%]">
					<i class="fa-solid fa-folder-open mr-[10px] text-[14px]"></i><span>Sub-categories</span>
				</div>
			</a>
		</li>
		<li>
			<a href="{{ route('admin.product.index') }}" class="flex justify-beetween items-center cursor-pointer w-full p-[16px] {{ (request()->is('admin/product')) ? 'text-[#15a362] font-[600] bg-[#edfdf6] border-l-[6px] border-[#15a362]' : 'pl-[22px] text-[#5d6778] duration-[500ms] hover:text-[#15a362]' }}" id="categoryLevel1">
				<div class="basis-[94%]">
					<i class="fa-solid fa-shirt mr-[10px] text-[14px]"></i><span>Products</span>
				</div>
			</a>
		</li>
		<li>
			<a href="{{ route('admin.news.index') }}" class="flex justify-beetween items-center cursor-pointer w-full p-[16px] {{ (request()->is('admin/news')) ? 'text-[#15a362] font-[600] bg-[#edfdf6] border-l-[6px] border-[#15a362]' : 'pl-[22px] text-[#5d6778] duration-[500ms] hover:text-[#15a362]' }}" id="categoryLevel1">
				<div class="basis-[94%]">
					<i class="fa-solid fa-file-lines mr-[10px] text-[14px]"></i><span>News</span>
				</div>
			</a>
		</li>
	</ul>
</nav>