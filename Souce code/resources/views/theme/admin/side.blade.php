<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true"
	data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
	data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
	data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
	<div class="aside-logo flex-column-auto" id="kt_aside_logo">
		<a href="{{ route('home') }}">
			<img alt="Logo" src="{{ asset('img/admin/logo.png') }}" class="h-25px logo" />
		</a>
		<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
			data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
			data-kt-toggle-name="aside-minimize">
			<span class="svg-icon svg-icon-1 rotate-180">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
					fill="none">
					<path opacity="0.5"
						d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
						fill="currentColor" />
					<path
						d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
						fill="currentColor" />
				</svg>
			</span>
		</div>
	</div>
	<div class="aside-menu flex-column-fluid">
		<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
			data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
			data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
			data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
			<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
				id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<span class="menu-link">
						<span class="menu-icon">
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
									viewBox="0 0 24 24" fill="none">
									<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
									<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
										fill="currentColor" />
									<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
										fill="currentColor" />
									<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
										fill="currentColor" />
								</svg>
							</span>
						</span>
						<span class="menu-title">Dashboards</span>
						<span class="menu-arrow"></span>
					</span>
					<div class="menu-sub menu-sub-accordion menu-active-bg">
						<div class="menu-item">
							<a class="menu-link" href="{{ route('admin.dashboard') }}">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Dashboard</span>
							</a>
						</div>
						<div class="menu-item">
							<a class="menu-link" href="{{ route('home') }}">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">User View</span>
							</a>
						</div>
					</div>
				</div>
				
				<div class="menu-item">
					<div class="menu-content pt-8 pb-2">
						<span class="menu-section text-muted text-uppercase fs-8 ls-1">Apps</span>
					</div>
				</div>
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<span class="menu-link">
						<span class="menu-icon">
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
									viewBox="0 0 24 24" fill="none">
									<path opacity="0.3"
										d="M18.041 22.041C18.5932 22.041 19.041 21.5932 19.041 21.041C19.041 20.4887 18.5932 20.041 18.041 20.041C17.4887 20.041 17.041 20.4887 17.041 21.041C17.041 21.5932 17.4887 22.041 18.041 22.041Z"
										fill="currentColor" />
									<path opacity="0.3"
										d="M6.04095 22.041C6.59324 22.041 7.04095 21.5932 7.04095 21.041C7.04095 20.4887 6.59324 20.041 6.04095 20.041C5.48867 20.041 5.04095 20.4887 5.04095 21.041C5.04095 21.5932 5.48867 22.041 6.04095 22.041Z"
										fill="currentColor" />
									<path opacity="0.3"
										d="M7.04095 16.041L19.1409 15.1409C19.7409 15.1409 20.141 14.7409 20.341 14.1409L21.7409 8.34094C21.9409 7.64094 21.4409 7.04095 20.7409 7.04095H5.44095L7.04095 16.041Z"
										fill="currentColor" />
									<path
										d="M19.041 20.041H5.04096C4.74096 20.041 4.34095 19.841 4.14095 19.541C3.94095 19.241 3.94095 18.841 4.14095 18.541L6.04096 14.841L4.14095 4.64095L2.54096 3.84096C2.04096 3.64096 1.84095 3.04097 2.14095 2.54097C2.34095 2.04097 2.94096 1.84095 3.44096 2.14095L5.44096 3.14095C5.74096 3.24095 5.94096 3.54096 5.94096 3.84096L7.94096 14.841C7.94096 15.041 7.94095 15.241 7.84095 15.441L6.54096 18.041H19.041C19.641 18.041 20.041 18.441 20.041 19.041C20.041 19.641 19.641 20.041 19.041 20.041Z"
										fill="currentColor" />
								</svg>
							</span>
						</span>
						<span class="menu-title">eCommerce</span>
						<span class="menu-arrow"></span>
					</span>
					<div class="menu-sub menu-sub-accordion">
						<div class="menu-item menu-accordion">
							<span class="menu-link">
								<span class="menu-bullet">
									<a href="{{ route('admin.productcategory.index') }}">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">
										<span class="menu-title">Kategori Produk</span>
									</a>
								</span>
							</span>
							<span class="menu-link">
								<span class="menu-bullet">
									<a href="{{ route('admin.product.index') }}">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">
									<span class="menu-title">Produk</span>
								</span>
								</a>
							</span>
							<span class="menu-link">
								<span class="menu-bullet">
									<a href="{{ route('admin.order.index') }}">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">
									<span class="menu-title">Order</span>
								</span>
								</a>
							</span>
						</div>
					</div>
				</div>
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<a href="{{ route('admin.critics.index') }}"><span class="menu-link">
						<span class="menu-icon">
							<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"></path>
									<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"></path>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-title">Kritik dan Saran</span>
					</span></a>
				</div>
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
					<a href="{{ route('admin.review.index') }}"><span class="menu-link">
						<span class="menu-icon">
							<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"></path>
									<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"></path>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-title">Review</span>
					</span></a>
				</div>
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
					<a href="{{ route('admin.webprofile.index') }}"><span class="menu-link">
						<span class="menu-icon">
							<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
							<span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
									<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="currentColor"></path>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-title">Web Profile</span>
					</span></a>
				</div>
			</div>
			<!--end::Menu-->
		</div>
		<!--end::Aside Menu-->
	</div>
	<!--end::Aside menu-->
	
</div>