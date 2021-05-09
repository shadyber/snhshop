@php
$itemss =(object) array_merge_recursive(\App\Models\Item::popularN(12)->toArray(),
\App\Models\Item::lastN(12)->toArray());

@endphp

@foreach($itemss as $item)
<!-- Quick View -->
<div id="qck-view-shop{{$item['id']}}" class="zoom-anim-dialog qck-inside mfp-hide">
    <div class="row">
        <div class="col-sm-6">

            <!-- Images Slider -->
            <div class="images-slider">
                <ul class="slides">
                    <li data-thumb="{{$item['thumb']}}">
                        <img src="{{$item['photo']}}" alt="{{$item['name']}}">
                    </li>

                </ul>
            </div>
        </div>

        <!-- Content Info -->
        <div class="col-sm-6">
            <div class="contnt-info">
                <h3>{{$item['name']}}</h3>

                {{$item['detail']}}

                <!-- Btn  -->
                <div class="add-info">
                    <div class="quantity">
                        <input type="number" min="1" max="{{$item['init_qnt']}}" step="1" value="1" class="form-control qty">
                    </div>
                    <a href="/addtocart/{{$item['id']}}" class="btn btn-inverse"><i class="icon-heart"></i></a> <a href="#."
                                                                                           class="btn">ADD
                        TO CART </a></div>
            </div>
        </div>
    </div>
</div>
@endforeach
