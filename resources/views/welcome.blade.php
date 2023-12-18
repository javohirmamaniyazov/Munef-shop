    <div id="preloader"></div>
        @include('layouts.app')
        @include('layouts.navigation')
        <div class="body">

            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="./img/carousel2.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="./img/carousel1.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="./img/carousel3.jpg" style="width:100%">
                </div>
            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

            <div class="products" id="products">
                <div class="products_heading">
                    Mashhur pishiriqlar
                </div>
                <div class="cards">
                    @foreach ($products as $product)
                        <div class="pcard">
                            <a href="{{ route('products.show', $product->id) }}">
                                <img src="{{ $product->image }}" class="pcard-img" alt="">
                            </a>
                            <div class="pcard-title">
                                {{ $product->name }}
                            </div>
                            <div class="for-el">
                                <div class="pcard-price">{{ $product->cost }} so'm</div>
                                <a href="{{ route('products.show', $product->id) }}" class="pcard-cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none">
                                        <g clip-path="url(#clip0_132_1609)">
                                            <path
                                                d="M5.83366 20C6.75413 20 7.50033 19.2538 7.50033 18.3333C7.50033 17.4128 6.75413 16.6666 5.83366 16.6666C4.91318 16.6666 4.16699 17.4128 4.16699 18.3333C4.16699 19.2538 4.91318 20 5.83366 20Z"
                                                fill="#4E342E" />
                                            <path
                                                d="M14.1667 20C15.0871 20 15.8333 19.2538 15.8333 18.3333C15.8333 17.4128 15.0871 16.6666 14.1667 16.6666C13.2462 16.6666 12.5 17.4128 12.5 18.3333C12.5 19.2538 13.2462 20 14.1667 20Z"
                                                fill="#4E342E" />
                                            <path
                                                d="M19.1663 2.5H17.4997V0.833333C17.4997 0.61232 17.4119 0.400358 17.2556 0.244078C17.0993 0.0877974 16.8874 0 16.6663 0C16.4453 0 16.2334 0.0877974 16.0771 0.244078C15.9208 0.400358 15.833 0.61232 15.833 0.833333V2.5H14.1663C13.9453 2.5 13.7334 2.5878 13.5771 2.74408C13.4208 2.90036 13.333 3.11232 13.333 3.33333C13.333 3.55435 13.4208 3.76631 13.5771 3.92259C13.7334 4.07887 13.9453 4.16667 14.1663 4.16667H15.833V5.83333C15.833 6.05435 15.9208 6.26631 16.0771 6.42259C16.2334 6.57887 16.4453 6.66667 16.6663 6.66667C16.8874 6.66667 17.0993 6.57887 17.2556 6.42259C17.4119 6.26631 17.4997 6.05435 17.4997 5.83333V4.16667H19.1663C19.3874 4.16667 19.5993 4.07887 19.7556 3.92259C19.9119 3.76631 19.9997 3.55435 19.9997 3.33333C19.9997 3.11232 19.9119 2.90036 19.7556 2.74408C19.5993 2.5878 19.3874 2.5 19.1663 2.5Z"
                                                fill="#4E342E" />
                                            <path
                                                d="M18.1425 8.105C18.0348 8.08484 17.9241 8.08626 17.8169 8.10919C17.7097 8.13212 17.6081 8.1761 17.518 8.23857C17.428 8.30105 17.3512 8.38078 17.2922 8.47315C17.2331 8.56552 17.193 8.66868 17.1742 8.77667C17.0702 9.35346 16.767 9.87541 16.3173 10.2513C15.8677 10.6272 15.3003 10.8332 14.7142 10.8333H4.515L3.73167 4.16667H10.8333C11.0543 4.16667 11.2663 4.07887 11.4226 3.92259C11.5789 3.76631 11.6667 3.55435 11.6667 3.33333C11.6667 3.11232 11.5789 2.90036 11.4226 2.74408C11.2663 2.5878 11.0543 2.5 10.8333 2.5H3.535L3.5 2.20667C3.42818 1.59883 3.13588 1.03846 2.67849 0.631753C2.2211 0.225045 1.6304 0.000260697 1.01833 0L0.833333 0C0.61232 0 0.400358 0.0877974 0.244078 0.244078C0.0877974 0.400358 0 0.61232 0 0.833333C0 1.05435 0.0877974 1.26631 0.244078 1.42259C0.400358 1.57887 0.61232 1.66667 0.833333 1.66667H1.01833C1.22244 1.66669 1.41945 1.74163 1.57198 1.87726C1.72451 2.0129 1.82195 2.19979 1.84583 2.4025L2.9925 12.1525C3.11154 13.1665 3.59873 14.1015 4.36159 14.78C5.12445 15.4585 6.10988 15.8334 7.13083 15.8333H15.8333C16.0543 15.8333 16.2663 15.7455 16.4226 15.5893C16.5789 15.433 16.6667 15.221 16.6667 15C16.6667 14.779 16.5789 14.567 16.4226 14.4107C16.2663 14.2545 16.0543 14.1667 15.8333 14.1667H7.13083C6.61377 14.1668 6.10939 14.0065 5.68718 13.708C5.26496 13.4096 4.94569 12.9875 4.77333 12.5H14.7142C15.691 12.5001 16.6367 12.157 17.3863 11.5307C18.1358 10.9044 18.6415 10.0346 18.815 9.07333C18.8345 8.96559 18.8325 8.85507 18.8092 8.74808C18.786 8.6411 18.7419 8.53974 18.6794 8.44981C18.6169 8.35989 18.5374 8.28315 18.4453 8.22398C18.3531 8.16482 18.2503 8.12439 18.1425 8.105Z"
                                                fill="#4E342E" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_132_1609">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="products_load">
                    <a class="products-btn" href="card.html">
                        Hammasini ko’rish
                    </a>
                </div>
            </div>

            <div class="single_content">
                <img class="sc_img" src="./img/single_cont.png" alt="">
                <div class="sc_detail">
                    <div class="sc_title">
                        The opportunity to change lives using
                        blockchain technology.
                    </div>
                    <div class="sc_desc">
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa
                        qui officia deserunt mollit anim id es
                    </div>
                    <div class="sc_btn">
                        <button>Buyurtma berish</button>
                    </div>
                </div>
                <div class="sc_img_box">
                    <img class="sc_img_m" src="./img/single_cont_m.png" alt="">
                </div>
            </div>

            <div class="about" id="about">
                <div class="about-heading">Biz Haqimizda</div>
                <div class="about-main">
                    <div class="about_des">
                        <p class="desc3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore magna aliqua. Dui nunc mattis enim ut tellus. Sem integer vitae justo eget
                            magna fermentum iaculis. Viverra justo nec ultrices dui. Et malesuada fames ac turpis
                            egestas
                            sed. Cum sociis natoque penatibus et magnis dis parturient. Purus faucibus ornare
                            suspendisse
                            sed nisi lacus sed.
                        </p>
                        <div class="owner">
                            <p class="desc2">“Sem integer vitae justo eget magna fermentum iaculis. Viverra justo nec
                                ultrices
                                dui. Et
                                malesuada fames ac turpis egestas sed. Cum sociis natoque penatibus et magnis dis
                                parturient.”
                            </p>
                            <div class="about-name">Jenny Wilson</div>
                        </div>
                        <div class="cnt">
                            <div class="adress">
                                <div class="about-name">Manzil:</div>Muqimiy ko’chasi, Toshkent
                            </div>
                            <div class="phone">
                                <div class="about-name">Telefon raqami:</div>+998 (99) 999-22-22
                            </div>
                        </div>
                    </div>
                    <div class="about_img">
                        <img src="./img/banner_munef.jpg" alt="About Img" />
                    </div>
                </div>
            </div>

            <div class="fikrlar" id="fikrlar">
                <div class="about-heading">Xursand mijozlarimiz fikrini tinglang</div>
                <div class="full-boxer">
                    <div class="comment-box">
                        <div class="comment">
                            <p>
                                Dui nunc mattis enim ut tellus. Sem integer vitae justo eget magna fermentum iaculis.
                                Viverra justo nec ultrices dui. Et malesuada fames ac turpis egestas sed. Cum sociis
                                natoque
                                penatibus et magnis dis parturient. Purus faucibus ornare suspendisse sed nisi lacus
                                sed.
                            </p>
                        </div>
                        <div class="box-top">
                            <div class="Profile">
                                <div class="profile-image">
                                    <img src="./img/1.png">
                                </div>
                                <div class="Name">
                                    <strong>Ranidi Lochana</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment-box">

                        <div class="comment">
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look
                                even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
                                be
                                sure.
                            </p>
                        </div>
                        <div class="box-top">
                            <div class="Profile">
                                <div class="profile-image">
                                    <img src="./img/2.png">
                                </div>
                                <div class="Name">
                                    <strong>Senuda Dilwan</strong>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment-box">

                        <div class="comment">
                            <p>
                                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                necessary, making this the first true generator on the Internet. It uses a dictionary of
                                over 200 Latin words, combined with a handful of model sentence structures, to generate
                                Lorem Ipsum .
                            </p>
                        </div>
                        <div class="box-top">
                            <div class="Profile">
                                <div class="profile-image">
                                    <img src="./img/3.png">
                                </div>
                                <div class="Name">
                                    <strong>Rumali fernando</strong>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment-box">

                        <div class="comment">
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam
                                est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                                numquam eius modi.
                            </p>
                        </div>
                        <div class="box-top">
                            <div class="Profile">
                                <div class="profile-image">
                                    <img src="/img/4.png">
                                </div>
                                <div class="Name">
                                    <strong>Midinu Thiranjana</strong>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        @include('layouts.footer')
