<x-guest-layout>
	<x-guest.header>
		<div class="uppercase font-bold rounded-b-md rounded-t-md px-[1.125rem] py-[13px] text-[1rem] text-white bg-blue-500 cursor-pointer" id="primary-navigation-button">Categories</div>
		<div class="hidden fixed top-[180px] w-[280px] z-[2]" id="primary-navigation-toggle">
			<x-guest.primary-navigation/>
		</div>
	</x-guest.header>

	<x-guest.sticky-navigation/>

	<x-guest.mobile-navigation/>

	<x-guest.back-to-top/>

	<div class="bg-[#f7f8fa]">
		<div class="mx-auto max-w-[61.875rem] xl:max-w-[75rem] my-[1.25rem] px-[0.625rem] py-[0.375rem] text-[0.75rem] text-[#777777]"><a href="" class="hover:text-blue-500">Home</a> / <a href="" class="hover:text-blue-500">Womens</a> / Tailored Fit Mesh-Panel Polo</div>
	</div>

	<section class="lg:container mx-auto">
		<div class="grid grid-cols-[49.49%_46.39%] lg:grid-cols-[350px_310px_230px] xl:grid-cols-[430px_400px_270px] gap-[2.5rem] px-[0.625rem] mx-auto max-w-[61.875rem] xl:max-w-[75rem] px-[0.625rem] mb-[3.75rem]">
			<img src="guest/images/index/TailoredFitMesh-PanelPolo_4_600x.jpg" class="object-contain rounded-md w-full col-span-2 md:col-span-1">
			<div class="col-span-2 md:col-span-1">
				<p class="text-[24px] lg:text-[1.875rem] font-[600] text-[#191919] w-full mb-[0.375rem]">Tailored Fit Mesh-Panel Polo</p>
				<p class="text-[24px] lg:text-[1.875rem] font-[600] text-[#f8353e] w-full mb-[0.625rem]">$400.00 <span class="line-through text-[#2879fe]">$460.00</span></p>
				<ul class="flex mb-[2.25rem]">
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

				{{-- Modal Show: Size Guide --}}
				<div class="text-[1rem] text-[#2879fe] cursor-pointer" id="modal-show-size-guide">
					<i class="fa-solid fa-ruler-horizontal mr-[0.625rem] mb-[2rem]"></i> Size guide
				</div>
				{{-- Modal Content: Size Guide --}}
				<div class="hidden fixed z-[2] top-[0px] left-[0px] w-full h-full bg-black-0.4" id="modal-content-size-guide">
					<div class="relative top-[120px] left-[12%] xl:left-[18.25%] w-[76%] xl:w-[63.5%] bg-white p-[40px] rounded-md shadow-md overflow-x-auto">
						{{-- Modal Close: Size Guide --}}
						<button class="absolute top-[0px] right-[0px] p-[20px] text-[20px] duration-[500ms] hover:text-red-600" id="modal-close-size-guide">
							<i class="fa-solid fa-xmark"></i>
						</button>
						<p class="uppercase text-center text-[#191919] text-[1rem] font-[600] mb-[6px]">Size guide</p>
						<p class="text-center text-[#777777] mb-[6px]">This is an approximate conversion table to help you find your size.</p>
						<table class="table-auto w-[100%] text-center">
							<thead>
								<tr>
									<th class="p-[10px] w-[11.11%]">Italian</th>
									<th class="p-[10px] w-[11.11%]">Spanish</th>
									<th class="p-[10px] w-[11.11%]">German</th>
									<th class="p-[10px] w-[11.11%]">UK</th>
									<th class="p-[10px] w-[11.11%]">US</th>
									<th class="p-[10px] w-[11.11%]">Japanese</th>
									<th class="p-[10px] w-[11.11%]">Chinese</th>
									<th class="p-[10px] w-[11.11%]">Russian</th>
									<th class="p-[10px] w-[11.11%]">Korean</th>
								</tr>
							</thead>
							<tbody>
								<tr class="bg-[#f4f5f7]">
									<td class="p-[10px]">34</td>
									<td>30</td>
									<td>28</td>
									<td>4</td>
									<td>0</td>
									<td>3</td>
									<td>155/75A</td>
									<td>36</td>
									<td>44</td>
								</tr>
								<tr>
									<td>36</td>
									<td>32</td>
									<td>30</td>
									<td>6</td>
									<td>0</td>
									<td>5</td>
									<td>155/80A</td>
									<td>38</td>
									<td>44</td>
								</tr>
								<tr class="bg-[#f4f5f7]">
									<td class="p-[10px]">38</td>
									<td>34</td>
									<td>32</td>
									<td>8</td>
									<td>2</td>
									<td>7</td>
									<td>160/84A</td>
									<td>40</td>
									<td>55</td>
								</tr>
								<tr>
									<td>40</td>
									<td>36</td>
									<td>34</td>
									<td>10</td>
									<td>4</td>
									<td>9</td>
									<td>165/88A</td>
									<td>42</td>
									<td>55</td>
								</tr>
								<tr class="bg-[#f4f5f7]">
									<td class="p-[10px]">42</td>
									<td>38</td>
									<td>36</td>
									<td>12</td>
									<td>6</td>
									<td>11</td>
									<td>170/92A</td>
									<td>44</td>
									<td>66</td>
								</tr>
								<tr>
									<td>44</td>
									<td>40</td>
									<td>38</td>
									<td>14</td>
									<td>8</td>
									<td>13</td>
									<td>175/96A</td>
									<td>46</td>
									<td>66</td>
								</tr>
								<tr class="bg-[#f4f5f7]">
									<td class="p-[10px]">46</td>
									<td>42</td>
									<td>40</td>
									<td>16</td>
									<td>10</td>
									<td>15</td>
									<td>170/98A</td>
									<td>48</td>
									<td>77</td>
								</tr>
								<tr>
									<td>48</td>
									<td>44</td>
									<td>42</td>
									<td>18</td>
									<td>12</td>
									<td>17</td>
									<td>170/100B</td>
									<td>50</td>
									<td>77</td>
								</tr>
								<tr class="bg-[#f4f5f7]">
									<td class="p-[10px]">50</td>
									<td>46</td>
									<td>44</td>
									<td>20</td>
									<td>14</td>
									<td>19</td>
									<td>175/100B</td>
									<td>52</td>
									<td>88</td>
								</tr>
								<tr>
									<td>52</td>
									<td>48</td>
									<td>46</td>
									<td>22</td>
									<td>16</td>
									<td>21</td>
									<td>180/104B</td>
									<td>54</td>
									<td>88</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="flex gap-[5%] justify-between mb-[0.375rem]">
					<input type="number" class="border rounded-md outline-none font-[600] text-center text-[1.25rem] px-[1.25rem] py-[1rem] basis-[30%] max-w-[30%] bg-[#f7f8fa] focus:border-blue-500" min="1" value="1"/>
					<button class="text-blue-500 border basis-[65%] max-w-[65%] border-blue-500 text-[1rem] font-[600] uppercase px-[1.25rem] py-[0.625rem] rounded-md duration-[500ms] hover:text-white hover:bg-blue-600">Add to cart</button>
				</div>
				<p class="text-[0.875rem] text-[#191919] w-full mb-[0.375rem]">Vendor: <span class="text-[#999999]">Zara</span></p>
				<p class="text-[0.875rem] text-[#191919] w-full mb-[0.375rem]">Product Type: <span class="text-[#999999]">Polo</span></p>
				<p class="text-[0.875rem] text-[#191919] w-full mb-[0.375rem]">SKU: <span class="text-[#999999]">462</span></p>
				<p class="text-[0.875rem] text-[#191919] w-full mb-[1.125rem]">Availability: <span class="text-[#999999]">in stock</span></p>
			</div>
			<div class="col-span-2 w-full lg:col-span-1 grid grid-cols-[6%_90.82%] lg:grid-cols-[18.51%_76.31%] gap-[14px] mx-auto p-[14px] h-fit border rounded-md">
				<i class="fa-solid fa-truck-fast text-blue-500 text-[36px] duration-500 group-hover:text-blue-500"></i>
				<div class="">
					<p class="uppercase font-bold text-[16px]">Free shipping</p>
					<p class="text-[14px]">Free shipping on all Ho Chi Minh City or order above $99.00</p>
				</div>
				<i class="fa-solid fa-headset text-blue-500 text-[36px] duration-500 group-hover:text-blue-500"></i>
				<div class="">
					<p class="uppercase font-bold text-[16px]">Support 24/7</p>
					<p class="text-[14px]">Contact us 24 hours a day, 7 days a week</p>
				</div>
				<i class="fa-solid fa-arrows-rotate text-blue-500 text-[36px] duration-500 group-hover:text-blue-500"></i>
				<div class="">
					<p class="uppercase font-bold text-[16px]">30 days return</p>
					<p class="text-[14px]">Simply return it within 24 days for an exchange</p>
				</div>
			</div>
		</div>
	</section>

	<section class="container mx-auto mt-[3.75rem]">
		{{-- Product Description Tabs --}}
		<div class="grid grid-cols-1 gap-[1.25rem] mx-auto max-w-[61.875rem] xl:max-w-[75rem] px-[0.625rem] mb-[2.5rem]">
			{{-- Product Description Tabs: Navigation --}}
			<ul class="text-[#999999] font-[600] uppercase" id="product-description-tabs">
				<li class="inline-block pr-[0.625rem] text-[#191919] duration-[500ms] cursor-pointer hover:text-[#191919]" data-value="#description">Description</li>
				<li class="inline-block px-[0.625rem] duration-[500ms] cursor-pointer hover:text-[#191919]" data-value="#general-tab">General Tab</li>
				<li class="inline-block pl-[0.625rem] duration-[500ms] cursor-pointer hover:text-[#191919]" data-value="#reviews">Reviews</li>
			</ul>

			{{-- Product Description Tabs: Content --}}
			<ul id="product-description-tabs-content">
				<li class="text-[#777777]" id="description">Duis at lectus vitae nibh interdum fringilla ac at massa. Fusce sem lacus, porttitor at libero et, pretium accumsan purus. Duis metus nulla, commodo et enim vel, tincidunt mattis lorem. Pellentesque dignissim tincidunt sem, id eleifend ligula bibendum a. Aenean eu risus vitae elit tincidunt malesuada id id mauris. Nulla id pulvinar enim. Suspendisse volutpat tortor quam, id dignissim libero ultricies in. Nam eget scelerisque enim.</li>
				{{-- Product Description: General Tab --}}
				<li class="hidden text-[#191919]" id="general-tab">
					<p>
						<span class="inline-block w-[4.625rem]">Color: </span><span class="text-[#777777]">Blue, Purple, White</span>
					</p>
					<p>
						<span class="inline-block w-[4.625rem]">Size: </span><span class="text-[#777777]">20, 24</span>
					</p>
					<p>
						<span class="inline-block w-[4.625rem]">Material: </span><span class="text-[#777777]">100% Polyester</span>
					</p>
				</li>
				{{-- Product Description: Review --}}
				<li class="hidden text-[#191919]" id="reviews">
					<div class="pb-[1.5rem]">
						<p class="text-[1rem] font-[600] uppercase">USER #814</p>
						<p class="text-[0.75rem] mb-[0.875rem]">Reviewd on Apr 1, 2022</p>
						<p class="text-[0.875rem] text-[#777777]">Very Good</p>
					</div>
					<div class="py-[1.5rem] border-t">
						<p class="text-[1rem] font-[600] uppercase">USER #275</p>
						<p class="text-[0.75rem] mb-[0.875rem]">Reviewd on Mar 27, 2022</p>
						<p class="text-[0.875rem] text-[#777777]">Above Average</p>
					</div>
					<div class="pt-[1.5rem] border-t">
						<p class="text-[1rem] font-[600] uppercase">USER #390</p>
						<p class="text-[0.75rem] mb-[0.875rem]">Reviewd on Feb 17, 2022</p>
						<p class="text-[0.875rem] text-[#777777]">Good</p>
					</div>
				</li>
			</ul>
		</div>
	</section>

	</section class="container mx-auto">
		<div class="grid grid-cols-1 gap-[1.25rem] mx-auto sm:max-w-[40rem] md:max-w-[48rem] lg:max-w-[61.875rem] xl:max-w-[75rem] px-[0.625rem] mb-[2.5rem]">
			<p class="uppercase font-[600] text-[#191919]">Related Products</p>
			<div class="owl-carousel owl-theme">
				<div class="item">
					<a href="">
						<div class="relative flex flex-wrap group h-[53.75rem] sm:h-[28.125rem] md:h-[33.75rem] lg:h-[21.875rem] xl:h-[23.75rem] overflow-hidden">
							<span class="z-[1] absolute text-sm font-bold top-[0.625rem] left-[0.625rem] px-[0.375rem] py-[0.125rem] rounded text-white bg-[#f8353e]">Sale 13%</span>
							<div class="absolute">
								<img src="guest/images/index/TailoredFitMesh-PanelPolo_4_600x.jpg" class="relative z-[-1] object-contain rounded-md">
								<div class="bg-white w-full pt-[0.625rem] mt-[0rem] lg:mt-[-0.5rem] xl:mt-[-3.125rem] duration-500 sm:group-hover:mt-[-3.25rem] md:group-hover:mt-[-2.75rem] lg:group-hover:mt-[-4.125rem] xl:group-hover:mt-[-6.625rem]">
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
						</div>
					</a>
				</div>
				<div class="item">
					<a href="">
						<div class="relative flex flex-wrap group h-[53.75rem] sm:h-[28.125rem] md:h-[33.75rem] lg:h-[21.875rem] xl:h-[23.75rem] overflow-hidden">
							<span class="z-[1] absolute text-sm font-bold top-[0.625rem] left-[0.625rem] px-[0.375rem] py-[0.125rem] rounded text-white bg-[#f8353e]">Sale 13%</span>
							<div class="absolute">
								<img src="guest/images/index/TailoredFitMesh-PanelPolo_4_600x.jpg" class="relative z-[-1] object-contain rounded-md">
								<div class="bg-white w-full pt-[0.625rem] mt-[0rem] lg:mt-[-0.5rem] xl:mt-[-3.125rem] duration-500 sm:group-hover:mt-[-3.25rem] md:group-hover:mt-[-2.75rem] lg:group-hover:mt-[-4.125rem] xl:group-hover:mt-[-6.625rem]">
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
						</div>
					</a>
				</div>
				<div class="item">
					<a href="">
						<div class="relative flex flex-wrap group h-[53.75rem] sm:h-[28.125rem] md:h-[33.75rem] lg:h-[21.875rem] xl:h-[23.75rem] overflow-hidden">
							<span class="z-[1] absolute text-sm font-bold top-[0.625rem] left-[0.625rem] px-[0.375rem] py-[0.125rem] rounded text-white bg-[#f8353e]">Sale 13%</span>
							<div class="absolute">
								<img src="guest/images/index/TailoredFitMesh-PanelPolo_4_600x.jpg" class="relative z-[-1] object-contain rounded-md">
								<div class="bg-white w-full pt-[0.625rem] mt-[0rem] lg:mt-[-0.5rem] xl:mt-[-3.125rem] duration-500 sm:group-hover:mt-[-3.25rem] md:group-hover:mt-[-2.75rem] lg:group-hover:mt-[-4.125rem] xl:group-hover:mt-[-6.625rem]">
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
						</div>
					</a>
				</div>
				<div class="item">
					<a href="">
						<div class="relative flex flex-wrap group h-[53.75rem] sm:h-[28.125rem] md:h-[33.75rem] lg:h-[21.875rem] xl:h-[23.75rem] overflow-hidden">
							<span class="z-[1] absolute text-sm font-bold top-[0.625rem] left-[0.625rem] px-[0.375rem] py-[0.125rem] rounded text-white bg-[#f8353e]">Sale 13%</span>
							<div class="absolute">
								<img src="guest/images/index/TailoredFitMesh-PanelPolo_4_600x.jpg" class="relative z-[-1] object-contain rounded-md">
								<div class="bg-white w-full pt-[0.625rem] mt-[0rem] lg:mt-[-0.5rem] xl:mt-[-3.125rem] duration-500 sm:group-hover:mt-[-3.25rem] md:group-hover:mt-[-2.75rem] lg:group-hover:mt-[-4.125rem] xl:group-hover:mt-[-6.625rem]">
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
						</div>
					</a>
				</div>
				<div class="item">
					<a href="">
						<div class="relative flex flex-wrap group h-[53.75rem] sm:h-[28.125rem] md:h-[33.75rem] lg:h-[21.875rem] xl:h-[23.75rem] overflow-hidden">
							<span class="z-[1] absolute text-sm font-bold top-[0.625rem] left-[0.625rem] px-[0.375rem] py-[0.125rem] rounded text-white bg-[#f8353e]">Sale 13%</span>
							<div class="absolute">
								<img src="guest/images/index/TailoredFitMesh-PanelPolo_4_600x.jpg" class="relative z-[-1] object-contain rounded-md">
								<div class="bg-white w-full pt-[0.625rem] mt-[0rem] lg:mt-[-0.5rem] xl:mt-[-3.125rem] duration-500 sm:group-hover:mt-[-3.25rem] md:group-hover:mt-[-2.75rem] lg:group-hover:mt-[-4.125rem] xl:group-hover:mt-[-6.625rem]">
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
						</div>
					</a>
				</div>
			</div>
		</div>
	<section>

	<x-guest.footer/>

</x-guest-layout>