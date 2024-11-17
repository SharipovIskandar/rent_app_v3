<x-layouts.main>
    <section class="relative mt-20 table w-full py-32 lg:py-36 bg-[url('/public/assets/images/bg/03.jpg')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container relative">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">Easy way to find your <br> dream property</h3>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->



    <div class="container relative z-1">
        <div class="grid grid-cols-1 justify-center">
            <div class="relative -mt-32">
                <div class="grid grid-cols-1">
                    <ul class="inline-block mx-auto sm:w-fit w-full flex-wrap justify-center text-center p-4 bg-white dark:bg-slate-900 backdrop-blur-sm rounded-t-xl border-b dark:border-gray-800" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                        <li role="presentation" class="inline-block">
                            <button class="px-6 py-2 text-base font-medium rounded-md w-full hover:text-green-600 transition-all duration-500 ease-in-out" id="buy-home-tab" data-tabs-target="#buy-home" type="button" role="tab" aria-controls="buy-home" aria-selected="true">Rent</button>
                        </li>
                        <li role="presentation" class="inline-block">
                            <button class="px-6 py-2 text-base font-medium rounded-md w-full transition-all duration-500 ease-in-out" id="sell-home-tab" data-tabs-target="#sell-home" type="button" role="tab" aria-controls="sell-home" aria-selected="false">Roommate</button>
                        </li>
                    </ul>

                    <div id="StarterContent" class="p-6 bg-white dark:bg-slate-900 md:rounded-xl rounded-none shadow-md dark:shadow-gray-700">
                        <div class="" id="buy-home" role="tabpanel" aria-labelledby="buy-home-tab">
                            <form action="/search" method="get">
                                <div class="registration-form text-dark text-start">
                                    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                        <div>
                                            <label class="form-label font-medium text-slate-900 dark:text-white">Search : <span class="text-red-600">*</span></label>
                                            <div class="filter-search-form relative filter-border mt-2">
                                                <i class="uil uil-search icons"></i>
                                                <input name="search_phrase" type="text" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Search your keaywords">
                                            </div>
                                        </div>


                                        <div>
                                            <label for="buy-properties" class="form-label font-medium text-slate-900 dark:text-white">Select Branches:</label>
                                            <div class="filter-search-form relative filter-border mt-2">
                                                <i class="uil uil-estate icons"></i>
                                                <select class="form-select z-2" data-trigger name="branch" id="choices-catagory-buy" aria-label="Default select example">
                                                    <option value="">Branch : </option>
                                                    @foreach($branches as $branch)
                                                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div>
                                            <label for="buy-min-price" class="form-label font-medium text-slate-900 dark:text-white">Min Price :</label>
                                            <div class="filter-search-form relative filter-border mt-2">
                                                <i class="uil uil-usd-circle icons"></i>
                                                <input name="min_price" type="number" id="choices-min-price-buy" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" data-trigger aria-label="Default select example" placeholder="Min Price">
                                            </div>
                                        </div>

                                        <div>
                                            <label for="buy-max-price" class="form-label font-medium text-slate-900 dark:text-white">Max Price :</label>
                                            <div class="filter-search-form relative mt-2">
                                                <i class="uil uil-usd-circle icons"></i>
                                                <input name="max_price" type="number" id="choices-max-price-buy" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" data-trigger aria-label="Default select example" placeholder="Min Price">
                                            </div>
                                        </div>

                                        <div class="lg:mt-6">
                                            <input type="submit" id="search-buy" name="search" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded" value="Search">
                                        </div>
                                    </div><!--end grid-->
                                </div><!--end container-->
                            </form>
                        </div>

                        <div class="hidden" id="sell-home" role="tabpanel" aria-labelledby="sell-home-tab">
                            <form action="/search" method="get">
                                <div class="registration-form text-dark text-start">
                                    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                        <div>
                                            <label class="form-label font-medium text-slate-900 dark:text-white">Search : <span class="text-red-600">*</span></label>
                                            <div class="filter-search-form relative filter-border mt-2">
                                                <i class="uil uil-search icons"></i>
                                                <input name="search_phrase" type="text" id="job-keyword" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" placeholder="Search your keaywords">
                                            </div>
                                        </div>


                                        <div>
                                            <label for="buy-properties" class="form-label font-medium text-slate-900 dark:text-white">Select Branches:</label>
                                            <div class="filter-search-form relative filter-border mt-2">
                                                <i class="uil uil-estate icons"></i>
                                                <select class="form-select z-2" data-trigger name="branch" id="choices-catagory-buy" aria-label="Default select example">
                                                    <option value="">Branch : </option>
                                                    @foreach($branches as $branch)
                                                        <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div>
                                            <label for="buy-min-price" class="form-label font-medium text-slate-900 dark:text-white">Min Price :</label>
                                            <div class="filter-search-form relative filter-border mt-2">
                                                <i class="uil uil-usd-circle icons"></i>
                                                <input name="min_price" type="number" id="choices-min-price-buy" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" data-trigger aria-label="Default select example" placeholder="Min Price">
                                            </div>
                                        </div>

                                        <div>
                                            <label for="buy-max-price" class="form-label font-medium text-slate-900 dark:text-white">Max Price :</label>
                                            <div class="filter-search-form relative mt-2">
                                                <i class="uil uil-usd-circle icons"></i>
                                                <input name="max_price" type="number" id="choices-max-price-buy" class="form-input filter-input-box bg-gray-50 dark:bg-slate-800 border-0" data-trigger aria-label="Default select example" placeholder="Min Price">
                                            </div>
                                        </div>

                                        <div class="lg:mt-6">
                                            <input type="submit" id="search-buy" name="search" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded" value="Search">
                                        </div>
                                    </div><!--end grid-->
                                </div><!--end container-->
                            </form>
                        </div>
                    </div>
                </div><!--end grid-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <!-- End Hero -->

    <!-- Start -->
    <section class="relative lg:py-1 py-16">
        <div class="container relative">
            <x-ads :ads="$ads"/>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
</x-layouts.main>
