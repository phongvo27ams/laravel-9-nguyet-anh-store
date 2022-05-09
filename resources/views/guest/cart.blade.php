<x-guest-layout>
	<x-guest.header>
		<div class="uppercase font-bold rounded-b-md rounded-t-md px-[1.125rem] py-[13px] text-[1rem] text-white bg-blue-500 cursor-pointer" id="primary-navigation-button">Categories</div>
		<div class="hidden fixed z-[2] top-[180px] w-[280px]" id="primary-navigation-toggle">
			<x-guest.primary-navigation/>
		</div>
	</x-guest.header>

	<x-guest.sticky-navigation/>

	<x-guest.mobile-navigation/>

	<x-guest.back-to-top/>

	<div class="bg-[#f7f8fa]">
		<div class="mx-auto max-w-[61.875rem] xl:max-w-[75rem] my-[1.25rem] px-[0.625rem] py-[0.375rem] text-[0.75rem] text-[#777777]"><a href="" class="hover:text-blue-500">Home</a> / Your Shopping Cart</div>
	</div>

	<section class="container mx-auto">
		<div class="grid grid-cols-1 gap-[1.25rem] mx-auto max-w-[61.875rem] xl:max-w-[75rem] px-[0.625rem] mb-[3.75rem]">
			<p class="py-[50px] border-b uppercase text-center text-[34px]">Shopping Cart</p>

			<div class="grid grid-cols-[100px_380px_100px] md:grid-cols-[100px_330px_60px_70px_60px_30px] lg:grid-cols-[100px_370px_100px_100px_100px_100px] xl:grid-cols-[100px_460px_130px_130px_130px_130px] gap-[1.25rem] py-[20px] border-b">
				<img src="guest/images/index/TailoredFitMesh-PanelPolo_4_600x.jpg" class="relative z-[-1] object-contain rounded-md h-[125px]">
				<div class="flex flex-wrap items-center md:py-[20px]">
					<a href="" class="block w-full hover:text-[#2879fe]">Tailored Fit Mesh-Panel Polo</a>
					<p class="w-full"><span class="uppercase">Color: </span>Blue</p>
				</div>
				<a href="" class="flex md:hidden justify-end items-center">
					<i class="fa-solid fa-trash text-gray-400 hover:text-red-600"></i>
				</a>
				<div class="flex items-center col-start-2 md:col-start-3">$300.00</div>
				<div class="flex items-center col-start-2 md:col-start-4">
					<input type="number" class="w-[80px] border rounded outline-none font-[600] text-center py-[0.5rem] bg-[#f7f8fa] focus:border-blue-500" min="1" value="1"/>
				</div>
				<div class="flex justify-start md:justify-end items-center font-[600] col-start-2 md:col-start-5">$300.00</div>
				<a href="" class="hidden md:flex justify-end items-center">
					<i class="fa-solid fa-trash text-gray-400 hover:text-red-600"></i>
				</a>
			</div>
			<div class="grid grid-cols-[100px_380px_100px] md:grid-cols-[100px_330px_60px_70px_60px_30px] lg:grid-cols-[100px_370px_100px_100px_100px_100px] xl:grid-cols-[100px_460px_130px_130px_130px_130px] gap-[1.25rem] py-[20px] border-b">
				<img src="guest/images/index/TailoredFitMesh-PanelPolo_4_600x.jpg" class="relative z-[-1] object-contain rounded-md h-[125px]">
				<div class="flex flex-wrap items-center md:py-[20px]">
					<a href="" class="block w-full">Tailored Fit Mesh-Panel Polo</a>
					<p class="w-full"><span class="uppercase">Color: </span>Blue</p>
				</div>
				<a href="" class="flex md:hidden justify-end items-center">
					<i class="fa-solid fa-trash text-gray-400 hover:text-red-600"></i>
				</a>
				<div class="flex items-center col-start-2 md:col-start-3">$300.00</div>
				<div class="flex items-center col-start-2 md:col-start-4">
					<input type="number" class="w-[80px] border rounded outline-none font-[600] text-center py-[0.5rem] bg-[#f7f8fa] focus:border-blue-500" min="1" value="1"/>
				</div>
				<div class="flex justify-start md:justify-end items-center font-[600] col-start-2 md:col-start-5">$300.00</div>
				<a href="" class="hidden md:flex justify-end items-center">
					<i class="fa-solid fa-trash text-gray-400 hover:text-red-600"></i>
				</a>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-[56%_28%_16%] lg:grid-cols-[60%_28%_12%] gap-y-[16px] text-[#2789fe] mb-[80px]">
				<a href="" class="block w-fit justify-self-center md:justify-self-auto hover:font-[600] hover:text-black">
					<i class="fa-solid fa-circle-arrow-left mr-[8px]"></i>
					<p class="inline uppercase">Continue shopping</p>
				</a>
				<a href="" class="block w-fit justify-self-center md:justify-self-auto hover:font-[600] hover:text-black">
					<i class="fa-solid fa-trash-can mr-[8px]"></i>
					<p class="inline uppercase">Clear shopping cart</p>
				</a>
				<a href="" class="block w-fit justify-self-center md:justify-self-end hover:font-[600] hover:text-black">
					<i class="fa-solid fa-arrows-rotate mr-[8px]"></i>
					<p class="inline uppercase">Update cart</p>
				</a>
			</div>

			<div class="grid grid-cols-3 gap-[1.25rem]">
				<div class="col-start-3 col-end-4 p-[40px] border rounded-md">
					<div class="flex justify-between">
						<span class="uppercase font-[600] text-[1rem]">Subtotal</span>
						<span class="uppercase font-[600] text-[1rem]">$400.00</span>
					</div>
					<div class="flex justify-between items-center py-[20px]">
						<span class="uppercase font-[600] text-[1rem]">Grand total</span>
						<span class="uppercase font-[600] text-[24px] text-[#2879fe]">$400.00</span>
					</div>
					<a href="" class="block py-[12px] uppercase text-[#2879fe] text-[14px] text-center rounded border border-[#2879fe] duration-[500ms] hover:text-white hover:bg-[#2879fe]">Proceed to checkout</a>
				</div>
			</div>
		</div>
	</section>

	<section class="container mx-auto">
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[1.25rem] max-w-[75rem] px-[0.625rem] mx-auto mb-[60px]">
			<div class="flex">
				<i class="fa-solid fa-truck-fast text-blue-500 text-[45px] duration-500 group-hover:text-blue-500"></i>
				<div class="pl-[21px]">
					<p class="uppercase font-bold text-[16px]">Free shipping</p>
					<p class="text-[14px]">Free shipping on all Ho Chi Minh City or order above $99.00</p>
				</div>
			</div>
			<div class="flex">
				<i class="fa-solid fa-headset text-blue-500 text-[45px] duration-500 group-hover:text-blue-500"></i>
				<div class="pl-[21px]">
					<p class="uppercase font-bold text-[16px]">Support 24/7</p>
					<p class="text-[14px]">Contact us 24 hours a day, 7 days a week</p>
				</div>
			</div>
			<div class="flex">
				<i class="fa-solid fa-arrows-rotate text-blue-500 text-[45px] duration-500 group-hover:text-blue-500"></i>
				<div class="pl-[21px]">
					<p class="uppercase font-bold text-[16px]">30 days return</p>
					<p class="text-[14px]">Simply return it within 24 days for an exchange</p>
				</div>
			</div>
		</div>
	</section>

	<x-guest.footer/>
</x-guest-layout>