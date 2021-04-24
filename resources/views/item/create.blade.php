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

            <form action="/item" method="post" enctype="multipart/form-data">
@csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control" id="title" placeholder="Item Name" required>
                </div>



                <div class="form-group">
                    <input type="file" class="form-control form-control" id="photo" placeholder="Item Photo" required>
                </div>


                <div class="form-group">
                    <select class="form-control form-control" id="category_id" placeholder="Item Category" required>
                        <option value="">Select Category</option>
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Universal</option>
                    </select>
                </div>


                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="number" class="form-control form-control" id="price" placeholder="Item Price" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="weight" placeholder="Item Weight">
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="color" class="form-control form-control" id="color" placeholder="Item Color" value="black">
                    </div>
                    <div class="col-sm-6">
                        <input type="number" class="form-control form-control" id="init_qnt" placeholder="Stock Balance">
                    </div>
                </div>




                <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <input type="number" class="form-control form-control" id="height" placeholder="Height"  >
                    </div>
                    <div class="col-sm-4">
                        <input type="number" class="form-control form-control" id="width" placeholder="Width">
                    </div>

                    <div class="col-sm-4">
                        <input type="number" class="form-control form-control" id="Diameter" placeholder="Diameter">
                    </div>
                </div>


                <div class="form-group">
                    <select class="form-control form-control" id="category_id" placeholder="Item Badge" >
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
