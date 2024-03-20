<x-admin-layout>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg lg:rounded-lg p-2">
                <span class="text-xl px-4 py-2">User Panel</span>
                <div class="flex justify-end p-3">
                    <a href="{{ route('admin.users.index') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-white rounded-md p-4">Back to Users</a>
                </div>
                <div class="flex flex-col">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                            @csrf

                            @method('PUT')

                          <div class="pl-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Username </label>
                            <div class="mt-1 col">
                              <input type="text" id="name" name="name" value="{{ $user->name }}" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div><br>
                            <label for="email" class="block text-sm font-medium text-gray-700">User Email </label>
                            <div class="mt-1 col">
                              <input type="email" id="email" name="email" value="{{ $user->email }}" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div><br>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password </label>
                            <div class="mt-1">
                              <input type="password" id="password" name="password" value="{{ $user->password }}" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div><br>
                            @error('name') <span class="text--500 text-sm">{{ $message }}</span>@enderror
                          </div><br>
                          <div class="sm:col-span-6 pt-5">
                            <button type="submit" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-white rounded-md p-5">Update User</button>
                          </div>
                        </form>
                      </div>

                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
