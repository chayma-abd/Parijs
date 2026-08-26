@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="text-2xl font-bold mb-6">Gebruikers beheren</h1>

                <div class="mb-4">
                    <a href="{{ route('attractions.index') }}" style="color: #007bff; text-decoration: none;">← Bezienswaardigheden beheren</a>
                </div>

                @if(session('success'))
                    <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2 text-left">ID</th>
                            <th class="border p-2 text-left">Naam</th>
                            <th class="border p-2 text-left">Email</th>
                            <th class="border p-2 text-left">Admin</th>
                            <th class="border p-2 text-left">Acties</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="border p-2">{{ $user->id }}</td>
                                <td class="border p-2">{{ $user->name }}</td>
                                <td class="border p-2">{{ $user->email }}</td>
                                <td class="border p-2">
                                    @if($user->is_admin)
                                        <span class="text-green-600">Ja</span>
                                    @else
                                        <span class="text-red-600">Nee</span>
                                    @endif
                                </td>
                                <td class="border p-2">
                                    @if($user->email !== 'admin@ehb.be')
                                        @if($user->is_admin)
                                            <form action="{{ route('admin.remove', $user->id) }}" method="POST" class="inline">
                                                @csrf
                                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Admin afnemen</button>
                                            </form>
                                        @else
                                            <form action="{{ route('admin.make', $user->id) }}" method="POST" class="inline">
                                                @csrf
                                                <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">Admin maken</button>
                                            </form>
                                        @endif
                                    @else
                                        <span class="text-gray-500">Hoofdadmin</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection