<div class="fixed z-[2] col-span-2 w-full right-full lg:hidden bg-black-0.4 duration-[500ms]" id="mobileNavigation">
	<nav class="relative w-[80%] sm:w-[40%] bg-white flex-col border-r min-h-screen">
		{{-- Mobile Navigation Hide --}}
			<button class="absolute top-[10px] right-[-30px] text-white text-[24px] duration-[500ms] hover:text-red-500" id="mobileNavigationHide">
				<i class="fa-solid fa-xmark"></i>
			</button>
		{{-- End of Mobile Navigation Hide --}}

		<div class="text-[20px] p-[16px] pl-[22px] mb-[16px]">
			<i class="fa-solid fa-building-columns bg-[#15a362] px-[10px] py-[10px] rounded-[50%] text-white mr-[10px]"></i>
			<span class="uppercase font-[600] tracking-[0.1rem]">Dashboard</span>
		</div>
		<ul>
			<li>
				<a class="flex justify-beetween items-center cursor-pointer w-full p-[16px] text-[#15a362] font-[600] bg-[#edfdf6] border-l-[6px] border-[#15a362]" id="category">
					<div class="basis-[94%]">
						<i class="fa-solid fa-house mr-[10px] text-[14px]"></i><span>Categories</span>
					</div>
					<i class="fa-solid fa-angle-down" id="arrow"></i>
				</a>
				<ul class="hidden bg-[#fafbff]" id="sub-category">
					<li>
						<a class="flex justify-beetween items-center cursor-pointer w-full p-[8px] pl-[22px] text-[#5d6778] hover:text-[#15a362]">
							<div class="pl-[26px] basis-[100%]">Index</div>
						</a>
					</li>
					<li>
						<a class="flex justify-beetween items-center cursor-pointer w-full p-[8px] pl-[22px] text-[#5d6778] hover:text-[#15a362]" id="insert-category">
							<div class="pl-[26px] basis-[100%]">Insert</div>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a class="flex justify-beetween items-center cursor-pointer w-full p-[16px] pl-[22px] text-[#5d6778] hover:text-[#15a362]" id="category">
					<div class="basis-[94%]">
						<i class="fa-solid fa-house mr-[10px] text-[14px]"></i><span>Sub Categories</span>
					</div>
					<i class="fa-solid fa-angle-down" id="arrow"></i>
				</a>
				<ul class="hidden bg-[#fafbff]" id="sub-category">
					<li>
						<a href="#" class="flex justify-beetween items-center w-full p-[8px] pl-[22px] text-[#5d6778] hover:text-[#15a362]">
							<div class="pl-[26px] basis-[100%]">Index</div>
						</a>
					</li>
					<li>
						<a href="#" class="flex justify-beetween items-center w-full p-[8px] pl-[22px] text-[#5d6778] hover:text-[#15a362]">
							<div class="pl-[26px] basis-[100%]">Insert</div>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a class="flex justify-beetween items-center cursor-pointer w-full p-[16px] pl-[22px] text-[#5d6778] hover:text-[#15a362]" id="category">
					<div class="basis-[94%]">
						<i class="fa-solid fa-house mr-[10px] text-[14px]"></i><span>Categories</span>
					</div>
					<i class="fa-solid fa-angle-down" id="arrow"></i>
				</a>
				<ul class="hidden bg-[#fafbff]" id="sub-category">
					<li>
						<a href="#" class="flex justify-beetween items-center w-full p-[8px] pl-[22px] text-[#5d6778] hover:text-[#15a362]">
							<div class="pl-[26px] basis-[100%]">Index</div>
						</a>
					</li>
					<li>
						<a href="#" class="flex justify-beetween items-center w-full p-[8px] pl-[22px] text-[#5d6778] hover:text-[#15a362]">
							<div class="pl-[26px] basis-[100%]">Insert</div>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
</div>