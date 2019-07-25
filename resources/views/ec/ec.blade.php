@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                @if($message=Session::get('create_success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span>{{$message}}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @elseif($message=Session::get('update_success'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <span>{{$message}}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @elseif($message=Session::get('delete_success'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span>{{$message}}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>CRUD Eloquent</h3><br>
                    <h4>Read data</h4>
                    <form action="search" method="GET">
		                <input type="text" name="search" placeholder="Search by Product_name" value="{{ old('search') }}">
		                <input type="submit" value="Search">
	                </form>
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>product_name</th>
                            <th>amount</th>
                            <th>price</th>
                            <th>photo</th>
                            <th>category_name</th>
                            <th>Action</th>
                        </tr>
                        @foreach($data as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->product_name }}</td>
                            <td>{{ $p->amount }}</td>
                            <td>{{ $p->price }}</td>
                            <td>{{ $p->photo }}</td>
                            @foreach($p->Ec_cat as $a)
                                <td>{{ $a->category_name }}</td>
                            @endforeach
                            
                            <td><a href="{{route('Ec_item.show',$p->id)}}" class="btn btn-danger">Edit</a> <br><br>    <form action="{{route('Ec_item.destroy',$p->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form></td>
                        </tr>

                            
                        @endforeach
                    </table>
                    
                    {{ $data->links() }}
                    <h4>Create data</h4>    
                    <form action="{{route('Ec_item.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="product_name" class="col-md-12 col-form-label text-md-left">{{ __('Product Name') }}</label>
                            <br>
                            <div class="col-md-12">
                                <input id="produk_name" type="text" class="form-control @error('produk_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}" required autocomplete="product_name">

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
                                <input id="amount" type="number" min="0" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount">

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
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">

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
                                <input id="photo" type="file" accept="image/*" style="padding:3px;" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo">

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
                            
                                <select id="cat_id" class="form-control @error('cat_id') is-invalid @enderror" name="cat_id" value="{{ old('cat_id') }}" required autocomplete="cat_id">
                                @foreach($data1 as $p1)
                                    <option value="{{ $p1->id }}">{{ $p1->category_name }}</option>
                                @endforeach
                                </select>
                            
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
            </div>
        </div>
    </div>
</div>
@endsection
