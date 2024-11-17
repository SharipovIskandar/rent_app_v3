<x-layouts.main>
    <div class="container-fluid relative px-3">
        <div class="layout-specing">
            <div class="grid grid-cols-1">
                <div class="profile-banner relative text-transparent rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                    <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)">
                    <div class="relative shrink-0">
                        <img src="/assets/images/bg.jpg" class="h-80 w-full object-cover" id="profile-banner" alt="">
                        <div class="absolute inset-0 bg-black/70"></div>
                        <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-12 grid-cols-1 gap-6 mt-6">
                <!-- Profile Picture -->
                <div class="xl:col-span-3 lg:col-span-4 md:col-span-4">
                    <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="profile-pic text-center">
                            <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)" />
                            <div>
                                <div class="relative size-24 mx-auto">
                                    <img src="/assets/images/client/23.jpg" class="rounded-full shadow dark:shadow-gray-700 ring-4 ring-slate-50 dark:ring-slate-800" id="profile-image" alt="">
                                    <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                </div>
                                <div class="mt-4">
                                    <h5 class="text-lg font-semibold"><?php echo auth()->user()->name ?></h5>
                                    <p class="text-slate-400"><?php echo auth()->user()->email ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Personal Details Form -->
                <div class="xl:col-span-9 lg:col-span-8 md:col-span-8">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <h5 class="text-lg font-semibold mb-4">Personal Detail :</h5>
                            <form>
                                <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                                    <div>
                                        <label class="form-label font-medium">First Name : <span class="text-red-600">*</span></label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                            <input type="text" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="First Name: {{auth()->user()->name}}" id="firstname" name="name" required="">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="form-label font-medium">Your Email : <span class="text-red-600">*</span></label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                            <input type="email" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Email: {{auth()->user()->email}}" name="email" required="">
                                        </div>
                                    </div>
                                </div><!--end grid-->
                                <input type="submit" id="submit" name="send" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5" value="Save Changes">
                            </form><!--end form-->
                        </div>

                        <!-- Contact Info and Change Password -->
                        <div class="p-6 relative rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                                <div>
                                    <h5 class="text-lg font-semibold mb-4">Contact Info :</h5>
                                    <form>
                                        <div class="grid grid-cols-1 gap-5">
                                            <div>
                                                <label class="form-label font-medium">Phone No. :</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="phone" class="size-4 absolute top-3 start-4"></i>
                                                    <input name="number" id="number" type="number" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Phone : {{auth()->user()?->phone}}">
                                                </div>
                                            </div>
                                        </div><!--end grid-->
                                        <button class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">Add</button>
                                    </form>
                                </div><!--end col-->

                                <div>
                                    <h5 class="text-lg font-semibold mb-4">Change password :</h5>
                                    <form>
                                        <div class="grid grid-cols-1 gap-5">
                                            <div>
                                                <label class="form-label font-medium">Old password :</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="key" class="size-4 absolute top-3 start-4"></i>
                                                    <input type="password" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Old password" id="oldpass" name="oldpass" required="">
                                                </div>
                                            </div>

                                            <div>
                                                <label class="form-label font-medium">New password :</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="lock" class="size-4 absolute top-3 start-4"></i>
                                                    <input type="password" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="New password" id="newpass" name="newpass" required="">
                                                </div>
                                            </div>

                                            <div>
                                                <label class="form-label font-medium">Confirm password :</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="lock" class="size-4 absolute top-3 start-4"></i>
                                                    <input type="password" class="form-input ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-green-600 dark:border-gray-800 dark:focus:border-green-600 focus:ring-0" placeholder="Confirm password" id="confpass" name="confpass" required="">
                                                </div>
                                            </div>
                                        </div><!--end grid-->
                                        <button class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">Update</button>
                                    </form>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div><!--end card-->
                    </div><!--end grid-->
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end layout-->
    </div><!--end container-->
</x-layouts.main>
