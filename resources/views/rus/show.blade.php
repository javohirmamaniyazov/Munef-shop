<div id="preloader"></div>
@include('layouts.app')
@include('layouts.navigation')
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imgs = document.querySelectorAll(".img-select a");
        const imgBtns = [...imgs];
        let imgId = 0;

        imgBtns.forEach((imgItem) => {
            imgItem.addEventListener("click", (event) => {
                event.preventDefault();
                imgId = parseInt(imgItem.dataset.id);
                slideImage();
            });
        });

        function slideImage() {
            const displayWidth = document.querySelector(
                ".img-showcase img:first-child"
            ).clientWidth;

            document.querySelector(".img-showcase").style.transform = `translateX(${
                -(imgId - 1) * displayWidth
            }px)`;
        }

        // window.addEventListener("resize", slideImage);
        document.getElementById("productLink").addEventListener("click", function() {
            document.getElementById("loadingGif").style.display = "block";
        });

        window.addEventListener("load", function() {
            document.getElementById("loadingGif").style.display = "none";
        });
    });
</script>
<div class="body">

    <div class="breadcrumbs">
        <div class="bc_item1"><a href="/">Home</a></div>
        <img class="bc_item2" src="{{ asset('img/slash.png') }}" alt="">
        <div class="bc_item3">{{ $product->rus_name }}</div>
    </div>

    <div class="order">
        <div class="card-wrapper">
            <div class="card">
                <!-- card left -->
                <div class="card_imgs">
                    <div class="product-imgs">
                        <div class="img-display">
                            <div class="img-showcase">
                                @foreach ($product->productImages as $item)
                                    <img src="{{ asset($item->image) }}">
                                @endforeach
                            </div>
                        </div>
                        <div class="img-select">
                            @foreach ($product->productImages as $item)
                                <div class="img-item">
                                    <a href="#" data-id="{{ $item->id }}">
                                        <img src="{{ asset($item->image) }}" style="width: 100px;"  alt="shoe image">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- card right -->
                <div class="product-content">

                    <div class="product-detail">
                        <div class="product-name">{{ $product->rus_name }} </div>
                        <p style="min-height: 110px;">{{ $product->rus_description }}</p>
                        <h3 class="tar"> Tarkibi</h3>
                        <div class="inf">
                            <ul>
                                @foreach (json_decode($product->rusIngredients) as $rusIngredient)
                                    <li>{{ $rusIngredient }}</li>
                                @endforeach
                            </ul>
                        </div>

                    </div>

                    <div class="purchase-info">
                        <div class="narx">
                            <p>Narx: <span class="narx2">{{ $product->cost }} so'm</span></p>
                        </div>

                        <a href={{ route('orders', $product->id) }} type="button">Buyurtma berish</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
