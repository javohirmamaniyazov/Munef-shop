    <div id="preloader"></div>
    @include('layouts.app')
    @include('layouts.navigation')
    </div>
    <div class="body">

        <div class="breadcrumbs">
            <div class="bc_item1"><a href="/">Home</a></div>
            <img class="bc_item2" src="{{ asset('img/slash.png') }}" alt="">
            <div class="bc_item3">{{ $product->name }}</div>
        </div>

        <div class="order">
            <div class="card-wrapper">
                <div class="card">
                    <!-- card left -->
                    <div class="card_imgs">
                        <div class="product-imgs">
                            <div class="img-display">
                                <div class="img-showcase">
                                    <img src="{{ asset($product->image) }}" alt="shoe image">
                                    {{-- <img src="{{ asset('img/Rectangle 23.png') }}" alt="shoe image">
                                    <img src="{{ asset('img/Rectangle 24.png') }}" alt="shoe image">
                                    <img src="{{ asset('img/Rectangle 25.png') }}" alt="shoe image">
                                    <img src="{{ asset('img/Rectangle 26.png') }}" alt="shoe image"> --}}
                                </div>
                            </div>
                            <div class="img-select">
                                <div class="img-item">
                                    <a href="#" data-id="1">
                                        <img src="{{ asset($product->image) }}" alt="shoe image">
                                    </a>
                                </div>
                                <div class="img-item">
                                    <a href="#" data-id="2">
                                        <img src="{{ asset('img/Rectangle 23.png') }}" alt="shoe image">
                                    </a>
                                </div>
                                <div class="img-item">
                                    <a href="#" data-id="3">
                                        <img src="{{ asset('img/Rectangle 24.png') }}" alt="shoe image">
                                    </a>
                                </div>
                                <div class="img-item">
                                    <a href="#" data-id="4">
                                        <img src="{{ asset('img/Rectangle 25.png') }}" alt="shoe image">
                                    </a>
                                </div>
                                <div class="img-item">
                                    <a href="#" data-id="5">
                                        <img src="{{ asset('img/Rectangle 26.png') }}" alt="shoe image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card right -->
                    <div class="product-content">

                        <div class="product-detail">
                            <div class="product-name">{{ $product->name}} </div>
                            <p style="min-height: 110px;">{{ $product->description}}</p>
                            <h3 class="tar"> Tarkibi</h3>
                            <div class="inf">

                                <ul>
                                    @foreach (json_decode($product->ingredients) as $ingredient)
                                    <li>{{ $ingredient }}</li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>

                        <div class="purchase-info">
                            <div class="narx">
                                <p>Narx: <span class="narx2">{{ $product->cost}} so'm</span></p>
                            </div>

                        <a href={{ route('orders', $product->id )}} type="button">Buyurtma berish</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')