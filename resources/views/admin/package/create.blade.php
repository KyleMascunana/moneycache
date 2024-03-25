<x-admin-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end p-3">
                        <a href="{{ route('admin.package.index') }}" class="text-blue-500 hover:text-blue-900"><i class="fa-solid fa-door-closed"></i></a>
                    </div>
                    <div class="sm:col-span-3 mt-2">
                        <label class="uppercase text-2xl font-extrabold pl-5">Package List</label>
                        <p class="mt-1 text-sm leading-6 text-gray-600 pl-5">You can view or add new package by filling up the form below.</p>
                    </div>
                    <hr>
                        <div class="flex flex-col pt-5 p-3">
                                <form method="POST" action="{{ route('admin.package.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="border-b border-gray-900/10 pb-12">

                                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                                <div class="sm:col-span-3">
                                                    <label for="package_number" class="block text-sm font-medium leading-6 text-gray-900">Package Number / SL</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="package_number" required id="package_number" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="file" class="block text-sm font-medium leading-6 text-gray-900">Package Icon</label>
                                                    <div class="mt-2 flex items-center gap-x-3">
                                                      <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                                                      </svg>
                                                      <input type="file" name="file" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                                    </div>
                                                  </div>

                                                <div class="sm:col-span-3">
                                                    <label for="package_name" class="block text-sm font-medium leading-6 text-gray-900">Package Name</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="package_name" required id="package_name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="package_detail" class="block text-sm font-medium leading-6 text-gray-900">Package Detail</label>
                                                        <div class="mt-2">
                                                            <textarea id="package_detail" name="package_detail" required rows="3" placeholder="Write your package detail here..." class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                                        </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="package_price" class="block text-sm font-medium leading-6 text-gray-900">Package Price</label>
                                                    <div class="mt-2">
                                                        <input type="number" name="package_price" required id="package_price" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="package_status" class="block text-sm font-medium leading-6 text-gray-900">Package Status</label>
                                                    <div class="mt-2">
                                                        <select name="package_status" class="block mt-1 w-full border-gray-300 focus:border-indigo-300
                                                        focus:ring focus:ring-indogo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                                            <option selected>-- Select Below --</option>
                                                            <option class="text-sm text-gray-700" value="Active">Active</option>
                                                            <option class="text-sm text-gray-700" value="Inactive">Inactive</option>
                                                            <option class="text-sm text-gray-700" value="Removed">Removed</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Trial / Demo</label>
                                                    <div class="mt-2 flex items-center gap-x-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                          </svg>
                                                      <div class="mt-2 flex items-center">
                                                        <input type="radio" name="package_trial" id="package_trial" value="Yes" class="form-radio h-5 w-5 text-indigo-600 transition duration-150 ease-in-out">
                                                        <label for="package_trial" class="ml-2 text-sm text-gray-700">Yes</label>

                                                        <input type="radio" name="package_trial" id="package_trial" value="No" class="form-radio h-5 w-5 ml-3 text-indigo-600 transition duration-150 ease-in-out">
                                                        <label for="package_trial" class="ml-2 text-sm text-gray-700">No</label>
                                                    </div>
                                                    </div>
                                                  </div>

                                                </div>
                                                <div class="sm:col-span-6 pt-5 justify-end flex">
                                                    <button type="submit" class="px-4 py-2 bg-blue-700 hover:bg-blue-500 text-white rounded-md p-5">Next</button>
                                                </div>
                                            </div>

                                        </div>


                                </form>

                        </div>


                    </div>
                </div>
        </div>
    </div>

    </x-admin-layout>
