@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="inline-block">
                        Dashboard
                    </div>
                    <div>
                        <a href="{{route('home')}}">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    Add new subcategory!
                    <form action="{{route('subcategory.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Select category</label>
                            <select name="category_id" id="exampleFormControlSelect1" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{($category->id)}}">{{$category->categoryname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <label for="subcategory">Enter a subcategory</label>
                            <input type="text" class="form-control" name="subcategoryname">
                            @error('subcategoryname')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-primary">Submit the subcategory</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
