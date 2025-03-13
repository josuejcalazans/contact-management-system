@extends('_layouts.app')

@section('title', 'Contacts')

@section('header', 'Contacts')

@section('content')

    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-end mb-4 gap-4">
        <a href="{{ route('home') }}" class="bg-zinc-800 hover:bg-zinc-600 text-white px-4 py-2 rounded-lg transition duration-300">
            Home
        </a>
        <a href="{{ route('contacts.create') }}" class="bg-blue-900 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition duration-300">
            Create Contact
        </a>
    </div>
    <div class="mt-4">

        @foreach ($contacts as $contact)
            <div class="rounded-lg bg-white p-6 mb-4 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700">
                <div class="pt-3 sm:pt-5">
                    <h3 class="text-xl font-semibold text-black dark:text-white">{{ $contact->name }}</h3>
                    <p class="mt-4 text-sm/relaxed">
                        {{ $contact->email }}
                    </p>
                    <p class="mt-4 text-sm/relaxed">
                        {{ $contact->phone }}
                    </p>
                </div>
                <div class="flex items-start justify-end gap-4 mt-4">

                    <a href="{{ route('contacts.edit', $contact->id) }}" class="bg-green-900 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition duration-300">
                        Edit
                    </a>

                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-900 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition duration-300">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    {{ $contacts->links() }}
@endsection