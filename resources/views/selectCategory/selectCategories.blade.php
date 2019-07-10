@extends('master')
@section('title')
Home
@endsection
@section('homeContant')
    <div class="container">
        <h1 style="text-align: center;">Display Products By Categories</h1><br> 

        <div class="row">
            <div class="col-md-4" id="findBtn">
                <div class="form-group">
                    <label>Select Products By Categories</label>
                    <select class="form-control subcategory_list">
                        <option>Shop Categories</option>
                        @foreach($categories as $category)
                            @if($category->parentId == 0)
                            <optgroup label="{{ $category->categoryName }}">
                                <?php
                                $sub_categories = DB::table('categories')
                                        ->where('parentId', $category->id)
                                        ->where('publicationStatus', 1)
                                        ->get();
                                ?>
                                @foreach($sub_categories as $sub_category)
                                <option value="{{ $sub_category->id }}"> -- {{ $sub_category->categoryName }}</option>
                                @endforeach
                            </optgroup>
                            @endif
                        @endforeach
                    </select> 
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div id="productData">
            @foreach($products as $product)
            
            <div class="col-sm-3">
                <div class="thumbnail" style="height: 420px;">
                    <img style="height: 200px;" src="{{ asset($product->productImage)}}" alt="Imaage">
                    <div class="caption">
                        <h3>{{ $product->productName }}</h3>
                        <p>{{ str_limit($product->productInformation, 50) }}</p>
                        <p><a href="#" class="btn btn-primary" role="button">Add To Cart</a></p>
                    </div>
                </div>
            </div>
            
            @endforeach
            </div>
        </div>
    </div>
    <script type="text/javascript">
        window.onload = function () {
            $(document).ready(function(){
                $('.subcategory_list').on('change', function(){
                    var subid = $(this).val();
                    // $.get("{{url('/selcelProduct')}}/" + subid, function (data) {
                    //     // console.log(data);
                    //         $("#productData").html(data);
                    //     });

                    $.ajax({
                        url: "{{url('/selcelProduct')}}/" + subid,
                        type: "GET",
                        data: {subid: subid},
                        success: function (data) {
                            $("#productData").html(data);
                        }
                    });
                });
            });
        };
    </script>
@endsection