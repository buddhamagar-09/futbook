@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    <div class="card mt-4">

        <div class="card-header">
            <h4>Edit Product</h4>
        </div>

        <div class="card-body">
       
            <!-- Your product form goes here -->
              <div class="max-w-3xl rounded-[1.75rem] border border-white/10 bg-white/5 p-6">
        <form action="{{ route('admin.update.product', $eproduct->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            <div>
                <label class="mb-2 block text-sm text-slate-300">Product Name</label>
                <input type="text" name="product_name" value="{{ $eproduct->name }}" class="w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-sm text-white outline-none focus:border-pink-400/40">
            </div>

            <div>
                <label class="mb-2 block text-sm text-slate-300">Description</label>
                <textarea name="product_description" rows="4" class="w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-sm text-white outline-none focus:border-pink-400/40">{{ $eproduct->description }}</textarea>
            </div>
             <div>
                <label class="mb-2 block text-sm text-slate-300">Price</label>
                <input type="number" name="product_price" step="0.01" value="{{ $eproduct->price }}" class="w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-sm text-white outline-none focus:border-pink-400/40">
            </div>
            <!-- quantity -->
            <div>
                <label class="mb-2 block text-sm text-slate-300">Quantity</label>
                <input type="number" name="product_quantity" value="{{ $eproduct->quantity }}" class="w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-sm text-white outline-none focus:border-pink-400/40">
            </div>


            <!-- current Image -->
             <div>
                <label class="mb-2 block text-sm text-slate-300">Current Product Image</label>
                <img src="{{ asset('image/products/' . $eproduct->image) }}" alt="{{ $eproduct->name }}" class="w-32 h-32 object-cover rounded">
             </div>

            <div>
                <label class="mb-2 block text-sm text-slate-300">Product Image</label>
                <input type="file" name="product_image" class="w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-sm text-slate-300">
            </div>

            <button type="submit" class="mt-3 rounded-full bg-blue-500 px-6 py-3 text-sm font-semibold text-white transition hover:bg-pink-400">
                Save Product
            </button>
        </form>
       
    </div>

        </div>

    </div>

</div>

@endsection