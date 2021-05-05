@extends('layouts.admin')
@section('content')
    <div class="card shadow mb-10">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">List All Product </h6>
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

                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{$item->name}}</td>
                                        <td>{{$item->Category}}</td>
                                        <td>{{$item->measurement}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->init_qnt}}</td>
                                        <td> edit , Delete , show</td>
                                    </tr>

        </div>
    </div>
@endsection
