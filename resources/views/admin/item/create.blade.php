@extends('layouts.admin')
@section('content')
    <div class="card shadow mb-10">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Create Product </h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">

            <form action="/items" method="post" enctype="multipart/form-data">
@csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control" name="name" placeholder="Item Name" required>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                    @enderror

                </div>



                <div class="form-group">
                    <input type="file" class="form-control form-control" name="photo" placeholder="Item Photo" required>
                    @error('photo')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <textarea class="form-control form-control" name="detail" placeholder="Detail Information about the product" required>
                    </textarea>
                    @error('detail')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>


                <div class="form-group">
                    <select class="form-control form-control" name="item_category_id" placeholder="Item Category" required>

                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Universal</option>
                    </select>
                    @error('item_category_id')
                    <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group row">

                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="number" class="form-control form-control" name="price" placeholder="Item Price" required>
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="weight" placeholder="Item Weight" required>
                        @error('weight')
                        <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>


                </div>


                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control" name="color" placeholder="Item Color" value="black">
                        @error('color')
                        <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <input type="number" class="form-control form-control" name="init_qnt" placeholder="Stock Balance">

                        @error('init_qnt')
                        <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>




                <div class="form-group row" style="display: none">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <input type="number" class="form-control form-control" name="height" placeholder="Height"  >
                    </div>
                    <div class="col-sm-4">
                        <input type="number" class="form-control form-control" name="width" placeholder="Width">
                    </div>

                    <div class="col-sm-4">
                        <input type="number" class="form-control form-control" name="Diameter" placeholder="Diameter">
                    </div>
                </div>


                <div class="form-group">
                    <select class="form-control form-control" name="badge" placeholder="Item Badge" >
                        <option value="">Select Category</option>
                        <option value="">NEW</option>
                        <option value="">HOT</option>
                        <option value="">SALE</option>
                    </select>
                </div>

                <button class="btn btn-primary btn-user btn-block" type="submit">
                    Post Product
                </button>

            </form>



        </div>
    </div>
@endsection
