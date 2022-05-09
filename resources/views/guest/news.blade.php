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
		<div class="mx-auto max-w-[61.875rem] xl:max-w-[75rem] my-[1.25rem] px-[0.625rem] py-[0.375rem] text-[0.75rem] text-[#777777]"><a href="" class="hover:text-blue-500">Home</a> / News</div>
	</div>

	<section class="container mx-auto">
		<div class="grid grid-cols-1 gap-[1.25rem] mx-auto max-w-[61.875rem] xl:max-w-[75rem] px-[0.625rem] mb-[3.75rem]">
			<p class="py-[50px] border-b uppercase text-center text-[34px]">News</p>

			<div class="mx-auto grid md:grid-cols-1 lg:grid-cols-[480px_360px] gap-[40px] mb-[60px]">
				<img src="assets/images/news/bl_07_1024x1024.webp" class="object-contain" alt="">
				<article>
					<p class="text-blue-500 text-[14px] font-[600] uppercase">Ladies</p>
					<p class="text-[30px] mb-[24px]">Vulputate pellentesque</p>
					<p class="text-[14px] mb-[24px]">Morbi elementum eleifend ex id viverra. Vestibulum varius tellus id sapien vulputate pellentesque. Cras molestie aliquet leo.</p>
					<p class="text-blue-500 text-[12px] text-[#999999] mb-[34px]">by <span class="text-[#191919]">Admin</span> on March 22, 2022</p>
					<button class="px-[20px] py-[10px] text-blue-500 border border-blue-500 uppercase rounded-md duration-[500ms] font-[600] hover:text-white hover:bg-blue-500">Read more</button>
				</article>
			</div>
			<div class="mx-auto grid md:grid-cols-1 lg:grid-cols-[480px_360px] gap-[40px] mb-[60px]">
				<img src="assets/images/news/bl_07_1024x1024.webp" class="object-contain" alt="">
				<article>
					<p class="text-blue-500 text-[14px] font-[600] uppercase">Ladies</p>
					<p class="text-[30px] mb-[24px]">Vulputate pellentesque</p>
					<p class="text-[14px] mb-[24px]">Morbi elementum eleifend ex id viverra. Vestibulum varius tellus id sapien vulputate pellentesque. Cras molestie aliquet leo.</p>
					<p class="text-blue-500 text-[12px] text-[#999999] mb-[34px]">on March 22, 2022</p>
					<button class="px-[20px] py-[10px] text-blue-500 border border-blue-500 uppercase rounded-md duration-[500ms] font-[600] hover:text-white hover:bg-blue-500">Read more</button>
				</article>
			</div>
		</div>
	</section>

	<x-guest.footer/>
</x-guest-layout>