<div
    class="full-width h-full flex justify-center align-items-center border border-gray-600 round"
>
    <form
        class="border border-gray-100 p-6 rounded-lg"
        wire:submit="createUser"
        action=""
    >
        <label
            class="mt-3 text-sm font-medium block py-1 leading-6 text-gray-900"
        >
            Name
        </label>
        <input
            class="block rounded border border-gray-100 px-3 py-1"
            type="text"
            placeholder="name"
            wire:model="name"
        />
        @error("name")
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <label
            class="mt-3 text-sm font-medium block py-1 leading-6 text-gray-900"
        >
            Email
        </label>
        <input
            class="block rounded border border-gray-100 px-3 py-1"
            type="email"
            placeholder="email"
            wire:model="email"
        />
        @error("email")
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <label
            class="mt-3 text-sm font-medium block py-1 leading-6 text-gray-900"
        >
            Password
        </label>
        <input
            class="block rounded border border-gray-100 px-3 py-1"
            type="password"
            placeholder="password"
            wire:model="password"
        />
        @error("password")
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <label
            class="mt-3 text-sm font-medium block py-1 leading-6 text-gray-900"
        >
            Profile picture
        </label>
        <input
            accept="image/*"
            class="block rounded border border-gray-100 px-3 py-1"
            type="file"
            placeholder="Profile Picture"
            wire:model="image"
            id="image"
        />
        @error("image")
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <button
            type="submit"
            class="block mt-3 px-4 rounded border bg-teal-500 py-2 text-white font-semibold hover:bg-teal-600"
        >
            Create
        </button>
    </form>
    <hr />
    @if (session("success"))
        <span class="bg-green-500 text-white text-center">
            {{ session("success") }}
        </span>
    @endif
</div>
