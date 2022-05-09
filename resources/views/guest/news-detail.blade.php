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
		<div class="mx-auto max-w-[61.875rem] xl:max-w-[75rem] my-[1.25rem] px-[0.625rem] py-[0.375rem] text-[0.75rem] text-[#777777]"><a href="" class="hover:text-blue-500">Home</a> / <a href="" class="hover:text-blue-500">News</a> / Details</div>
	</div>

	<section class="container mx-auto">
		<div class="mx-auto max-w-[61.875rem] xl:max-w-[75rem] px-[0.625rem] mb-[3.75rem]">
			<p class="pt-[50px] mb-[20px] uppercase text-center text-[34px]">News detail</p>
			<p class="text-blue-500 text-[12px] text-[#999999] text-center pb-[34px] border-b">by <span class="text-[#191919]">Admin</span> on March 22, 2022</p>
			<div class="mx-auto mt-[30px]">
				<article>
					<p>Praesent sagittis posuere libero quis fermentum. Nullam nec lacus sit amet velit faucibus sollicitudin. Mauris porttitor pretium ultricies. Vivamus lobortis viverra sem, quis condimentum diam mollis non. Nullam nec ultrices massa, eu congue erat. Duis tincidunt bibendum venenatis. Morbi cursus risus metus, eget fermentum mi convallis ut. Duis non mi quam.
					Mauris blandit et felis maximus porta. Aliquam bibendum metus ut consectetur pellentesque. Sed hendrerit ligula nec ante porttitor dignissim. Nullam turpis sem, sagittis ut congue et, iaculis at sem. Ut posuere dictum facilisis. Morbi posuere vel velit in elementum. In hac habitasse platea dictumst. Cras eleifend dictum enim eu facilisis.
					Duis magna velit, dapibus volutpat tempus placerat, lobortis et augue. Proin ut sagittis nunc. In in tincidunt nibh. Ut aliquet sit amet ipsum vel laoreet. Vivamus at urna mi. Quisque aliquet tortor quis libero congue, eget fringilla lacus porttitor. Proin ac magna at nunc consectetur imperdiet. Sed tortor nulla, feugiat venenatis egestas pellentesque, eleifend id est. Mauris ac iaculis enim, at egestas nisl.</p>
				</article>
			</div>
		</div>
	</section>

	<x-guest.footer/>
</x-guest-layout>