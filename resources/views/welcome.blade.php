<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Munef</title>
    <link rel="stylesheet" href="{{ asset('styles/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <div id="preloader"></div>

    <div class="header">
        <div class="nav">
            <input type="checkbox" id="nav-check" />
            <a href="index.html" class="nav-header">
                <div class="nav-title">
                    Munef
                </div>
            </a>
            <div class="nav-btn">
                <div class="switch_lang_mob">
                    <div class="switch_lang">
                        <div class="selected_lang" id="selectedLang2">
                            <img src="./img/uzbflag.png" alt="">Uzb
                        </div>
                        <div class="selection_lang" id="languageOptions2" style="display: none;">
                            <a href="index.html" class="sl1" id="uzbLang2"><img src="{{ asset('img/uzbflag.png')}}" alt="">Uzb</a>
                            <a href="./rus/index.html" class="sl2" id="rusLang2"><img src="./img/rusflag.png" alt="">Rus</a>
                        </div>
                    </div>
                </div>
                <label for="nav-check">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>
            <nav class="nav-links">
                <a href="index.html">
                    Pishiriqlar
                </a>
                <a href="#about">Biz haqimizda</a>
                <a href="#fikrlar">Mijozlar fikri</a>
                <div class="switch_lang_des">
                    <div class="switch_lang">
                        <div class="selected_lang" id="selectedLang">
                            <img src="./img/uzbflag.png" alt="">Uzb
                        </div>
                        <div class="selection_lang" id="languageOptions" style="display: none;">
                            <a href="/" class="sl1" id="uzbLang"><img src="./img/uzbflag.png" alt="">Uzb</a>
                            <a href="./rus/index.html" class="sl2" id="rusLang"><img src="./img/rusflag.png" alt="">Rus</a>
                        </div>
                    </div>
                </div>
                <a href="contact.html" class="contact-btn">Bog'lanish</a>
            </nav>
        </div>
    </div>
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
                    <a href="{{ route('products.show', $product->id )}}">
                        <img src="{{ $product->image }}" class="pcard-img" alt="">
                    </a>
                    <div class="pcard-title">
                        {{ $product->name }}
                    </div>
                    <div class="for-el">
                        <div class="pcard-price">{{ $product->cost }} so'm</div>
                        <a href="product_detail.html" class="pcard-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
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
            <div class="about-heading" >Biz Haqimizda</div>
            <div class="about-main">
                <div class="about_des">
                    <p class="desc3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut
                        labore et dolore magna aliqua. Dui nunc mattis enim ut tellus. Sem integer vitae justo eget
                        magna fermentum iaculis. Viverra justo nec ultrices dui. Et malesuada fames ac turpis egestas
                        sed. Cum sociis natoque penatibus et magnis dis parturient. Purus faucibus ornare suspendisse
                        sed nisi lacus sed.
                    </p>
                    <div class="owner">
                        <p class="desc2">“Sem integer vitae justo eget magna fermentum iaculis. Viverra justo nec
                            ultrices
                            dui. Et
                            malesuada fames ac turpis egestas sed. Cum sociis natoque penatibus et magnis dis
                            parturient.”
                        </p>
                        <div class="about-name" >Jenny Wilson</div>
                    </div>
                    <div class="cnt">
                        <div class="adress">
                            <div class="about-name">Manzil:</div>Muqimiy ko’chasi, Toshkent
                        </div>
                        <div class="phone">
                            <div class="about-name" >Telefon raqami:</div>+998 (99) 999-22-22
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
                            Viverra justo nec ultrices dui. Et malesuada fames ac turpis egestas sed. Cum sociis natoque
                            penatibus et magnis dis parturient. Purus faucibus ornare suspendisse sed nisi lacus sed.
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
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
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
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
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

    <div class="footer">
        <div class="footerel">
            <div class="nav-title">
                Munef
            </div>
            <p class="desc3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque alias quas sed debitis
                sapiente aliquid est ut esse. Ratione, exercitationem.</p>
        </div>
        <div class="mobile-res">
            <div class="footer-item">
                <div>
                    <a href="#products"> Pishiriqlar</a>
                </div>
                <div>
                    <a href="#about"> Biz Haqimizda</a>
                </div>
                <div>
                    <a href="#fikrlar"> Mijozlar Fikri</a>
                </div>
            </div>

            <div class="footer-item">
                <div> Bizning ijtimoiy tarmoqlar</div>
                <div class="social-ins">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <path
                            d="M9.33445 14C9.33445 11.4228 11.4232 9.33296 14.0006 9.33296C16.5779 9.33296 18.6678 11.4228 18.6678 14C18.6678 16.5772 16.5779 18.667 14.0006 18.667C11.4232 18.667 9.33445 16.5772 9.33445 14ZM6.81144 14C6.81144 17.9704 10.03 21.1888 14.0006 21.1888C17.9711 21.1888 21.1897 17.9704 21.1897 14C21.1897 10.0296 17.9711 6.81117 14.0006 6.81117C10.03 6.81117 6.81144 10.0296 6.81144 14ZM19.7942 6.52613C19.7941 6.8584 19.8925 7.18325 20.077 7.4596C20.2615 7.73595 20.5238 7.95138 20.8307 8.07866C21.1377 8.20594 21.4755 8.23934 21.8014 8.17465C22.1273 8.10996 22.4267 7.95007 22.6618 7.71521C22.8969 7.48036 23.057 7.18107 23.1219 6.85521C23.1869 6.52935 23.1538 6.19154 23.0267 5.88451C22.8997 5.57748 22.6845 5.31502 22.4082 5.1303C22.132 4.94559 21.8072 4.84693 21.475 4.8468H21.4743C21.0289 4.84701 20.6018 5.02398 20.2868 5.33885C19.9718 5.65372 19.7946 6.08074 19.7942 6.52613ZM8.34433 25.3957C6.97934 25.3335 6.23742 25.1061 5.74437 24.9141C5.09072 24.6596 4.62433 24.3565 4.13397 23.8669C3.64362 23.3772 3.34009 22.9113 3.08673 22.2576C2.89453 21.7648 2.66716 21.0227 2.60511 19.6578C2.53724 18.1821 2.52369 17.7388 2.52369 14.0001C2.52369 10.2614 2.53836 9.81938 2.60511 8.34243C2.66727 6.97749 2.89632 6.23683 3.08673 5.74258C3.34121 5.08894 3.64429 4.62258 4.13397 4.13224C4.62366 3.6419 5.0896 3.33838 5.74437 3.08504C6.23719 2.89285 6.97934 2.66549 8.34433 2.60344C9.82011 2.53557 10.2634 2.52202 14.0006 2.52202C17.7377 2.52202 18.1815 2.53669 19.6585 2.60344C21.0235 2.6656 21.7642 2.89464 22.2584 3.08504C22.9121 3.33838 23.3785 3.64258 23.8688 4.13224C24.3592 4.6219 24.6616 5.08894 24.9161 5.74258C25.1083 6.23538 25.3356 6.97749 25.3977 8.34243C25.4656 9.81938 25.4791 10.2614 25.4791 14.0001C25.4791 17.7388 25.4656 18.1808 25.3977 19.6578C25.3355 21.0227 25.107 21.7646 24.9161 22.2576C24.6616 22.9113 24.3585 23.3776 23.8688 23.8669C23.3791 24.3561 22.9121 24.6596 22.2584 24.9141C21.7656 25.1063 21.0235 25.3336 19.6585 25.3957C18.1827 25.4635 17.7394 25.4771 14.0006 25.4771C10.2617 25.4771 9.81966 25.4635 8.34433 25.3957ZM8.22841 0.084784C6.73797 0.152656 5.71951 0.388976 4.83008 0.735056C3.90896 1.09245 3.12918 1.57192 2.34997 2.34987C1.57075 3.12782 1.09249 3.9088 0.735085 4.82989C0.388992 5.71984 0.152662 6.7377 0.0847874 8.22808C0.0157926 9.72082 0 10.198 0 14C0 17.802 0.0157926 18.2792 0.0847874 19.7719C0.152662 21.2624 0.388992 22.2802 0.735085 23.1701C1.09249 24.0906 1.57086 24.8725 2.34997 25.6501C3.12907 26.4277 3.90896 26.9065 4.83008 27.2649C5.72119 27.611 6.73797 27.8473 8.22841 27.9152C9.72199 27.9831 10.1985 28 14.0006 28C17.8027 28 18.2799 27.9842 19.7727 27.9152C21.2633 27.8473 22.2811 27.611 23.171 27.2649C24.0916 26.9065 24.8719 26.4281 25.6512 25.6501C26.4304 24.8722 26.9076 24.0906 27.266 23.1701C27.6121 22.2802 27.8496 21.2623 27.9163 19.7719C27.9842 18.2781 28 17.802 28 14C28 10.198 27.9842 9.72082 27.9163 8.22808C27.8485 6.73758 27.6121 5.71928 27.266 4.82989C26.9076 3.90936 26.4291 3.12906 25.6512 2.34987C24.8732 1.57069 24.0916 1.09245 23.1722 0.735056C22.2811 0.388976 21.2632 0.151536 19.7738 0.084784C18.281 0.016912 17.8038 0 14.0017 0C10.1996 0 9.72199 0.015792 8.22841 0.084784Z"
                            fill="url(#paint0_radial_101_26)" />
                        <path
                            d="M9.33445 14C9.33445 11.4228 11.4232 9.33296 14.0006 9.33296C16.5779 9.33296 18.6678 11.4228 18.6678 14C18.6678 16.5772 16.5779 18.667 14.0006 18.667C11.4232 18.667 9.33445 16.5772 9.33445 14ZM6.81144 14C6.81144 17.9704 10.03 21.1888 14.0006 21.1888C17.9711 21.1888 21.1897 17.9704 21.1897 14C21.1897 10.0296 17.9711 6.81117 14.0006 6.81117C10.03 6.81117 6.81144 10.0296 6.81144 14ZM19.7942 6.52613C19.7941 6.8584 19.8925 7.18325 20.077 7.4596C20.2615 7.73595 20.5238 7.95138 20.8307 8.07866C21.1377 8.20594 21.4755 8.23934 21.8014 8.17465C22.1273 8.10996 22.4267 7.95007 22.6618 7.71521C22.8969 7.48036 23.057 7.18107 23.1219 6.85521C23.1869 6.52935 23.1538 6.19154 23.0267 5.88451C22.8997 5.57748 22.6845 5.31502 22.4082 5.1303C22.132 4.94559 21.8072 4.84693 21.475 4.8468H21.4743C21.0289 4.84701 20.6018 5.02398 20.2868 5.33885C19.9718 5.65372 19.7946 6.08074 19.7942 6.52613ZM8.34433 25.3957C6.97934 25.3335 6.23742 25.1061 5.74437 24.9141C5.09072 24.6596 4.62433 24.3565 4.13397 23.8669C3.64362 23.3772 3.34009 22.9113 3.08673 22.2576C2.89453 21.7648 2.66716 21.0227 2.60511 19.6578C2.53724 18.1821 2.52369 17.7388 2.52369 14.0001C2.52369 10.2614 2.53836 9.81938 2.60511 8.34243C2.66727 6.97749 2.89632 6.23683 3.08673 5.74258C3.34121 5.08894 3.64429 4.62258 4.13397 4.13224C4.62366 3.6419 5.0896 3.33838 5.74437 3.08504C6.23719 2.89285 6.97934 2.66549 8.34433 2.60344C9.82011 2.53557 10.2634 2.52202 14.0006 2.52202C17.7377 2.52202 18.1815 2.53669 19.6585 2.60344C21.0235 2.6656 21.7642 2.89464 22.2584 3.08504C22.9121 3.33838 23.3785 3.64258 23.8688 4.13224C24.3592 4.6219 24.6616 5.08894 24.9161 5.74258C25.1083 6.23538 25.3356 6.97749 25.3977 8.34243C25.4656 9.81938 25.4791 10.2614 25.4791 14.0001C25.4791 17.7388 25.4656 18.1808 25.3977 19.6578C25.3355 21.0227 25.107 21.7646 24.9161 22.2576C24.6616 22.9113 24.3585 23.3776 23.8688 23.8669C23.3791 24.3561 22.9121 24.6596 22.2584 24.9141C21.7656 25.1063 21.0235 25.3336 19.6585 25.3957C18.1827 25.4635 17.7394 25.4771 14.0006 25.4771C10.2617 25.4771 9.81966 25.4635 8.34433 25.3957ZM8.22841 0.084784C6.73797 0.152656 5.71951 0.388976 4.83008 0.735056C3.90896 1.09245 3.12918 1.57192 2.34997 2.34987C1.57075 3.12782 1.09249 3.9088 0.735085 4.82989C0.388992 5.71984 0.152662 6.7377 0.0847874 8.22808C0.0157926 9.72082 0 10.198 0 14C0 17.802 0.0157926 18.2792 0.0847874 19.7719C0.152662 21.2624 0.388992 22.2802 0.735085 23.1701C1.09249 24.0906 1.57086 24.8725 2.34997 25.6501C3.12907 26.4277 3.90896 26.9065 4.83008 27.2649C5.72119 27.611 6.73797 27.8473 8.22841 27.9152C9.72199 27.9831 10.1985 28 14.0006 28C17.8027 28 18.2799 27.9842 19.7727 27.9152C21.2633 27.8473 22.2811 27.611 23.171 27.2649C24.0916 26.9065 24.8719 26.4281 25.6512 25.6501C26.4304 24.8722 26.9076 24.0906 27.266 23.1701C27.6121 22.2802 27.8496 21.2623 27.9163 19.7719C27.9842 18.2781 28 17.802 28 14C28 10.198 27.9842 9.72082 27.9163 8.22808C27.8485 6.73758 27.6121 5.71928 27.266 4.82989C26.9076 3.90936 26.4291 3.12906 25.6512 2.34987C24.8732 1.57069 24.0916 1.09245 23.1722 0.735056C22.2811 0.388976 21.2632 0.151536 19.7738 0.084784C18.281 0.016912 17.8038 0 14.0017 0C10.1996 0 9.72199 0.015792 8.22841 0.084784Z"
                            fill="url(#paint1_radial_101_26)" />
                        <defs>
                            <radialGradient id="paint0_radial_101_26" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(3.72012 28.1323) scale(36.5531 36.5516)">
                                <stop offset="0.09" stop-color="#FA8F21" />
                                <stop offset="0.78" stop-color="#D82D7E" />
                            </radialGradient>
                            <radialGradient id="paint1_radial_101_26" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(16.9814 29.3867) scale(28.8089 28.8077)">
                                <stop offset="0.64" stop-color="#8C3AAA" stop-opacity="0" />
                                <stop offset="1" stop-color="#8C3AAA" />
                            </radialGradient>
                        </defs>
                    </svg>
                    <a href="https://www.instagram.com/__munef__/" target="_blank"> @_ _munef_ _</a>
                </div>
                <div class="social-tg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <path
                            d="M14 28C21.732 28 28 21.732 28 14C28 6.26802 21.732 0 14 0C6.26802 0 0 6.26802 0 14C0 21.732 6.26802 28 14 28Z"
                            fill="#34AADF" />
                        <path
                            d="M6.00157 13.6935C6.00157 13.6935 12.9365 10.7432 15.3416 9.70427C16.2636 9.28875 19.3903 7.95897 19.3903 7.95897C19.3903 7.95897 20.8334 7.37725 20.7131 8.79007C20.673 9.37185 20.3524 11.408 20.0317 13.6104C19.5506 16.727 19.0295 20.1344 19.0295 20.1344C19.0295 20.1344 18.9493 21.0902 18.2679 21.2564C17.5864 21.4226 16.464 20.6747 16.2636 20.5084C16.1032 20.3838 13.2571 18.5138 12.2149 17.5996C11.9343 17.3503 11.6136 16.8517 12.255 16.2699C13.6981 14.8986 15.4218 13.1949 16.464 12.1145C16.945 11.6158 17.426 10.4523 15.4218 11.8651C12.5757 13.9013 9.76965 15.8128 9.76965 15.8128C9.76965 15.8128 9.12826 16.2283 7.92569 15.8543C6.72307 15.4804 5.32006 14.9817 5.32006 14.9817C5.32006 14.9817 4.35805 14.3584 6.00157 13.6935Z"
                            fill="white" />
                    </svg> <a href="https://t.me/MunefCake" target="_blank"> t.me/MunefCake </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none";
        });

        // languageSwitcher.js

document.addEventListener('DOMContentLoaded', function() {

document.getElementById('selectedLang').addEventListener('click', function() {
  var languageOptions = document.getElementById('languageOptions');
  if (languageOptions.style.display === 'none') {
      languageOptions.style.display = 'block';
  } else {
      languageOptions.style.display = 'none';
  }
});

document.getElementById('uzbLang').addEventListener('click', function() {
  changeLanguage('uzbflag.png', 'Uzb');
});

document.getElementById('rusLang').addEventListener('click', function() {
  changeLanguage('rusflag.png', 'Rus');
});

document.getElementById('engLang').addEventListener('click', function() {
  changeLanguage('engflag.png', 'Eng');
});

function changeLanguage(flagImage, languageText) {
  document.getElementById('selectedLang').innerHTML = '<img src="./img/' + flagImage + '" alt="">' + languageText;
  document.getElementById('languageOptions').style.display = 'none';
}
});


//language switcher2

document.getElementById('selectedLang2').addEventListener('click', function() {
var languageOptions2 = document.getElementById('languageOptions2');
if (languageOptions2.style.display === 'none') {
    languageOptions2.style.display = 'block';
} else {
    languageOptions2.style.display = 'none';
}
});

document.getElementById('uzbLang2').addEventListener('click', function() {
changeLanguage2('uzbflag.png', 'Uzb');
});

document.getElementById('rusLang2').addEventListener('click', function() {
changeLanguage2('rusflag.png', 'Rus');
});

document.getElementById('engLang2').addEventListener('click', function() {
changeLanguage2('engflag.png', 'Eng');
});

function changeLanguage2(flagImage2, languageText2) {
document.getElementById('selectedLang2').innerHTML = '<img src="./img/' + flagImage2 + '" alt="">' + languageText2;
document.getElementById('languageOptions2').style.display = 'none';
}
    </script>
    <script src="main.js"></script>
</body>

</html>