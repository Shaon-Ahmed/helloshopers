@extends ('frontend.layout.master')


@section('main')

    <div class="container">

        <h3 class="text-center"> {{$product->title}}</h3>
        <hr>

        <!--Grid row-->
        <div class="card">

            <!--Grid column-->
            <div class="row">
                <aside class="col-sm-5 border-right">
                <article class="gallery-warp">
                <img src="{{ $product->getFirstMediaUrl('products') }}" class="card-img-top" alt="{{ $product->title }}">
                </article>
                </aside>

                <aside class="col-sm-7">
                    <article class="card-body p-5">
                        <h3 class="title mb-3"> {{ $product->title }}</h3>
                        <div class="col-md-6 mb-4">

                            <!--Content-->


                            <p class="price-detail-wrap">
                    <span class="price h3 text-info">
                        <span class="currency"> BDT </span>
                        <span class="num"> {{ $product->price }}</span>

                        </span>
                            </p>
                            <dl class="item-property">
                                <dt> Product Description</dt>
                                <dd><p> {{ $product->description }}</p></dd>
                            </dl>
                            <hr>

                            <form class="d-flex justify-content-left">
                                <!-- Default input -->
                                <a href="#" class="btn btn-lg btn-outline-primary text-uppercase"><i class="fas fa-shopping-cart"></i> Add to cart </a>


                            </form>


                        </div>
                        <!--Content-->


                        <!--Grid column-->
                    </article>

                </aside>

            </div>
            <!--Grid column-->

            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>


    @endsection
