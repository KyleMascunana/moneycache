<x-admin-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end p-3">
                        <a href="{{ route('admin.details.index') }}" class="text-blue-500 hover:text-blue-900"><i class="fa-solid fa-door-closed"></i></a>
                    </div>
                    <div class="sm:col-span-3 mt-2 p-3">
                        <label class="uppercase text-2xl font-extrabold pl-5">New Customer Billing </label>
                        <p class="mt-1 text-sm leading-6 text-gray-600 pl-5">You can add billing details to the system here.</p>

                    <hr>
                        <div class="flex flex-col pt-5">
                                <form method="POST" action="{{ route('admin.details.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="border-b border-gray-900/10 pb-12">
                                        <h2 class="text-base font-semibold leading-7 text-gray-900">Customer Billing Form</h2>
                                            <p class="mt-1 text-sm leading-6 text-gray-600">Read what you input for less errors.</p>

                                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                                <div class="sm:col-span-3">
                                                    <label for="customer_id" class="block text-sm font-medium leading-6 text-gray-900">Customer ID</label>
                                                    <div class="mt-2">
                                                            <select name="customer_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300
                                                            focus:ring focus:ring-indogo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                                                <option selected>-- Select Below --</option>
                                                               @foreach ($customers as $customer)
                                                                    <option class="text-sm text-gray-700" value="{{ $customer->id }}">{{ $customer->id }} - {{ $customer->name }}</option>
                                                               @endforeach
                                                            </select>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="package_id" class="block text-sm font-medium leading-6 text-gray-900">Packages<span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                            <select name="package_id" required class="block mt-1 w-full border-gray-300 focus:border-indigo-300
                                                            focus:ring focus:ring-indogo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                                                <option disabled>-- Select Below --</option>
                                                                @foreach ($packages as $package)
                                                                <option class="text-sm text-gray-700" value="{{ $package->id }}">{{ $package->id }} - {{ $package->package_number }} - {{ $package->package_name }}</option>
                                                           @endforeach
                                                            </select>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="start_date" class="block text-sm font-medium leading-6 text-gray-900">Start Date <span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                        <input type="date" name="start_date" id="start_date" autocomplete="given-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="end_date" class="block text-sm font-medium leading-6 text-gray-900">End Date <span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                        <input type="date" name="end_date" id="end_date" autocomplete="given-name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="year" class="block text-sm font-medium leading-6 text-gray-900">Year<span class="text-red-600">*</span></label>
                                                    <div class="mt-2">
                                                            <select name="year" required class="block mt-1 w-full border-gray-300 focus:border-indigo-300
                                                            focus:ring focus:ring-indogo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                                                <option disabled>-- Select Below --</option>
                                                                <option class="text-sm text-gray-700" value="2024">2024</option>
                                                                <option class="text-sm text-gray-700" value="2025">2025</option>
                                                                <option class="text-sm text-gray-700" value="2026">2026</option>
                                                                <option class="text-sm text-gray-700" value="2027">2027</option>
                                                                <option class="text-sm text-gray-700" value="2028">2028</option>
                                                                <option class="text-sm text-gray-700" value="2029">2029</option>
                                                                <option class="text-sm text-gray-700" value="2030">2030</option>
                                                            </select>
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="month" class="block text-sm font-medium leading-6 text-gray-900">Month</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="month" required id="month" placeholder="ex: January, February, Mar..." autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="payment_status" class="block text-sm font-medium leading-6 text-gray-900">Payment Status</label>
                                                    <div class="mt-2">
                                                        <select name="payment_status" class="block mt-1 w-full border-gray-300 focus:border-indigo-300
                                                        focus:ring focus:ring-indogo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                                            <option selected>-- Select Below --</option>
                                                            <option class="text-sm text-gray-700" value="Paid">Paid</option>
                                                            <option class="text-sm text-gray-700" value="Overdue">Overdue</option>
                                                            <option class="text-sm text-gray-700" value="Cancelled">Cancelled</option>
                                                        </select>
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
