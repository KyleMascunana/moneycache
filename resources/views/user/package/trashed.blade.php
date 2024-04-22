<x-user-layout>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3 mt-2">
                            <label class="uppercase text-2xl font-extrabold pl-5">Trashed Package List</label>
                            <p class="mt-1 text-sm leading-6 text-gray-600 pl-5">You can restore or force delete packages to the system here.</p>
                        </div>
                        <div class="sm:col-span-3 mt-2 text-sm">
                            <div class="flex justify-end p-3">
                                <a href="{{ route('user.package.index') }}" class="px-4 py-2 bg-blue-700 hover:bg-blue-500 text-white
                                    rounded-md">Go Back</a>
                            </div>
                        </div>
                    </div>

                    <table id="" class="display">
                        <thead class="bg-gray-50 border-b-2 border-gray-200">
                            <tr>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">ID#</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">SL</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Icon</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Name</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Details</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Price</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Status</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Is Trial</th>
                                <th class="p-3 text-sm font-semibold tracking-wide text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($packages as $package)
                                <tr>
                                    <td class="p-3 text-sm text-center">{{ $package->id }}</td>
                                    <td class="p-3 text-sm text-left">{{ $package->package_number }}</td>
                                    <td class="p-3 text-sm text-center">
                                        <div class="flex items-center">
                                            <img src="{{ asset('storages/'.$package->file) }}" alt="file" width="70px"
                                            height="70px" class="rounded-5">
                                        </div>
                                    </td>
                                    <td class="p-3 text-sm text-center">{{ $package->package_name }}</td>
                                    <td class="p-3 text-sm text-center">{{ $package->package_detail }}</td>
                                    <td class="p-3 text-sm text-center"><span class="font-semibold text-lg pr-1">P</span>{{ $package->package_price }}</td>
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
                                                <a href="{{ route('user.package.restore', $package->id) }}" onclick="return confirm('Are you sure to restore this data?');" class="text-green-500 hover:text-green-900">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
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
</x-user-layout>


