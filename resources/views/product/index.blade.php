@extends('layouts.main')

@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Product</h1>
                        
                        <a class="btn btn-primary mb-2" href="{{ route('product.create') }}" role="button">Create New</a>

                        <div class="card mb-4">
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            <th>Nama</th>
                                            <th>Price</th>
                                            <th>Sale Price</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>

                                   {{-- ini cara melakukan looping dari ProductController yang 'data' --}}
                                   <tbody>
                                    {{-- @foreach ini adalah perulangan/pengulangan dari data yang diberikan disini data yang 
                                        dimaksud ['data' => $products] yang ada di ProductController--}}
                                        @foreach ($products as $product) {{--yang dipanggil nama key nya dan harus di aliaskan key nya--}}
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>{{ $product->category->name }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>Rp. {{ number_format ($product->price, 0, 2) }}</td>
                                                <td>Rp. {{ number_format ($product->sale_price, 0, 2) }}</td>
                                               
                                                <td>
                                                    @if ($product->image == null)
                                                        <span class="badge bg-primary">No Image</span>
                                                    @else
                                                        <img src="{{ asset('storage/product/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 50px">
                                                    @endif
                                                </td>
                                                <td>
                                                    <form onsubmit="return confirm('Apakah Anda yakin untuk menghapus data ini?');" action="{{ route('product.destroy', $product->id) }}" method="POST">
                                                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
 
                                                    </form>
                                                </td>
                                            </tr>    
                                        @endforeach
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@endsection
