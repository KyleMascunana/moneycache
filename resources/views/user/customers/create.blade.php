<x-user-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="sm:col-span-3 mt-2">
                            <label class="uppercase text-2xl font-extrabold pl-5">Add New Customer</label>
                            <p class="mt-1 text-sm leading-6 text-gray-600 pl-5">You can add new customer to the system here.</p>
                        </div>
                    <hr>
                        <div class="flex flex-col pt-2">
                                <form method="POST" action="{{ route('user.customers.store') }}">
                                    @csrf

                                    <div class="border-b border-gray-900/10 pb-12">

                                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                                <div class="sm:col-span-3">
                                                    <label for="client_id" class="block text-sm font-medium leading-6 text-gray-900">Client ID <span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                        <input type="text" name="client_id" id="client_id" autocomplete="given-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Fullname <span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                        <input type="text" name="name" id="name" autocomplete="given-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email <span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                        <input type="email" name="email" id="email" autocomplete="family-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">Contact Number <span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                        <input type="number" name="contact" id="contact" autocomplete="family-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="user_status" class="block text-sm font-medium leading-6 text-gray-900">User Status <span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                            <select name="user_status" required class="block mt-1 w-full border-gray-300 focus:border-indigo-300
                                                            focus:ring focus:ring-indogo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                                                <option disabled>-- Select Below --</option>
                                                                <option class="text-sm text-gray-700" value="Active">Active</option>
                                                                <option class="text-sm text-gray-700" value="Idle">Idle</option>
                                                                <option class="text-sm text-gray-700" value="Suspended">Suspended</option>
                                                            </select>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="business_name" class="block text-sm font-medium leading-6 text-gray-900">Business Name<span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                        <input type="text" name="business_name" id="business_name" required autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="col-span-full">
                                                    <label for="business_location" class="block text-sm font-medium leading-6 text-gray-900">Business Location <span class="text-red-600">*</span></label>
                                                        <div class="mt-2">
                                                            <textarea id="business_location" name="business_location" required rows="3" placeholder="Write your address here..." class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
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



    </x-user-layout>
