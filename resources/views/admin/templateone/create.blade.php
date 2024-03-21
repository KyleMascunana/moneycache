<x-admin-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end p-3">
                        <a href="{{ route('admin.templateone.index') }}" class="text-blue-500 hover:text-blue-900"><i class="fa-solid fa-door-closed"></i></a>
                    </div>
                    <div class="p-6 text-gray-900">
                        <label class=" text-2xl font-bold">Create Template for Cancellation Email</label>
                        <p class="mt-1 text-md leading-6 text-gray-800">You can add new Cancellation Email by filling up the form below.</p>
                    <hr>
                        <div class="flex flex-col pt-2">
                                <form method="POST" action="{{ route('admin.templateone.store') }}">
                                    @csrf

                                    <div class="border-b border-gray-900/10 pb-12">

                                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                                <div class="sm:col-span-3">
                                                    <label for="template_name" class="block text-sm font-medium leading-6 text-gray-900">Template Name <span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                        <input type="text" name="template_name" id="template_name" autocomplete="given-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="customer_name" class="block text-sm font-medium leading-6 text-gray-900">Customer Name <span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                        <input type="text" name="customer_name" id="customer_name" autocomplete="given-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="customer_job" class="block text-sm font-medium leading-6 text-gray-900">Customer Role<span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                        <input type="text" name="customer_job" id="customer_job" autocomplete="given-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="customer_business_name" class="block text-sm font-medium leading-6 text-gray-900">Business Name <span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                        <input type="text" name="customer_business_name" id="customer_business_name" autocomplete="given-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="customer_address" class="block text-sm font-medium leading-6 text-gray-900">Customer Address <span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                        <input type="email" name="customer_address" id="customer_address" autocomplete="family-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="email_date" class="block text-sm font-medium leading-6 text-gray-900">Date <span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                        <input type="date" name="email_date" id="email_date" autocomplete="family-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="customer_abbreviation" class="block text-sm font-medium leading-6 text-gray-900">Customer Abbreviation<span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                        <input type="text" name="customer_abbreviation" id="customer_abbreviation" required autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="col-span-full">
                                                    <label for="email_description" class="block text-sm font-medium leading-6 text-gray-900">Email Description <span class="text-red-600">*</span></label>
                                                        <div class="mt-2">
                                                            <textarea id="email_description" name="email_description" required rows="3" placeholder="Write your address here..." class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                                        </div>
                                                </div>

                                                </div>
                                                <div class="sm:col-span-6 pt-5 justify-end flex">
                                                    <button type="submit" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-white rounded-md p-5">Create</button>
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
