@extends('layouts.admin')
@section('content')
    <div class="card shadow mb-10">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Create About </h6>
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

            <form action="/about" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    Company Name
                    <input type="text" class="form-control form-control" name="name" placeholder="Company Name" required>
                </div>



                <div class="form-group">
                    Logo
                    <input type="file" class="form-control form-control" name="logo" placeholder="Logo " required>
                </div>




                <div class="form-group">
                    Banner
                    <input type="file" class="form-control form-control" name="photo" placeholder="Banner " required>
                </div>




                <div class="form-group">
                    About Us
                    <textarea class="form-control form-control" name="detail" placeholder="Short Detail" required   rows="5">
                    </textarea>
                </div>


                <div class="form-group">
                    History
                    <textarea class="form-control form-control" name="history" placeholder="Short History" required   rows="5">
                    </textarea>
                </div>



                <div class="form-group">
                    Mission
                    <textarea class="form-control form-control" name="mission" placeholder="mission"     rows="5">
                    </textarea>
                </div>


                <div class="form-group">
                    Vision
                    <textarea class="form-control form-control" name="vision" placeholder="vision"     rows="5">
                    </textarea>
                </div>

                <div class="form-group">
                    Goal
                    <textarea class="form-control form-control" name="goal" placeholder="goal"     rows="5">
                    </textarea>
                </div>

                <div class="form-group">
                    Values
                    <textarea class="form-control form-control" name="values" placeholder="values"     rows="5">
                    </textarea>
                </div>




                <button class="btn btn-primary btn-user btn-block" type="submit">
                    Update About Us
                </button>

            </form>



        </div>
    </div>
@endsection
