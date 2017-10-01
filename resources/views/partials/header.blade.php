<nav class="navbar navbar-inverse ">
    <div class="container-fluid">

        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('product.index') }}">Book Store - Must Read 2017</a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 searchbar">
            {{--<input  name="searchproduct" id="searchproduct" type="text" ">--}}
            <input class="form-control" type="text" placeholder="Search products ..." name="term" id="q" data-action="{{ route('search-autocomplete') }}">

        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    @if(Auth::check())
                        <a class="welcomemsg" >Logged-in user!</a>
                    @endif
                </li>
                <li>
                    <a href="{{ route('product.shoppingCart') }}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
                        <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                    </a>
                </li>
                <li class="">
                    @if(Auth::check())
                        <li><a href="{{ route('user.profile') }}">User Profile</a></li>
                        {{--<li role="separator" class="divider"></li>--}}
                        <li><a href="{{ route('user.logout') }}">Logout</a></li>
                    @else
                        <li><a href="{{ route('user.signin') }}">Login</a></li>
                        <li><a href="{{ route('user.signup') }}">Register</a></li>

                    @endif
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

@section('scripts')
<script src="/javascripts/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    $('#q').each(function() {
        var $this = $(this);
        var src = $this.data('action');

        $this.autocomplete({
            source: src,
            minLength: 2,
            select: function(event, ui) {
                $this.val(ui.item.value);
                $('#id').val(ui.item.id);
            }
        });
    });
</script>
@endsection
