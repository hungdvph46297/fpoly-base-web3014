<aside class="col-lg-3" style="float: left">
    <!-- Search -->
    <div class="widget">
        <h4 class="widget-title"><span>Search</span></h4>
        <form action="#!" class="widget-search">
            <input class="mb-3" id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
            <i class="ti-search"></i>
            <button type="submit" class="btn btn-primary btn-block">Search</button>
        </form>
    </div>

    <!-- categories -->
    <div class="widget widget-categories">
        <h4 class="widget-title"><span>Danh mục</span></h4>
        <ul class="list-unstyled widget-list">
            @foreach ($categories as $category)

            <li>
                <a href="{{ url('products/category/' . $category['id']) }}" class="d-flex">
                    {{ $category['name'] }}
                </a>
            </li>
            
            @endforeach
        </ul>
    </div>
</aside>
