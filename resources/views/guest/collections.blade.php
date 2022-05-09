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
		<div class="mx-auto max-w-[61.875rem] xl:max-w-[75rem] my-[1.25rem] px-[0.625rem] py-[0.375rem] text-[0.75rem] text-[#777777]"><a href="" class="hover:text-blue-500">Home</a> / Womens</div>
	</div>

	<section class="container mx-auto">
		<div class="grid grid-cols-1 lg:grid-cols-[14.25rem_45.188rem] xl:grid-cols-[17.5rem_55rem] gap-[1.25rem] mx-auto max-w-[61.875rem] xl:max-w-[75rem] px-[0.625rem] mb-[3.75rem]">
			<section>
				<p class="uppercase text-[1rem] font-[600] pb-[0.75rem] border-b">Product Type</p>
				<ul class="text-[#777777] mt-[0.625rem]">
					<li><a href="" class="block py-[0.25rem] hover:text-blue-500">Dress</a></li>
					<li><a href="" class="block py-[0.25rem] hover:text-blue-500">Hat</a></li>
					<li><a href="" class="block py-[0.25rem] hover:text-blue-500">Jeans</a></li>
					<li><a href="" class="block py-[0.25rem] hover:text-blue-500">Polo</a></li>
					<li><a href="" class="block py-[0.25rem] hover:text-blue-500">Shirt</a></li>
					<li><a href="" class="block py-[0.25rem] hover:text-blue-500">Shoes</a></li>
					<li><a href="" class="block py-[0.25rem] hover:text-blue-500">Sunglasses</a></li>
				</ul>
			</section>

			<section class="container mx-auto">
				<div class="flex justify-between">
					<p class="text-[1.5rem] font-[600] mb-[1.25rem]">Womens <span>(25)</span></p>
					<select name="" id="">
						<option value="Featured">Featured</option>
						<option value="Name Ascending">Name Ascending</option>
						<option value="Name Descending">Name Descending</option>
						<option value="Price Ascending">Price Ascending</option>
						<option value="Price Descending">Price Descending</option>
					</select>
				</div>
				<div class="grid grid-cols-3 gap-[1.25rem]">
					<div class="relative flex flex-wrap group h-[26.25rem] sm:h-[25.125rem] md:h-[26.75rem] lg:h-[20rem] xl:h-[27.125rem] overflow-hidden">
						<a href="">
							<span class="z-[1] absolute text-sm font-bold top-[0.625rem] left-[0.625rem] px-[0.375rem] py-[0.125rem] rounded text-white bg-[#F8353E]">Sale 13%</span>
							<div class="absolute">
								<img src="guest/images/index/TailoredFitMesh-PanelPolo_4_600x.jpg" class="relative z-[0] object-contain rounded-md">
								<div class="bg-white w-full mt-[0rem] lg:mt-[-0.5rem] xl:mt-[0.125rem] duration-500 lg:group-hover:mt-[-5rem] xl:group-hover:mt-[-2.375rem]">
									<div class="flex justify-between items-center text-sm pb-[0rem] xl:pb-[0.375rem]">
										<span class="uppercase text-[0.75rem]">Zara</span>
										<ul class="flex justify-center">
											<li class="mr-[0.188rem]">
												<i class="fa-solid fa-star text-[1rem] lg:text-[0.75rem] xl:text-[1rem] text-yellow-500"></i>
											</li>
											<li class="mr-[0.188rem]">
												<i class="fa-solid fa-star text-[1rem] lg:text-[0.75rem] xl:text-[1rem] text-yellow-500"></i>
											</li>
											<li class="mr-[0.188rem]">
												<i class="fa-solid fa-star text-[1rem] lg:text-[0.75rem] xl:text-[1rem] text-yellow-500"></i>
											</li>
											<li class="mr-[0.188rem]">
												<i class="fa-solid fa-star text-[1rem] lg:text-[0.75rem] xl:text-[1rem] text-yellow-500"></i>
											</li>
											<li>
												<i class="fa-regular fa-star text-[1rem] lg:text-[0.75rem] xl:text-[1rem] text-yellow-500"></i>
											</li>
										</ul>
									</div>
									<p class="text-sm font-bold pb-[0.15rem]">Tailored Fit Mesh-Panel Polo</p>
									<span class="text-red-500 text-[1rem] mr-2">$399.00</span>
									<span class="line-through text-[1rem]">$449.00</span>
									<a href="" class="flex items-center w-[9.019rem] mt-[0.625rem] text-sm p-2 rounded-md border border-blue-500 duration-500 text-blue-500 hover:text-white hover:bg-blue-500">
										<i class="fa-solid fa-cart-plus text-[1rem] mr-[0.5rem]"></i><span class="uppercase">Add to cart</span>
									</a>
								</div>
							</div>
						</a>
					</div>
					<div class="relative flex flex-wrap group h-[26.25rem] sm:h-[25.125rem] md:h-[26.75rem] lg:h-[20rem] xl:h-[27.125rem] overflow-hidden">
						<a href="">
							<span class="z-[1] absolute text-sm font-bold top-[0.625rem] left-[0.625rem] px-[0.375rem] py-[0.125rem] rounded text-white bg-[#F8353E]">Sale 13%</span>
							<div class="absolute">
								<img src="guest/images/index/TailoredFitMesh-PanelPolo_4_600x.jpg" class="relative z-[0] object-contain rounded-md">
								<div class="bg-white w-full pt-[0rem] mt-[0rem] lg:mt-[-0.5rem] xl:mt-[0.125rem] duration-500 lg:group-hover:mt-[-5rem] xl:group-hover:mt-[-2.375rem]">
									<div class="flex justify-between items-center text-sm pb-[0rem] xl:pb-[0.375rem]">
										<span class="uppercase text-[0.75rem]">Zara</span>
										<ul class="flex justify-center">
											<li class="mr-[0.188rem]">
												<i class="fa-solid fa-star text-[1rem] lg:text-[0.75rem] xl:text-[1rem] text-yellow-500"></i>
											</li>
											<li class="mr-[0.188rem]">
												<i class="fa-solid fa-star text-[1rem] lg:text-[0.75rem] xl:text-[1rem] text-yellow-500"></i>
											</li>
											<li class="mr-[0.188rem]">
												<i class="fa-solid fa-star text-[1rem] lg:text-[0.75rem] xl:text-[1rem] text-yellow-500"></i>
											</li>
											<li class="mr-[0.188rem]">
												<i class="fa-solid fa-star text-[1rem] lg:text-[0.75rem] xl:text-[1rem] text-yellow-500"></i>
											</li>
											<li>
												<i class="fa-regular fa-star text-[1rem] lg:text-[0.75rem] xl:text-[1rem] text-yellow-500"></i>
											</li>
										</ul>
									</div>
									<p class="text-sm font-bold pb-[0.15rem]">Tailored Fit Mesh-Panel Polo</p>
									<span class="text-red-500 text-[1rem] mr-2">$399.00</span>
									<span class="line-through text-[1rem]">$449.00</span>
									<a href="" class="flex items-center w-[9.019rem] mt-[0.625rem] text-sm p-2 rounded-md border border-blue-500 duration-500 text-blue-500 hover:text-white hover:bg-blue-500">
										<i class="fa-solid fa-cart-plus text-[1rem] mr-[0.5rem]"></i><span class="uppercase">Add to cart</span>
									</a>
								</div>
							</div>
						</a>
					</div>
					<div class="relative flex flex-wrap group h-[26.25rem] sm:h-[25.125rem] md:h-[26.75rem] lg:h-[20rem] xl:h-[27.125rem] overflow-hidden">
						<a href="">
							<span class="z-[1] absolute text-sm font-bold top-[0.625rem] left-[0.625rem] px-[0.375rem] py-[0.125rem] rounded text-white bg-[#F8353E]">Sale 13%</span>
							<div class="absolute">
								<img src="guest/images/index/TailoredFitMesh-PanelPolo_4_600x.jpg" class="relative z-[0] object-contain rounded-md">
								<div class="bg-white w-full pt-[0rem] mt-[0rem] lg:mt-[-0.5rem] xl:mt-[0.125rem] duration-500 lg:group-hover:mt-[-5rem] xl:group-hover:mt-[-2.375rem]">
									<div class="flex justify-between items-center text-sm pb-[0rem] xl:pb-[0.375rem]">
										<span class="uppercase text-[0.75rem]">Zara</span>
										<ul class="flex justify-center">
											<li class="mr-[0.188rem]">
												<i class="fa-solid fa-star text-[1rem] lg:text-[0.75rem] xl:text-[1rem] text-yellow-500"></i>
											</li>
											<li class="mr-[0.188rem]">
												<i class="fa-solid fa-star text-[1rem] lg:text-[0.75rem] xl:text-[1rem] text-yellow-500"></i>
											</li>
											<li class="mr-[0.188rem]">
												<i class="fa-solid fa-star text-[1rem] lg:text-[0.75rem] xl:text-[1rem] text-yellow-500"></i>
											</li>
											<li class="mr-[0.188rem]">
												<i class="fa-solid fa-star text-[1rem] lg:text-[0.75rem] xl:text-[1rem] text-yellow-500"></i>
											</li>
											<li>
												<i class="fa-regular fa-star text-[1rem] lg:text-[0.75rem] xl:text-[1rem] text-yellow-500"></i>
											</li>
										</ul>
									</div>
									<p class="text-sm font-bold pb-[0.15rem]">Tailored Fit Mesh-Panel Polo</p>
									<span class="text-red-500 text-[1rem] mr-2">$399.00</span>
									<span class="line-through text-[1rem]">$449.00</span>
									<a href="" class="flex items-center w-[9.019rem] mt-[0.625rem] text-sm p-2 rounded-md border border-blue-500 duration-500 text-blue-500 hover:text-white hover:bg-blue-500">
										<i class="fa-solid fa-cart-plus text-[1rem] mr-[0.5rem]"></i><span class="uppercase">Add to cart</span>
									</a>
								</div>
							</div>
						</a>
					</div>
				</div>
			</section>
		</div>
	</section>

	<x-guest.footer/>
</x-guest-layout>