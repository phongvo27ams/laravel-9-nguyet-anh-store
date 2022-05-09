<header class="z-[1] h-fit w-full px-[36px] py-[12px] shadow-md">
	<div class="flex justify-between items-center">
		<div class="relative basis-[600px]">
			{{-- Mobile Navigation Button --}}
				<button class="inline-block lg:hidden text-[#15a362] font-[600] text-[20px] mr-[12px]" id="mobileNavigation">
					<i class="fa-solid fa-bars"></i>
				</button>
			{{-- End of Mobile Navigation Button --}}

			<input type="text" class="w-[70%] lg:w-[100%] px-[24px] py-[8px] outline-none rounded border duration-[500ms] focus:border-[#15a362]" placeholder="Search...">
			<button class="absolute top-[8px] right-[28%] lg:right-[4%] text-[#5d6778] duration-[500ms] hover:text-[#15a362]">
				<i class="fa-solid fa-magnifying-glass"></i>
			</button>
		</div>
		<div class="relative basis-[36px]">
			<button id="account">
				<img src="https://via.placeholder.com/150x150" class="rounded-[50%]">
			</button>
			<ul class="hidden z-[1] absolute mt-[8px] right-[0px] w-[160px] bg-white rounded-md border shadow-md" id="accountOptions">
				<li><a href="" class="block px-[14px] py-[10px] hover:bg-[#fafbff] hover:text-[#15a362]">My Account</a></li>
				<li><a href="" class="block px-[14px] py-[10px] hover:bg-[#fafbff] hover:text-[#15a362]">Log Out</a></li>
			</ul>
		</div>
	</div>
</header>