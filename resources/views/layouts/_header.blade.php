<div id="kt_app_header" class="app-header">
    <!--begin::Header secondary-->
    <div class="app-header-secondary" data-kt-sticky="true" data-kt-sticky-name="app-header-secondary-sticky"
         data-kt-sticky-offset="{default: 'false', lg: '300px'}">
        <!--begin::Header secondary container-->
        <div class="app-container container-xxl d-flex align-items-stretch py-5 py-lg-0"
             id="kt_app_header_secondary_container">
            <!--begin::Header secondary-->
            <div class="app-navbar-item d-flex flex-stack flex-row-fluid">
                <!--begin::Logo wrapper-->
                <div class="d-flex align-items-center">
                    <!--begin::Header mobile toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show sidebar menu">
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
                            <i class="ki-duotone ki-abstract-14 fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                    </div>
                    <!--end::Header mobile toggle-->
                    <!--begin::Logo-->
                    <a href="{{route('home')}}" class="d-flex align-items-center me-2">
                        <img alt="Logo" src="{{asset('assets/media/logos/demo-28-small.svg')}}"
                             class="h-20px d-sm-none d-inline theme-light-show"/>
                        <img alt="Logo" src="{{asset('assets/media/logos/demo-28.svg')}}"
                             class="h-20px h-lg-25px theme-light-show d-none d-sm-inline"/>
                        <img alt="Logo" src="{{asset('assets/media/logos/demo-28-dark.png')}}"
                             class="h-20px h-lg-25px theme-dark-show"/>
                    </a>
                    <!--end::Logo-->
                </div>
                <!--end::Logo wrapper-->
                <!--begin::Wrapper-->
                <div class="d-flex align-items-center">
                    <!--begin::Filter menu-->
                    <select name="campaign-type" data-control="select2" data-hide-search="true"
                            class="form-select form-select-lg w-90px w-sm-125px fs-6 text-gray-600 ps-4 border-gray-300">
                        <option value="Twitter" selected="selected">ALL</option>
                        <option value="Twitter">Books</option>
                        <option value="Twitter">Computers</option>
                        <option value="Twitter">Deals</option>
                        <option value="Twitter">Movies</option>
                    </select>
                    <!--end::Filter menu-->
                    <!--begin::Search-->
                    <div class="d-flex align-items-center mx-3">
                        <!--begin::Search-->
                        <div id="kt_header_search"
                             class="header-search d-flex align-items-center search-custom w-lg-400px"
                             data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter"
                             data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto"
                             data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
                            <!--begin::Tablet and mobile search toggle-->
                            <div data-kt-search-element="toggle"
                                 class="search-toggle-mobile d-flex d-lg-none align-items-center">
                                <div class="d-flex">
                                    <i class="ki-duotone ki-magnifier fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                            </div>
                            <!--end::Tablet and mobile search toggle-->
                            <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                            <form data-kt-search-element="form"
                                  class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                                <!--begin::Hidden input(Added to disable form autocomplete)-->
                                <input type="hidden"/>
                                <!--end::Hidden input-->
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--end::Icon-->
                                <!--begin::Input-->
                                <input type="text" class="search-input form-control form-control-lg ps-13" name="search"
                                       value="" placeholder="Search..." data-kt-search-element="input"/>
                                <!--end::Input-->
                                <!--begin::Spinner-->
                                <span
                                    class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                    data-kt-search-element="spinner">
													<span
                                                        class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
												</span>
                                <!--end::Spinner-->
                                <!--begin::Reset-->
                                <span
                                    class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                                    data-kt-search-element="clear">
													<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
                                <!--end::Reset-->
                            </form>
                            <!--end::Form-->
                            <!--begin::Menu-->
                            <div data-kt-search-element="content"
                                 class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
                                <!--begin::Wrapper-->
                                <div data-kt-search-element="wrapper">
                                    <!--begin::Recently viewed-->
                                    <div data-kt-search-element="results" class="d-none">
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-200px mh-lg-350px">
                                            <!--begin::Category title-->
                                            <h3 class="fs-5 text-muted m-0 pb-5"
                                                data-kt-search-element="category-title">Users</h3>
                                            <!--end::Category title-->
                                            <!--begin::Item-->
                                            <a href="#"
                                               class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-6.jpg" alt=""/>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Karina Clark</span>
                                                    <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                               class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-2.jpg" alt=""/>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                    <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                               class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-9.jpg" alt=""/>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Ana Clark</span>
                                                    <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                               class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-14.jpg" alt=""/>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                    <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                               class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
                                                    <img src="assets/media/avatars/300-11.jpg" alt=""/>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                    <span
                                                        class="fs-7 fw-semibold text-muted">System Administrator</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Category title-->
                                            <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                data-kt-search-element="category-title">Customers</h3>
                                            <!--end::Category title-->
                                            <!--begin::Item-->
                                            <a href="#"
                                               class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<img class="w-20px h-20px"
                                                                             src="assets/media/svg/brand-logos/volicity-9.svg"
                                                                             alt=""/>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Company Rbranding</span>
                                                    <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                               class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<img class="w-20px h-20px"
                                                                             src="assets/media/svg/brand-logos/tvit.svg"
                                                                             alt=""/>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                    <span class="fs-7 fw-semibold text-muted">Web Development</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                               class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<img class="w-20px h-20px"
                                                                             src="assets/media/svg/misc/infography.svg"
                                                                             alt=""/>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Business Analytics App</span>
                                                    <span class="fs-7 fw-semibold text-muted">Administration</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                               class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<img class="w-20px h-20px"
                                                                             src="assets/media/svg/brand-logos/leaf.svg"
                                                                             alt=""/>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                                    <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                               class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<img class="w-20px h-20px"
                                                                             src="assets/media/svg/brand-logos/tower.svg"
                                                                             alt=""/>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column justify-content-start fw-semibold">
                                                    <span class="fs-6 fw-semibold">Tower Group Website</span>
                                                    <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Category title-->
                                            <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                data-kt-search-element="category-title">Projects</h3>
                                            <!--end::Category title-->
                                            <!--begin::Item-->
                                            <a href="#"
                                               class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-notepad fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																			<span class="path5"></span>
																		</i>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                                                    <span class="fs-7 fw-semibold text-muted">#45670</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                               class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-frame fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                                                    <span class="fs-7 fw-semibold text-muted">#45690</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                               class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-message-text-2 fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span
                                                        class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
                                                    <span class="fs-7 fw-semibold text-muted">#21090</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <a href="#"
                                               class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-profile-circle fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                                                    <span class="fs-7 fw-semibold text-muted">#34560</span>
                                                </div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Recently viewed-->
                                    <!--begin::Recently viewed-->
                                    <div class="" data-kt-search-element="main">
                                        <!--begin::Heading-->
                                        <div class="d-flex flex-stack fw-semibold mb-4">
                                            <!--begin::Label-->
                                            <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                            <!--end::Label-->
                                            <!--begin::Toolbar-->
                                            <div class="d-flex" data-kt-search-element="toolbar">
                                                <!--begin::Preferences toggle-->
                                                <div data-kt-search-element="preferences-show"
                                                     class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle="
                                                     title="Show search preferences">
                                                    <i class="ki-duotone ki-setting-2 fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                                <!--end::Preferences toggle-->
                                                <!--begin::Advanced search toggle-->
                                                <div data-kt-search-element="advanced-options-form-show"
                                                     class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1"
                                                     data-bs-toggle="tooltip" title="Show more search options">
                                                    <i class="ki-duotone ki-down fs-2"></i>
                                                </div>
                                                <!--end::Advanced search toggle-->
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Items-->
                                        <div class="scroll-y mh-200px mh-lg-325px">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-laptop fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                       class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp
                                                        by Keenthemes</a>
                                                    <span class="fs-7 text-muted fw-semibold">#45789</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-chart-simple fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                       class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept
                                                        API Project Meeting</a>
                                                    <span class="fs-7 text-muted fw-semibold">#84050</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-chart fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                       class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI
                                                        Monitoring App Launch</a>
                                                    <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                       class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project
                                                        Reference FAQ</a>
                                                    <span class="fs-7 text-muted fw-semibold">#67945</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-sms fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                       class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro
                                                        App Development</a>
                                                    <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-bank fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                       class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix
                                                        Mobile App</a>
                                                    <span class="fs-7 text-muted fw-semibold">#45690</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<i class="ki-duotone ki-chart-line-down fs-2 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a href="#"
                                                       class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing
                                                        UI Design" Launch</a>
                                                    <span class="fs-7 text-muted fw-semibold">#24005</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Recently viewed-->
                                    <!--begin::Empty-->
                                    <div data-kt-search-element="empty" class="text-center d-none">
                                        <!--begin::Icon-->
                                        <div class="pt-10 pb-10">
                                            <i class="ki-duotone ki-search-list fs-4x opacity-50">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Message-->
                                        <div class="pb-15 fw-semibold">
                                            <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                            <div class="text-muted fs-7">Please try again with a different query</div>
                                        </div>
                                        <!--end::Message-->
                                    </div>
                                    <!--end::Empty-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Preferences-->
                                <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                    <!--begin::Heading-->
                                    <h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <input type="text" class="form-control form-control-sm form-control-solid"
                                               placeholder="Contains the word" name="query"/>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <!--begin::Radio group-->
                                        <div class="nav-group nav-group-fluid">
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type" value="has"
                                                       checked="checked"/>
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type" value="users"/>
                                                <span
                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type" value="orders"/>
                                                <span
                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="type" value="projects"/>
                                                <span
                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Radio group-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <input type="text" name="assignedto"
                                               class="form-control form-control-sm form-control-solid"
                                               placeholder="Assigned to" value=""/>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <input type="text" name="collaborators"
                                               class="form-control form-control-sm form-control-solid"
                                               placeholder="Collaborators" value=""/>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <!--begin::Radio group-->
                                        <div class="nav-group nav-group-fluid">
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="attachment" value="has"
                                                       checked="checked"/>
                                                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
                                            </label>
                                            <!--end::Option-->
                                            <!--begin::Option-->
                                            <label>
                                                <input type="radio" class="btn-check" name="attachment" value="any"/>
                                                <span
                                                    class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Radio group-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-5">
                                        <select name="timezone" aria-label="Select a Timezone" data-control="select2"
                                                data-dropdown-parent="#kt_header_search" data-placeholder="date_period"
                                                class="form-select form-select-sm form-select-solid">
                                            <option value="next">Within the next</option>
                                            <option value="last">Within the last</option>
                                            <option value="between">Between</option>
                                            <option value="on">On</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-8">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <input type="number" name="date_number"
                                                   class="form-control form-control-sm form-control-solid"
                                                   placeholder="Lenght" value=""/>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <select name="date_typer" aria-label="Select a Timezone"
                                                    data-control="select2" data-dropdown-parent="#kt_header_search"
                                                    data-placeholder="Period"
                                                    class="form-select form-select-sm form-select-solid">
                                                <option value="days">Days</option>
                                                <option value="weeks">Weeks</option>
                                                <option value="months">Months</option>
                                                <option value="years">Years</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset"
                                                class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                data-kt-search-element="advanced-options-form-cancel">Cancel
                                        </button>
                                        <a href="utilities/search/horizontal.html"
                                           class="btn btn-sm fw-bold btn-primary"
                                           data-kt-search-element="advanced-options-form-search">Search</a>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Preferences-->
                                <!--begin::Preferences-->
                                <form data-kt-search-element="preferences" class="pt-1 d-none">
                                    <!--begin::Heading-->
                                    <h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="pb-4 border-bottom">
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
                                            <input class="form-check-input" type="checkbox" value="1"
                                                   checked="checked"/>
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="py-4 border-bottom">
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
                                            <input class="form-check-input" type="checkbox" value="1"
                                                   checked="checked"/>
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="py-4 border-bottom">
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
                                            <input class="form-check-input" type="checkbox" value="1"/>
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="py-4 border-bottom">
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
                                            <input class="form-check-input" type="checkbox" value="1"
                                                   checked="checked"/>
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="py-4 border-bottom">
                                        <label
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
                                            <input class="form-check-input" type="checkbox" value="1"/>
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end pt-7">
                                        <button type="reset"
                                                class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                data-kt-search-element="preferences-dismiss">Cancel
                                        </button>
                                        <button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Preferences-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Navbar-->
                <div class="app-navbar">
                    <!--begin::Cart-->
                    <div class="d-flex align-items-center ms-2">
                        <!--begin::User menu-->
                        @auth()
                            <div class="app-navbar-item d-flex align-items-center me-1" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol"
                                     data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                     data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-profile-circle fs-1 text-gray-600">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--begin::User account menu-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="{{asset(auth()->user()->profile_photo_path)}}"/>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div
                                                    class="fw-bold d-flex align-items-center fs-5">{{auth()->user()->name}}
                                                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">optional(auth()->user()->role)->name</span>
                                                </div>
                                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">auth()->user()->email</a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="account/overview.html" class="menu-link px-5">My Profile</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="apps/projects/list.html" class="menu-link px-5">
                                            <span class="menu-text">My Articles</span>
                                            <span class="menu-badge">
														<span
                                                            class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
													</span>
                                        </a>
                                    </div>
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <form action="{{route('logout')}}">
                                            @csrf
                                            <button type="submit" class="menu-link px-5">Sign
                                                Out
                                            </button>
                                        </form>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User menu-->
                            <!--begin::Actions-->
                        @else
                            <a href="{{route('login')}}" target="_blank"
                               class="d-flex flex-center text-gray-700 text-hover-primary fw-bold fs-6">Sign In</a>
                        @endauth
                        <!--end::Actions-->
                    </div>
                    <!--end::Cart-->
                </div>
            </div>
            <!--end::Secondary header-->
        </div>
        <!--end::Header secondary container-->
    </div>
    <!--end::Header secondary-->
    <!--begin::Header tertiary-->
    <div class="app-header-tertiary app-header-mobile-drawer" data-kt-drawer="true"
         data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
         data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
         data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-sticky="false"
         data-kt-sticky-name="app-header-tertiary-sticky" data-kt-sticky-offset="{default: 'false', lg: '300px'}"
         data-kt-swapper="true" data-kt-swapper-mode="append"
         data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header'}">
        <!--begin::Header tertiary container-->
        <div class="app-container container-xxl app-container-fit-mobile d-flex align-items-stretch"
             id="kt_app_header_tertiary_container">
            <!--begin::Menu wrapper-->
            <div class="app-header-menu d-flex align-items-stretch w-100">
                <!--begin::Menu-->
                <div
                    class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                    id="kt_app_header_menu" data-kt-menu="true">
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                         class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                        <!--begin:Menu link-->
                        <span class="menu-link py-3">
											<span class="menu-title">Dashboards</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                            <!--begin:Dashboards menu-->
                            <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible"
                                 data-kt-menu-dismiss="true">
                                <!--begin:Row-->
                                <div class="row">
                                    <!--begin:Col-->
                                    <div class="col-lg-8 mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="index.html" class="menu-link active">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-element-11 text-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																			</i>
																		</span>
                                                        <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Default</span>
																			<span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
																		</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="dashboards/ecommerce.html" class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-basket text-danger fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																			</i>
																		</span>
                                                        <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">eCommerce</span>
																			<span class="fs-7 fw-semibold text-muted">Sales reports</span>
																		</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="dashboards/projects.html" class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-abstract-44 text-info fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
                                                        <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Projects</span>
																			<span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
																		</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="dashboards/online-courses.html" class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-color-swatch text-success fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																				<span class="path6"></span>
																				<span class="path7"></span>
																				<span class="path8"></span>
																				<span class="path9"></span>
																				<span class="path10"></span>
																				<span class="path11"></span>
																				<span class="path12"></span>
																				<span class="path13"></span>
																				<span class="path14"></span>
																				<span class="path15"></span>
																				<span class="path16"></span>
																				<span class="path17"></span>
																				<span class="path18"></span>
																				<span class="path19"></span>
																				<span class="path20"></span>
																				<span class="path21"></span>
																			</i>
																		</span>
                                                        <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Online Courses</span>
																			<span class="fs-7 fw-semibold text-muted">Student progress</span>
																		</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="dashboards/marketing.html" class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-chart-simple text-gray-900 fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																			</i>
																		</span>
                                                        <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Marketing</span>
																			<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																		</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="dashboards/bidding.html" class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-switch text-warning fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
                                                        <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Bidding</span>
																			<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																		</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="dashboards/pos.html" class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-abstract-42 text-danger fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
                                                        <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">POS System</span>
																			<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																		</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="dashboards/call-center.html" class="menu-link">
																		<span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																			<i class="ki-duotone ki-call text-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																				<span class="path6"></span>
																				<span class="path7"></span>
																				<span class="path8"></span>
																			</i>
																		</span>
                                                        <span class="d-flex flex-column">
																			<span class="fs-6 fw-bold text-gray-800">Call Center</span>
																			<span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
																		</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                        <div class="separator separator-dashed mx-5 my-5"></div>
                                        <!--begin:Landing-->
                                        <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                                            <div class="d-flex flex-column me-5">
                                                <div class="fs-6 fw-bold text-gray-800">Landing Page Template</div>
                                                <div class="fs-7 fw-semibold text-muted">Onpe page landing template with
                                                    pricing & others
                                                </div>
                                            </div>
                                            <a href="landing.html" class="btn btn-sm btn-primary fw-bold">Explore</a>
                                        </div>
                                        <!--end:Landing-->
                                    </div>
                                    <!--end:Col-->
                                    <!--begin:Col-->
                                    <div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
                                        <!--begin:Heading-->
                                        <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More
                                            Dashboards</h4>
                                        <!--end:Heading-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/logistics.html" class="menu-link py-2">
                                                <span class="menu-title">Logistics</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/website-analytics.html" class="menu-link py-2">
                                                <span class="menu-title">Website Analytics</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/finance-performance.html" class="menu-link py-2">
                                                <span class="menu-title">Finance Performance</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/store-analytics.html" class="menu-link py-2">
                                                <span class="menu-title">Store Analytics</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/social.html" class="menu-link py-2">
                                                <span class="menu-title">Social</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/delivery.html" class="menu-link py-2">
                                                <span class="menu-title">Delivery</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/crypto.html" class="menu-link py-2">
                                                <span class="menu-title">Crypto</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/school.html" class="menu-link py-2">
                                                <span class="menu-title">School</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="dashboards/podcast.html" class="menu-link py-2">
                                                <span class="menu-title">Podcast</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Col-->
                                </div>
                                <!--end:Row-->
                            </div>
                            <!--end:Dashboards menu-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                         class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                        <!--begin:Menu link-->
                        <span class="menu-link py-3">
											<span class="menu-title">Pages</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                            <!--begin:Pages menu-->
                            <div class="menu-active-bg px-4 px-lg-0">
                                <!--begin:Tabs nav-->
                                <div class="d-flex w-100 overflow-auto">
                                    <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                                        <!--begin:Nav item-->
                                        <li class="nav-item mx-lg-1">
                                            <a class="nav-link py-3 py-lg-6 active text-active-primary" href="#"
                                               data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_pages">General</a>
                                        </li>
                                        <!--end:Nav item-->
                                        <!--begin:Nav item-->
                                        <li class="nav-item mx-lg-1">
                                            <a class="nav-link py-3 py-lg-6 text-active-primary" href="#"
                                               data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_account">Account</a>
                                        </li>
                                        <!--end:Nav item-->
                                        <!--begin:Nav item-->
                                        <li class="nav-item mx-lg-1">
                                            <a class="nav-link py-3 py-lg-6 text-active-primary" href="#"
                                               data-bs-toggle="tab"
                                               data-bs-target="#kt_app_header_menu_pages_authentication">Authentication</a>
                                        </li>
                                        <!--end:Nav item-->
                                        <!--begin:Nav item-->
                                        <li class="nav-item mx-lg-1">
                                            <a class="nav-link py-3 py-lg-6 text-active-primary" href="#"
                                               data-bs-toggle="tab"
                                               data-bs-target="#kt_app_header_menu_pages_utilities">Utilities</a>
                                        </li>
                                        <!--end:Nav item-->
                                        <!--begin:Nav item-->
                                        <li class="nav-item mx-lg-1">
                                            <a class="nav-link py-3 py-lg-6 text-active-primary" href="#"
                                               data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_widgets">Widgets</a>
                                        </li>
                                        <!--end:Nav item-->
                                    </ul>
                                </div>
                                <!--end:Tabs nav-->
                                <!--begin:Tab content-->
                                <div class="tab-content py-4 py-lg-8 px-lg-7">
                                    <!--begin:Tab pane-->
                                    <div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="col-lg-8">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                        <!--begin:Menu heading-->
                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4>
                                                        <!--end:Menu heading-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="pages/user-profile/overview.html"
                                                               class="menu-link">
                                                                <span class="menu-title">Overview</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="pages/user-profile/projects.html"
                                                               class="menu-link">
                                                                <span class="menu-title">Projects</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="pages/user-profile/campaigns.html"
                                                               class="menu-link">
                                                                <span class="menu-title">Campaigns</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="pages/user-profile/documents.html"
                                                               class="menu-link">
                                                                <span class="menu-title">Documents</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="pages/user-profile/followers.html"
                                                               class="menu-link">
                                                                <span class="menu-title">Followers</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="pages/user-profile/activity.html"
                                                               class="menu-link">
                                                                <span class="menu-title">Activity</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-6">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/about.html" class="menu-link">
                                                                    <span class="menu-title">About</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/team.html" class="menu-link">
                                                                    <span class="menu-title">Our Team</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/contact.html" class="menu-link">
                                                                    <span class="menu-title">Contact Us</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/licenses.html" class="menu-link">
                                                                    <span class="menu-title">Licenses</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/sitemap.html" class="menu-link">
                                                                    <span class="menu-title">Sitemap</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Careers</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/careers/list.html" class="menu-link">
                                                                    <span class="menu-title">Careers List</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/careers/apply.html" class="menu-link">
                                                                    <span class="menu-title">Careers Apply</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-6">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">FAQ</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/faq/classic.html" class="menu-link">
                                                                    <span class="menu-title">FAQ Classic</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/faq/extended.html" class="menu-link">
                                                                    <span class="menu-title">FAQ Extended</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                        <!--begin:Menu section-->
                                                        <div class="mb-6">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Blog</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/blog/home.html" class="menu-link">
                                                                    <span class="menu-title">Blog Home</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/blog/post.html" class="menu-link">
                                                                    <span class="menu-title">Blog Post</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Pricing</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/pricing.html" class="menu-link">
                                                                    <span class="menu-title">Column Pricing</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/pricing/table.html" class="menu-link">
                                                                    <span class="menu-title">Table Pricing</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Social</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/social/feeds.html" class="menu-link">
                                                                    <span class="menu-title">Feeds</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/social/activity.html" class="menu-link">
                                                                    <span class="menu-title">Activty</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/social/followers.html" class="menu-link">
                                                                    <span class="menu-title">Followers</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="pages/social/settings.html" class="menu-link">
                                                                    <span class="menu-title">Settings</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-4">
                                                <img src="assets/media/stock/600x600/img-82.jpg" class="rounded mw-100"
                                                     alt=""/>
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                    </div>
                                    <!--end:Tab pane-->
                                    <!--begin:Tab pane-->
                                    <div class="tab-pane w-lg-600px" id="kt_app_header_menu_pages_account">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="col-lg-5 mb-6 mb-lg-0">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="account/overview.html" class="menu-link">
                                                                <span class="menu-title">Overview</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="account/settings.html" class="menu-link">
                                                                <span class="menu-title">Settings</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="account/security.html" class="menu-link">
                                                                <span class="menu-title">Security</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="account/activity.html" class="menu-link">
                                                                <span class="menu-title">Activity</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="account/billing.html" class="menu-link">
                                                                <span class="menu-title">Billing</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="account/statements.html" class="menu-link">
                                                                <span class="menu-title">Statements</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="account/referrals.html" class="menu-link">
                                                                <span class="menu-title">Referrals</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="account/api-keys.html" class="menu-link">
                                                                <span class="menu-title">API Keys</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="account/logs.html" class="menu-link">
                                                                <span class="menu-title">Logs</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-7">
                                                <img src="assets/media/stock/900x600/46.jpg" class="rounded mw-100"
                                                     alt=""/>
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                    </div>
                                    <!--end:Tab pane-->
                                    <!--begin:Tab pane-->
                                    <div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_authentication">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                <!--begin:Menu section-->
                                                <div class="mb-6">
                                                    <!--begin:Menu heading-->
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate Layout</h4>
                                                    <!--end:Menu heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/corporate/sign-in.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Sign-In</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/corporate/sign-up.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Sign-Up</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/corporate/two-factor.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Two-Factor</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/corporate/reset-password.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Reset Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/corporate/new-password.html"
                                                           class="menu-link">
                                                            <span class="menu-title">New Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu section-->
                                                <!--begin:Menu section-->
                                                <div class="mb-0">
                                                    <!--begin:Menu heading-->
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Overlay Layout</h4>
                                                    <!--end:Menu heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/overlay/sign-in.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Sign-In</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/overlay/sign-up.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Sign-Up</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/overlay/two-factor.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Two-Factor</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/overlay/reset-password.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Reset Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/overlay/new-password.html"
                                                           class="menu-link">
                                                            <span class="menu-title">New Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu section-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                <!--begin:Menu section-->
                                                <div class="mb-6">
                                                    <!--begin:Menu heading-->
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Creative Layout</h4>
                                                    <!--end:Menu heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/creative/sign-in.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Sign-in</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/creative/sign-up.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Sign-up</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/creative/two-factor.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Two-Factor</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/creative/reset-password.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Reset Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/creative/new-password.html"
                                                           class="menu-link">
                                                            <span class="menu-title">New Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu section-->
                                                <!--begin:Menu section-->
                                                <div class="mb-6">
                                                    <!--begin:Menu heading-->
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Fancy Layout</h4>
                                                    <!--end:Menu heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/fancy/sign-in.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Sign-In</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/fancy/sign-up.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Sign-Up</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/fancy/two-factor.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Two-Factor</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/fancy/reset-password.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Reset Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/layouts/fancy/new-password.html"
                                                           class="menu-link">
                                                            <span class="menu-title">New Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu section-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                <!--begin:Menu section-->
                                                <div class="mb-0">
                                                    <!--begin:Menu heading-->
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General</h4>
                                                    <!--end:Menu heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/extended/multi-steps-sign-up.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Multi-Steps Sign-Up</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/general/welcome.html" class="menu-link">
                                                            <span class="menu-title">Welcome Message</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/general/verify-email.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Verify Email</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/general/coming-soon.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Coming Soon</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/general/password-confirmation.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Password Confirmation</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/general/account-deactivated.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Account Deactivation</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/general/error-404.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Error 404</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/general/error-500.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Error 500</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu section-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                <!--begin:Menu section-->
                                                <div class="mb-0">
                                                    <!--begin:Menu heading-->
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Email Templates</h4>
                                                    <!--end:Menu heading-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/email/welcome-message.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Welcome Message</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/email/reset-password.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Reset Password</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/email/subscription-confirmed.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Subscription Confirmed</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/email/card-declined.html"
                                                           class="menu-link">
                                                            <span class="menu-title">Credit Card Declined</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/email/promo-1.html" class="menu-link">
                                                            <span class="menu-title">Promo 1</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/email/promo-2.html" class="menu-link">
                                                            <span class="menu-title">Promo 2</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item p-0 m-0">
                                                        <!--begin:Menu link-->
                                                        <a href="authentication/email/promo-3.html" class="menu-link">
                                                            <span class="menu-title">Promo 3</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu section-->
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                    </div>
                                    <!--end:Tab pane-->
                                    <!--begin:Tab pane-->
                                    <div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_utilities">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="col-lg-7">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-4 mb-6 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General
                                                                Modals</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/general/invite-friends.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Invite Friends</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/general/view-users.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">View Users</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/general/select-users.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Select Users</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/general/upgrade-plan.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Upgrade Plan</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/general/share-earn.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Share & Earn</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/forms/new-target.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">New Target</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/forms/new-card.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">New Card</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/forms/new-address.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">New Address</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/forms/create-api-key.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Create API Key</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/forms/bidding.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Bidding</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-4 mb-6 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-6">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Advanced
                                                                Modals</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/wizards/create-app.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Create App</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/wizards/create-campaign.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Create Campaign</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/wizards/create-account.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Create Business Acc</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/wizards/create-project.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Create Project</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/wizards/top-up-wallet.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Top Up Wallet</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/wizards/offer-a-deal.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Offer a Deal</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/wizards/two-factor-authentication.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Two Factor Auth</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Search</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/search/horizontal.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Horizontal</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/search/vertical.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Vertical</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/search/users.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Users</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/search/select-location.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Select Location</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-4 mb-6 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Wizards</h4>
                                                            <!--end:Menu heading-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/wizards/horizontal.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Horizontal</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/wizards/vertical.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Vertical</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/wizards/two-factor-authentication.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Two Factor Auth</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/wizards/create-app.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Create App</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/wizards/create-campaign.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Create Campaign</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/wizards/create-account.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Create Account</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/wizards/create-project.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Create Project</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/modals/wizards/top-up-wallet.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Top Up Wallet</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="utilities/wizards/offer-a-deal.html"
                                                                   class="menu-link">
                                                                    <span class="menu-title">Offer a Deal</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-5 pe-lg-5">
                                                <img src="assets/media/stock/600x600/img-84.jpg" class="rounded mw-100"
                                                     alt=""/>
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                    </div>
                                    <!--end:Tab pane-->
                                    <!--begin:Tab pane-->
                                    <div class="tab-pane w-lg-500px" id="kt_app_header_menu_pages_widgets">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="col-lg-4 mb-6 mb-lg-0">
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="widgets/lists.html" class="menu-link">
                                                        <span class="menu-title">Lists</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="widgets/statistics.html" class="menu-link">
                                                        <span class="menu-title">Statistics</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="widgets/charts.html" class="menu-link">
                                                        <span class="menu-title">Charts</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="widgets/mixed.html" class="menu-link">
                                                        <span class="menu-title">Mixed</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="widgets/tables.html" class="menu-link">
                                                        <span class="menu-title">Tables</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="widgets/feeds.html" class="menu-link">
                                                        <span class="menu-title">Feeds</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                            <!--begin:Col-->
                                            <div class="col-lg-8">
                                                <img src="assets/media/stock/900x600/44.jpg" class="rounded mw-100"
                                                     alt=""/>
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                    </div>
                                    <!--end:Tab pane-->
                                </div>
                                <!--end:Tab content-->
                            </div>
                            <!--end:Pages menu-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                         class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                        <!--begin:Menu link-->
                        <span class="menu-link py-3">
											<span class="menu-title">Apps</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div
                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                 data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-rocket fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Projects</span>
													<span class="menu-arrow"></span>
												</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/projects/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">My Projects</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/projects/project.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">View Project</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/projects/targets.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Targets</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/projects/budget.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Budget</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/projects/users.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Users</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/projects/files.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Files</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/projects/activity.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Activity</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/projects/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                 data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-handcart fs-2"></i>
													</span>
													<span class="menu-title">eCommerce</span>
													<span class="menu-arrow"></span>
												</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Catalog</span>
															<span class="menu-arrow"></span>
														</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/ecommerce/catalog/products.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Products</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/ecommerce/catalog/categories.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Categories</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3"
                                                   href="apps/ecommerce/catalog/add-product.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Add Product</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3"
                                                   href="apps/ecommerce/catalog/edit-product.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Edit Product</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3"
                                                   href="apps/ecommerce/catalog/add-category.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Add Category</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3"
                                                   href="apps/ecommerce/catalog/edit-category.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Edit Category</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click"
                                         class="menu-item menu-accordion menu-sub-indention">
                                        <!--begin:Menu link-->
                                        <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sales</span>
															<span class="menu-arrow"></span>
														</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/ecommerce/sales/listing.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Orders Listing</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/ecommerce/sales/details.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Order Details</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/ecommerce/sales/add-order.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Add Order</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/ecommerce/sales/edit-order.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Edit Order</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click"
                                         class="menu-item menu-accordion menu-sub-indention">
                                        <!--begin:Menu link-->
                                        <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Customers</span>
															<span class="menu-arrow"></span>
														</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/ecommerce/customers/listing.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Customers Listing</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/ecommerce/customers/details.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Customers Details</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click"
                                         class="menu-item menu-accordion menu-sub-indention">
                                        <!--begin:Menu link-->
                                        <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Reports</span>
															<span class="menu-arrow"></span>
														</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/ecommerce/reports/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Products Viewed</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/ecommerce/reports/sales.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Sales</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/ecommerce/reports/returns.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Returns</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3"
                                                   href="apps/ecommerce/reports/customer-orders.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Customer Orders</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/ecommerce/reports/shipping.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Shipping</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/ecommerce/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                 data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-chart fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Support Center</span>
													<span class="menu-arrow"></span>
												</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/support-center/overview.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Overview</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Tickets</span>
															<span class="menu-arrow"></span>
														</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/support-center/tickets/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Ticket List</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/support-center/tickets/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Ticket View</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Tutorials</span>
															<span class="menu-arrow"></span>
														</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3"
                                                   href="apps/support-center/tutorials/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Tutorials List</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3"
                                                   href="apps/support-center/tutorials/post.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Tutorials Post</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/support-center/faq.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">FAQ</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/support-center/licenses.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Licenses</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/support-center/contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Contact Us</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                 data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-shield-tick fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">User Management</span>
													<span class="menu-arrow"></span>
												</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Users</span>
															<span class="menu-arrow"></span>
														</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/user-management/users/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Users List</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/user-management/users/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">View User</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Roles</span>
															<span class="menu-arrow"></span>
														</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/user-management/roles/list.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Roles List</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/user-management/roles/view.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">View Roles</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/user-management/permissions.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Permissions</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                 data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-phone fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Contacts</span>
													<span class="menu-arrow"></span>
												</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/contacts/getting-started.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Getting Started</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/contacts/add-contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Add Contact</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/contacts/edit-contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Edit Contact</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/contacts/view-contact.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">View Contact</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                 data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-basket fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
													<span class="menu-title">Subscriptions</span>
													<span class="menu-arrow"></span>
												</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/subscriptions/getting-started.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Getting Started</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/subscriptions/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Subscription List</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/subscriptions/add.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Add Subscription</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/subscriptions/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">View Subscription</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                 data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-briefcase fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Customers</span>
													<span class="menu-arrow"></span>
												</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/customers/getting-started.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Getting Started</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/customers/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Customer Listing</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/customers/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Customer Details</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                 data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-credit-cart fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Invoice Management</span>
													<span class="menu-arrow"></span>
												</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link py-3">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Profile</span>
															<span class="menu-arrow"></span>
														</span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/invoices/view/invoice-1.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Invoice 1</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/invoices/view/invoice-2.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Invoice 2</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link py-3" href="apps/invoices/view/invoice-3.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
                                                    <span class="menu-title">Invoice 3</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/invoices/create.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Create Invoice</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                 data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-file-added fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">File Manager</span>
													<span class="menu-arrow"></span>
												</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/file-manager/folders.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Folders</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/file-manager/files.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Files</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/file-manager/blank.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Blank Directory</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/file-manager/settings.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                 data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-sms fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<span class="menu-title">Inbox</span>
													<span class="menu-arrow"></span>
												</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/inbox/listing.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Messages</span>
                                            <span class="menu-badge">
																<span class="badge badge-light-success">3</span>
															</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/inbox/compose.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Compose</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/inbox/reply.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">View & Reply</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                 data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link py-3">
													<span class="menu-icon">
														<i class="ki-duotone ki-message-text-2 fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
													<span class="menu-title">Chat</span>
													<span class="menu-arrow"></span>
												</span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/chat/private.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Private Chat</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/chat/group.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Group Chat</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="apps/chat/drawer.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
                                            <span class="menu-title">Drawer Chat</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link py-3" href="apps/calendar.html">
													<span class="menu-icon">
														<i class="ki-duotone ki-calendar-8 fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
															<span class="path6"></span>
														</i>
													</span>
                                    <span class="menu-title">Calendar</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                         class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                        <!--begin:Menu link-->
                        <span class="menu-link py-3">
											<span class="menu-title">Help</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div
                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link py-3"
                                   href="https://preview.keenthemes.com/html/metronic/docs/base/utilities"
                                   target="_blank"
                                   title="Check out over 200 in-house components, plugins and ready for use solutions"
                                   data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                   data-bs-placement="right">
													<span class="menu-icon">
														<i class="ki-duotone ki-rocket fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                    <span class="menu-title">Components</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link py-3" href="https://preview.keenthemes.com/html/metronic/docs"
                                   target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip"
                                   data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
													<span class="menu-icon">
														<i class="ki-duotone ki-abstract-26 fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                    <span class="menu-title">Documentation</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link py-3"
                                   href="https://preview.keenthemes.com/metronic8/demo28/layout-builder.html"
                                   title="Build your layout and export HTML for server side integration"
                                   data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                   data-bs-placement="right">
													<span class="menu-icon">
														<i class="ki-duotone ki-switch fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                    <span class="menu-title">Layout Builder</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link py-3"
                                   href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                   target="_blank">
													<span class="menu-icon">
														<i class="ki-duotone ki-code fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
                                    <span class="menu-title">Changelog v8.2.1</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->
        </div>
        <!--end::Header tertiary container-->
    </div>
    <!--end::Header tertiary-->
</div>
