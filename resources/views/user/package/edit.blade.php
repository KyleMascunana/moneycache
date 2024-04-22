<x-user-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end p-3">
                    <a href="{{ route('user.package.index') }}" class="text-blue-500 hover:text-blue-900"><i class="fa-solid fa-door-closed"></i></a>
                </div>
                <div class="sm:col-span-3 mt-2">
                    <label class="uppercase text-2xl font-extrabold pl-5">Update Package</label>
                    <p class="mt-1 text-sm leading-6 text-gray-600 pl-5">You can update/edit package by filling up the form below.</p>
                </div>
                <hr>
                <div class="flex flex-col pt-5 p-3">
                    <form method="POST" action="{{ route('user.package.update', $package) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Package Number, Name, Detail, Price, and Status fields -->
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                            <div class="sm:col-span-3">
                                <label for="package_number" class="block text-sm font-medium leading-6 text-gray-900">Package Number / SL</label>
                                <div class="mt-2">
                                    <input type="text" name="package_number" id="package_number" value="{{ $package->package_number }}" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="file" class="block text-sm font-medium leading-6 text-gray-900">Package Icon</label>
                                <div class="mt-2 flex items-center gap-x-3">
                                    <div class="flex items-center">
                                        <img src="{{ asset('storages/'.$package->file) }}" alt="file" width="50px"
                                        height="50px" class="rounded-5">
                                    </div>
                                    <input type="file" name="file" disabled class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="package_name" class="block text-sm font-medium leading-6 text-gray-900">Package Name</label>
                                <div class="mt-2">
                                    <input type="text" name="package_name" value="{{ $package->package_name }}" id="package_name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="package_detail" class="block text-sm font-medium leading-6 text-gray-900">Package Detail</label>
                                <div class="mt-2">
                                    <textarea id="package_detail" name="package_detail" value="{{ $package->package_detail }}" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $package->package_detail }}</textarea>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="package_price" class="block text-sm font-medium leading-6 text-gray-900">Package Price</label>
                                <div class="mt-2">
                                    <input type="number" name="package_price" value="{{ $package->package_price }}" id="package_price" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="package_status" class="block text-sm font-medium leading-6 text-gray-900">Package Status : {{ $package->package_status }}</label>
                                <div class="mt-2">
                                    <select name="package_status" class="block mt-1 w-full border-gray-300 focus:border-indigo-300
                                    focus:ring focus:ring-indogo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                        <option selected value="{{ $package->package_status }}">-- Select Below --</option>
                                        <option class="text-sm text-gray-700" value="Active">Active</option>
                                        <option class="text-sm text-gray-700" value="Inactive">Inactive</option>
                                        <option class="text-sm text-gray-700" value="Removed">Removed</option>
                                    </select>
                                </div>
                            </div>

                            <div class="sm:col-span-6 pt-5 justify-end flex">
                                <button type="submit" class="px-4 py-2 bg-blue-700 hover:bg-blue-500 text-white rounded-md p-5">Update</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    </x-user-layout>
