<x-guest-layout>
	<section class="container mx-auto lg:max-w-[1024px] xl:max-w-[1100px] px-[10px]">
		<div class="grid grid-cols-1 lg:grid-cols-[58%_42%]">
			<div class="pr-0 lg:pr-[66px] pt-[66px] h-full border-0 lg:border-r-[2px]">
				<p class="text-[28px] text-[#333333] font-[600] mb-[15px]">Nguyet Anh Store</p>

				{{-- Mobile Order Summary --}}
					<div class="flex lg:hidden justify-between items-center border-t border-b">
						{{-- Mobile Order Summary: Button --}}
						<button class="text-[#198ec3] py-[18px] hover:text-[#136f99]" id="mobile-order-summary">
							<i class="fa-solid fa-cart-arrow-down mr-[10px]"></i><span class="mr-[10px]">Order summary</span><i class="fa-solid fa-angle-down" id="arrow"></i>
						</button>
					</div>
					{{-- Mobile Order Summary: Content --}}
					<div class="hidden" id="mobile-order-summary-content">
						<div class="flex lg:hidden flex-col gap-[24px] py-[24px]">
							<div class="relative flex items-center">
								<img src="guest/images/index/TailoredFitMesh-PanelPolo_4_600x.jpg" class="basis-[64px] h-[64px] border object-contain rounded-md"/>
								<span class="absolute top-[-4%] left-[7%] text-white text-[12px] px-[8px] py-[2px] bg-[#727272] rounded-[50%]">1</span>
								<div class="flex flex-wrap basis-[610px] ml-[14px]">
									<p class="w-full">Tailored Fit Mesh-Panel Polo</p>
									<span class="text-[12px] text-[#717171]">Blue</span>
								</div>
								<p class="basis-[60px] ml-[14px]">$400.00</p>
							</div>
						</div>
						
						<div class="flex lg:hidden justify-between items-center border-t border-b py-[24px]">
							<p class="text-[16px]">Total</p>
							<span class="text-[24px] font-[600]">$400.00</span>
						</div>
					</div>
				{{-- End of Mobile Order Summary --}}

				<div class="my-[26px]">
					<a href="" class="text-[#198ec3] hover:text-[#136f99]">Cart</a><i class="fa-solid fa-chevron-right text-[10px] text-[#737373] px-[6px]"></i><span class="text-[#333333]">Information</span><i class="fa-solid fa-chevron-right text-[10px] text-[#737373] px-[6px]"></i><span class="text-[#333333]">Shipping</span><i class="fa-solid fa-chevron-right text-[10px] text-[#737373] px-[6px]"></i><span class="text-[#333333]">Payment</span>
				</div>
				<form action="" method="" class="mb-[56px]">
					<label for="email" class="block mb-[20px] text-[#333333] text-[18px] w-full">Contact Information</label>
					<input type="text" id="email" class="w-full border rounded-md p-[12px] outline-none mb-[42px] duration-[500ms] focus:border-blue-500" placeholder="Email address or phone number"/>

					<p class="mb-[20px] text-[#333333] text-[18px] w-full">Shipping address</p>
					<div class="flex flex-wrap gap-[10px] justify-between mb-[30px]">
						<input type="text" class="basis-[48.95%] border rounded-md p-[12px] outline-none duration-[500ms] focus:border-blue-500" placeholder="First name"/>
						<input type="text" class="basis-[48.95%] border rounded-md p-[12px] outline-none duration-[500ms] focus:border-blue-500" placeholder="Last name"/>
						<input type="text" class="basis-[572px] border rounded-md p-[12px] outline-none duration-[500ms] focus:border-blue-500" placeholder="Address"/>
						<input type="text" class="basis-[48.95%] border rounded-md p-[12px] outline-none duration-[500ms] focus:border-blue-500" placeholder="City"/>
						<input type="number" class="basis-[48.95%] border rounded-md p-[12px] outline-none duration-[500ms] focus:border-blue-500" placeholder="ZIP code"/>
					</div>
					<div class="flex items-center gap-[20px]">
						<input type="submit" class="cursor-pointer text-center px-[26px] py-[20px] text-white bg-[#1990c6] hover:bg-[#136f99] rounded-md" value="Finish checking out"/>
						<a href="" class="text-[#1990c6] hover:text-[#136f99]">Return to cart</a>
					</div>
				</form>
				<div class="flex gap-[18px] items-center border-t">
					<a href="" class="text-[#1990c6] py-[14px] hover:text-[#136f99]">Refund policy</a>
					<a href="" class="text-[#1990c6] py-[14px] hover:text-[#136f99]">Privacy policy</a>
					<a href="" class="text-[#1990c6] py-[14px] hover:text-[#136f99]">Terms of service</a>
				</div>
			</div>

			<div class="hidden lg:block px-[44px] pt-[66px] h-full bg-[#fafafa] h-screen">
				<div class="relative flex items-center pb-[24px]">
					<img src="guest/images/index/TailoredFitMesh-PanelPolo_4_600x.jpg" class="basis-[64px] h-[64px] border object-contain rounded-md"/>
					<span class="absolute top-[-8%] left-[12%] text-white text-[12px] px-[8px] py-[2px] bg-[#727272] rounded-[50%]">1</span>
					<div class="flex flex-wrap basis-[260px] ml-[14px]">
						<p class="w-full">Tailored Fit Mesh-Panel Polo</p>
						<span class="text-[12px] text-[#717171]">Blue</span>
					</div>
					<p class="basis-[60px] ml-[14px]">$400.00</p>
				</div>
				<div class="relative flex items-center pb-[24px]">
					<img src="guest/images/index/TailoredFitMesh-PanelPolo_4_600x.jpg" class="basis-[64px] h-[64px] border object-contain rounded-md"/>
					<span class="absolute top-[-8%] left-[12%] text-white text-[12px] px-[8px] py-[2px] bg-[#727272] rounded-[50%]">1</span>
					<div class="flex flex-wrap basis-[260px] ml-[14px]">
						<p class="w-full">Tailored Fit Mesh-Panel Polo</p>
						<span class="text-[12px] text-[#717171]">Blue</span>
					</div>
					<p class="basis-[60px] ml-[14px]">$400.00</p>
				</div>
				
				<div class="flex justify-between items-center border-t pt-[24px]">
					<p class="text-[16px]">Total</p>
					<span class="text-[24px] font-[600]">$400.00</span>
				</div>
			</div>
		</div>
	</section>
</x-guest-layout>