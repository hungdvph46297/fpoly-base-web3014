<div class="container">
    @include('listproducts.partials.categories')

    <section class=" mb-5 mt-4 ">
        <div class="">
            <div class="row">


                @foreach ($products as $product)
                    <div class="mr-2 mt-2">
                        <div class="card border-0 rounded-0 text-center shadow-none overflow-hidden">
                            <a href="{{ url('products/' . $product['id']) }}">
                                <span class="badge badge-primary">NEW</span>
                                <img src="{{ asset($product['img_thumbnail']) }}" alt=""
                                    class="card-img-top rounded-0" style="width: 250px; height: 250px">
                                <div class="card-body">
                                    <h4 class="text-uppercase mb-3">
                                        <a href="{{ url('products/' . $product['id']) }}">
                                            {{ $product['name'] }}</a>
                                    </h4>
                                    @if (isset($product['c_name']))
                                        <p><a href="{{ url('products/category/' . $product['category_id']) }}"
                                                class="h4 text-muted font-weight-light mb-3">
                                                {{ $product['c_name'] }}</a></p>
                                    @else
                                        <p class="text-muted font-weight-light mb-3">Category not available</p>
                                    @endif
                                    @if (isset($product['price']))
                                        <p class="h4">{{ $product['price'] }}$</p>
                                    @else
                                        <p class="text-muted font-weight-light mb-3">Price not available</p>
                                    @endif
                                    <a href="{{ url('cart/add') }}?quantity=1&productID={{ $product['id'] }}"
                                        class="btn btn-primary">Thêm vào giỏ hàng</a>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

                <div class="col-12 text-center mt-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item {{ $currentPage == 1 ? 'disabled' : '' }}">
                            <a href="?page={{ $currentPage - 1 }}" class="page-link">&laquo;</a>
                        </li>

                        @for ($i = 1; $i <= $totalPage; $i++)
                            <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                                <a href="?page={{ $i }}" class="page-link">{{ $i }}</a>
                            </li>
                        @endfor

                        <li class="page-item {{ $currentPage == $totalPage ? 'disabled' : '' }}">
                            <a href="?page={{ $currentPage + 1 }}" class="page-link">&raquo;</a>
                        </li>
                    </ul>
                </div>


            </div>

         


        </div>
</div>
</section>

</div>
