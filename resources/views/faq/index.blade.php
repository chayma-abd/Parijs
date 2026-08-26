@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="text-2xl font-bold mb-6">Veelgestelde vragen</h1>

                @foreach($categories as $category)
                    <div class="mb-8">
                        <h2 class="text-xl font-bold mb-4 text-blue-600">{{ $category->name }}</h2>
                        
                        @foreach($category->faqs as $faq)
                            <div class="mb-4 p-4 border rounded">
                                <h3 class="font-semibold text-lg">{{ $faq->question }}</h3>
                                <p class="text-gray-700 mt-2">{{ $faq->answer }}</p>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection