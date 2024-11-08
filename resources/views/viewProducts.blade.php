@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-xl p-10 mt-10 shadow-xl">
        <h1 class="text-2xl font-bold mb-4">Product List</h1>
        <form action="{{route('viewProducts')}}" method="GET">
            @csrf
            <input class="border border-black rounded-md mb-4 w-60 pl-2 h-10" type="text" name="name" placeholder="enter product name">
        </form>
        <form action="{{route('viewProducts')}}" method="GET" class="w-full flex justify-start items-center gap-x-4 mb-4">
            @foreach ($categories as $category)
                <button type="submit" name="category_id" value="{{ $category->id }}" class="hover:scale-[1.05] transition-all ease duration-[500] border border-black rounded-md p-2">
                    {{$category->name}}
                </button>
            @endforeach
            <button type="submit" name="category_id" value="" class="border border-black rounded-md p-2 hover:scale-[1.05] transition-all ease duration-[500]">
                X
            </button>
        </form>
        <ul>
            @if ($products->isEmpty())
                <p>No products found.</p>
            @else
                @foreach ($products as $product)
                    <li>
                        <strong>{{ $product->name }}</strong>: 
                        {{ $product->description }} (Stock: {{ $product->stock }})
                    </li>
                @endforeach
            @endif
            
        </ul>
    </div>
@endsection

{{-- 
kalo cara yg dipake skrg itu nyampur dalem 1 route, tp perlu checking yg jelas
=> di controller : check dlu di main route ada request ga
=> kalo ada, baru productsnya isinya hasil search, kalo gaada bru normal fetch all --}}

{{-- bisa 2 cara, separate function & route, tp jdnya route jelek keliatannya --}}

{{-- @isset($searchResult)
    @if ($searchResult->isNotEmpty())
        @foreach ($searchResult as $product)
            <li>
                <strong>{{ $product->name }}</strong>
                : {{ $product->description }} (Stock: {{ $product->stock }})
            </li>
        @endforeach
    @else
        <p>No products found.</p>
    @endif
@else 
    @foreach ($products as $product)
        <li>
            <strong>{{ $product->name }}</strong>
            : {{ $product->description }} (Stock: {{ $product->stock }})
        </li>
    @endforeach
@endisset --}}

