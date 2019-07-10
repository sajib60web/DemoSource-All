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