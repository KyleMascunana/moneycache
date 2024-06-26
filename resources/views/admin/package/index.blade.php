<x-admin-layout>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3 mt-2">
                            <label class="uppercase text-2xl font-extrabold pl-5">Package List</label>
                            <p class="mt-1 text-sm leading-6 text-gray-600 pl-5">You can view or add new packages to the system here.</p>
                        </div>

                        <div class="sm:col-span-3 mt-2">
                            <div class="flex justify-end p-3">
                                <a href="{{ route('admin.package.trashed') }}" class="px-4 py-2 bg-blue-700 hover:bg-blue-500 text-white
                                    rounded-md"></i>Trashed Files</a>

                                 <a href="{{ route('admin.package.create') }}" class="px-4 py-2 ml-3 bg-green-700 hover:bg-green-500 text-white
                                    rounded-md"></i>Add Package</a>
                            </div>
                        </div>


                    </div>
                    <table id="" class="display text-sm text-gray-600">
                        <thead class="bg-gray-50 border-b-2 border-gray-200">
                            <tr class="bg-blue-500 text-white">
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">SL</th>
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">Icon</th>
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">Name</th>
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">Details</th>
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">Price</th>
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">Status</th>
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">Is Trial</th>
                                <th class="p-3 text-sm hover:bg-blue-600 font-semibold tracking-wide text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($packages as $package)
                                <tr>
                                    <td class="p-3 text-sm text-left">{{ $package->package_number }}</td>
                                    <td class="p-3 text-sm text-center">
                                        <div class="flex items-center">
                                            <img src="{{ asset('storages/'.$package->file) }}" alt="file" width="70px"
                                            height="70px" class="rounded-5">
                                        </div>
                                    </td>
                                    <td class="p-3 text-sm text-center">{{ $package->package_name }}</td>
                                    <td class="p-3 text-sm text-center">{{ $package->package_detail }}</td>
                                    <td class="p-3 text-sm text-center"><span class="font-semibold text-lg pr-1">₱</span>{{ $package->package_price }}</td>
                                    <td class="p-3 text-sm text-center">
                                        @if ($package->package_status == 'Active')
                                        <span class="px-2 font-bold bg-green-400 border-2 border-green-400 rounded-full">
                                            {{ $package->package_status }}
                                        </span>
                                    @elseif($package->package_status == 'Inactive')
                                        <span class="px-2 font-bold bg-yellow-400 border-2 border-yellow-400 rounded-full">
                                            {{ $package->package_status }}
                                        </span>
                                    @elseif($package->package_status == 'Removed')
                                        <span class="px-2 font-bold bg-red-400 border-2 border-red-400 rounded-full">
                                            {{ $package->package_status }}
                                        </span>
                                    @endif
                                    </td>
                                    <td class="p-3 text-sm text-center">
                                        @if ($package->package_trial == 'Yes')
                                        <span class="px-2 font-bold bg-green-400 border-2 border-green-400 rounded-full">
                                            {{ $package->package_trial }}
                                        </span>
                                    @elseif($package->package_trial == 'No')
                                        <span class="px-2 font-bold bg-red-400 border-2 border-red-400 rounded-full">
                                            {{ $package->package_trial }}
                                        </span>
                                    @endif
                                </td>
                                    <td>
                                        <div class="items-center">
                                            <div class="flex space-x-3">
                                                <a href="{{ route('admin.package.edit', $package->id) }}" class="text-blue-500 hover:text-blue-900">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                      </svg>
                                                    </a>
                                                    <a href="{{ route('admin.package.softDelete', $package->id) }}" onclick="return confirm('Are you sure to trash this data?');" class="text-yellow-500 hover:text-yellow-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </a>
                                                    <a href="{{ route('admin.package.forceDelete', $package->id) }}" onclick="return confirm('Are you sure? This data will be deleted forever!');" class="text-red-500 hover:text-red-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75 14.25 12m0 0 2.25 2.25M14.25 12l2.25-2.25M14.25 12 12 14.25m-2.58 4.92-6.374-6.375a1.125 1.125 0 0 1 0-1.59L9.42 4.83c.21-.211.497-.33.795-.33H19.5a2.25 2.25 0 0 1 2.25 2.25v10.5a2.25 2.25 0 0 1-2.25 2.25h-9.284c-.298 0-.585-.119-.795-.33Z" />
                                                          </svg>
                                                    </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <br>
                    </div>
                </div>
        </div>
    </div>
</x-admin-layout>


