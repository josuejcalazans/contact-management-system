@extends('_layouts.app')

@section('title', 'Create Contact')

@section('header', 'Create Contact')

@section('content')
    <div class="rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <!-- Campo Nome -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-800 dark:border-zinc-700 dark:text-white" required>
            </div>

            <!-- Campo Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-800 dark:border-zinc-700 dark:text-white" required>
            </div>

            <!-- Campo Telefone -->
            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone</label>
                <input type="text" name="phone" id="phone" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-800 dark:border-zinc-700 dark:text-white" required>
            </div>

          <div  class="flex justify-end gap-2">
            <a href="{{ route('contacts.index') }}" class="bg-zinc-800 hover:bg-zinc-600 text-white px-4 py-2 rounded-lg transition duration-300">
                Back
            </a>
            <button type="submit" class="bg-blue-800 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition duration-300">
                Save Contact
            </button>

          </div>
        </form>
    </div>
@endsection