@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Create Category</h1>

            <div class="card mb-4">
                <div class="card-body">

                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf 

                        {{--  @csrf adalah pengaman dari laravel agar tidak di hack --}}

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" name="name" required>
                            @error('name')
                                <small class="text-danger">{{ $message }} </small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('category.index') }}" class="btn btn-secondary">Cancel</a>
                        {{-- <button type="sbutton" class="btn btn-secondary">Cancel</button> --}}
                      
                    </form>

                </div>
            </div>
        </div>
    </main>
@endsection