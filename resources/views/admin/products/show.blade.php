<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('styles/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Munef</title>
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
                            <img src="{{ asset('img/uzbflag.png') }}" alt="">Uzb
                        </div>
                        <div class="selection_lang" id="languageOptions2" style="display: none;">
                            <a href="product_detail.html" class="sl1" id="uzbLang2"><img src="{{ asset('img/uzbflag.png') }}" alt="">Uzb</a>
                            <a href="./rus/product_detail.html" class="sl2" id="rusLang2"><img src="{{ asset('img/rusflag.png') }}" alt="">Rus</a>
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
                <a href="index.html#about">Biz haqimizda</a>
                <a href="index.html#fikrlar">Mijozlar fikri</a>
                <div class="switch_lang_des">
                    <div class="switch_lang">
                        <div class="selected_lang" id="selectedLang">
                            <img src="{{ asset('img/uzbflag.png') }}" alt="">Uzb
                        </div>
                        <div class="selection_lang" id="languageOptions" style="display: none;">
                            <a href="product_detail.html" class="sl1" id="uzbLang"><img src="{{ asset('img/uzbflag.png') }}" alt="">Uzb</a>
                            <a href="./rus/product_detail.html" class="sl2" id="rusLang"><img src="{{ asset('img/rusflag.png') }}" alt="">Rus</a>
                        </div>
                    </div>
                </div>
                <a href="contact.html" class="contact-btn">Bog'lanish</a>
            </nav>
        </div>
    </div>
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
                                <img src="{{ asset($product->image) }}" alt="">
                                {{-- <div class="img-showcase">
                                    <img src="{{ asset('img/Rectangle 22.png') }}" alt="shoe image">
                                    <img src="{{ asset('img/Rectangle 23.png') }}" alt="shoe image">
                                    <img src="{{ asset('img/Rectangle 24.png') }}" alt="shoe image">
                                    <img src="{{ asset('img/Rectangle 25.png') }}" alt="shoe image">
                                    <img src="{{ asset('img/Rectangle 26.png') }}" alt="shoe image">
                                </div> --}}
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
                                    <li>nationalist</li>
                                    <li>care</li>
                                    <li>recession</li>
                                    <li>farewell</li>
                                    <li>memory</li>
                                    <li>spring</li>
                                    <li>headline </li>
                                    <li>prosecution</li>
                                    <li>miner </li>
                                    <li>relinquish</li>
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
                    <a href="index.html#products">
                        Pishiriqlar
                    </a>


                </div>
                <div>
                    <a href="index.html#about">Biz haqimizda</a>
                </div>
                <div>
                    <a href="index.html#fikrlar">Mijozlar fikri</a>
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
        //loader

        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none";
        });

        // languageSwitcher.js

        document.addEventListener('DOMContentLoaded', function () {

            document.getElementById('selectedLang').addEventListener('click', function () {
                var languageOptions = document.getElementById('languageOptions');
                if (languageOptions.style.display === 'none') {
                    languageOptions.style.display = 'block';
                } else {
                    languageOptions.style.display = 'none';
                }
            });

            document.getElementById('uzbLang').addEventListener('click', function () {
                changeLanguage('uzbflag.png', 'Uzb');
            });

            document.getElementById('rusLang').addEventListener('click', function () {
                changeLanguage('rusflag.png', 'Rus');
            });

            document.getElementById('engLang').addEventListener('click', function () {
                changeLanguage('engflag.png', 'Eng');
            });

            function changeLanguage(flagImage, languageText) {
                document.getElementById('selectedLang').innerHTML = '<img src="./img/' + flagImage + '" alt="">' + languageText;
                document.getElementById('languageOptions').style.display = 'none';
            }
        });


        //language switcher2

        document.getElementById('selectedLang2').addEventListener('click', function () {
            var languageOptions2 = document.getElementById('languageOptions2');
            if (languageOptions2.style.display === 'none') {
                languageOptions2.style.display = 'block';
            } else {
                languageOptions2.style.display = 'none';
            }
        });

        document.getElementById('uzbLang2').addEventListener('click', function () {
            changeLanguage2('uzbflag.png', 'Uzb');
        });

        document.getElementById('rusLang2').addEventListener('click', function () {
            changeLanguage2('rusflag.png', 'Rus');
        });

        document.getElementById('engLang2').addEventListener('click', function () {
            changeLanguage2('engflag.png', 'Eng');
        });

        function changeLanguage2(flagImage2, languageText2) {
            document.getElementById('selectedLang2').innerHTML = '<img src="./img/' + flagImage2 + '" alt="">' + languageText2;
            document.getElementById('languageOptions2').style.display = 'none';
        }
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>