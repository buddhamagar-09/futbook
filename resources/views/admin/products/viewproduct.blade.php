@extends('admin.layouts.app')

@section('content')
    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-3xl font-bold tracking-tight">View Products</h1>
            <p class="mt-2 text-sm text-slate-400">Manage all products in your store.</p>
        </div>
    </div>

    <div class="overflow-hidden rounded-[1.75rem] border border-white/10 bg-white/5">
        <table class="table">
            <thead>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($productlist as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td><img src="{{ asset('image/products/' . $product->image) }}" alt="{{ $product->name }}"
                                class="w-16 h-16 object-cover rounded"></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            <a href="{{ route('admin.edit.product', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('admin.delete.product', $product->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection