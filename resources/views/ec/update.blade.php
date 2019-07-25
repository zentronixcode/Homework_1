@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Update Data</h3><br>   
                    @foreach($data as $p)
                    <!-- {{ $ids = $p->id }}                  -->
                    <form action="{{route('Ec_item.update', $p->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group row">
                        
                        <div class="col-md-6">
                            <input type="hidden" name="old_photo" value="{{ $p->photo }}">
                            <input type="hidden" name="id_item" value="{{ $p->id }}">
                            <label for="product_name" class="col-md-12 col-form-label text-md-left">{{ __('Product Name') }}</label>
                            <br>
                            <div class="col-md-12">
                                <input id="produk_name" type="text" value="{{ $p->product_name }}" class="form-control @error('produk_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}" required autocomplete="product_name">

                                @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="amount" class="col-md-12 col-form-label text-md-left">{{ __('Amount') }}</label>
                            <br>
                            <div class="col-md-12">
                                <input id="amount" value="{{ $p->amount }}" type="number" min="0" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount">

                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="price" class="col-md-12 col-form-label text-md-left">{{ __('Price') }}</label>
                            <br>
                            <div class="col-md-12">
                                <input id="price" value="{{ $p->price }}" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="photo" class="col-md-12 col-form-label text-md-left">{{ __('Photo') }}</label>
                            <br>
                            <div class="col-md-12">
                                <input id="photo" type="file" accept="image/*" style="padding:3px;" class="form-control @error('photo') is-invalid @enderror" name="new_photo" autocomplete="photo">

                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="cat_id" class="col-md-12 col-form-label text-md-left">{{ __('Category') }}</label>
                            <br>
                            <div class="col-md-12">
                            @foreach($data1 as $p1)
                                <select id="cat_id" class="form-control @error('cat_id') is-invalid @enderror" name="cat_id" value="{{ old('cat_id') }}" required autocomplete="cat_id">
                                
                                    <option value="{{ $p1->id }}">{{ $p1->category_name }}</option>
                                </select>
                            @endforeach
                                @error('cat_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                            <div class="col-md-12 col-form-label"></div>
                            <br>
                            <button type="submit" class="form-control btn btn-primary">
                                    {{ __('Submit') }}
                            </button>
                            </div>
                                
                        </div>
                        
                    </div>
                    </form>
                </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
