<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
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
                            <img src="./img/uzbflag.png" alt="">Uzb
                        </div>
                        <div class="selection_lang" id="languageOptions2" style="display: none;">
                            <a href="contact.html" class="sl1" id="uzbLang2"><img src="./img/uzbflag.png"
                                    alt="">Uzb</a>
                            <a href="./rus/contact.html" class="sl2" id="rusLang2"><img src="./img/rusflag.png"
                                    alt="">Rus</a>
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
                            <img src="./img/uzbflag.png" alt="">Uzb
                        </div>
                        <div class="selection_lang" id="languageOptions" style="display: none;">
                            <a href="contact.html" class="sl1" id="uzbLang"><img src="./img/uzbflag.png"
                                    alt="">Uzb</a>
                            <a href="./rus/contact.html" class="sl2" id="rusLang"><img src="./img/rusflag.png"
                                    alt="">Rus</a>
                        </div>
                    </div>
                </div>
                <a href="contact.html" class="contact-btn">Bog'lanish</a>
            </nav>
        </div>
    </div>
    <div class="body">
        <div class="breadcrumbs">
            <div class="bc_item1">Home</div>
            <img class="bc_item2" src="./img/slash.png" alt="">
            <div class="bc_item3">Order</div>
        </div>
        <div class="contact">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" style="margin-right: 25px;">

            <div class="boglanish">
                <h2 class="contact-name" style="margin: 0px;">Sizning mahsulotingiz: <br> <span
                        style="color: red">{{ $product->name }}</span> </h2>
                <h3 class="contact-cost" style="margin-bottom: 5px;">Umumiy qiymat: <span
                        style="color: blue">{{ $product->cost }}</span></h3>

                <div class="desc3">Shaxsiy raqam va ismingizni bizga yozib qoldiring va biz o'zimiz sizga aloqaga
                    chiqamiz</div>

                <div class="call">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"
                        fill="none">
                        <path
                            d="M17.8472 12.8556L13.4306 10.8766L13.4184 10.8709C13.1892 10.7729 12.939 10.7335 12.6907 10.7564C12.4424 10.7793 12.2037 10.8638 11.9963 11.0022C11.9718 11.0183 11.9484 11.0358 11.9259 11.0547L9.64407 13C8.19845 12.2978 6.70595 10.8166 6.00376 9.38968L7.95188 7.07312C7.97063 7.04968 7.98845 7.02624 8.00532 7.00093C8.14072 6.79403 8.22287 6.55686 8.24446 6.31053C8.26605 6.0642 8.22641 5.81636 8.12907 5.58906V5.57781L6.14438 1.15374C6.0157 0.856804 5.79444 0.609445 5.51362 0.448592C5.2328 0.287739 4.9075 0.222019 4.58626 0.261243C3.31592 0.428406 2.14986 1.05228 1.30588 2.01633C0.461903 2.98039 -0.00228837 4.2187 8.4831e-06 5.49999C8.4831e-06 12.9437 6.05626 19 13.5 19C14.7813 19.0023 16.0196 18.5381 16.9837 17.6941C17.9477 16.8501 18.5716 15.6841 18.7388 14.4137C18.7781 14.0926 18.7125 13.7674 18.5518 13.4866C18.3911 13.2058 18.144 12.9845 17.8472 12.8556ZM13.5 17.5C10.3185 17.4965 7.26825 16.2311 5.01856 13.9814C2.76888 11.7318 1.50348 8.68152 1.50001 5.49999C1.49648 4.58451 1.82631 3.69905 2.42789 3.00897C3.02947 2.31888 3.86167 1.87137 4.76907 1.74999C4.7687 1.75373 4.7687 1.7575 4.76907 1.76124L6.73782 6.16749L4.80001 8.48687C4.78034 8.5095 4.76247 8.53364 4.74657 8.55906C4.60549 8.77554 4.52273 9.0248 4.5063 9.28268C4.48988 9.54055 4.54035 9.7983 4.65282 10.0309C5.5022 11.7681 7.25251 13.5053 9.00845 14.3537C9.24279 14.4652 9.50203 14.5139 9.76083 14.4952C10.0196 14.4764 10.2692 14.3909 10.485 14.2469C10.5091 14.2307 10.5322 14.2131 10.5544 14.1944L12.8334 12.25L17.2397 14.2234C17.2397 14.2234 17.2472 14.2234 17.25 14.2234C17.1301 15.1321 16.6833 15.966 15.9931 16.5691C15.3028 17.1721 14.4166 17.5031 13.5 17.5Z"
                            fill="#333333" />
                    </svg>
                    <p class="contact-item">+998(99) 999-22-22</p>
                </div>
                <div class="loc">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M12 6C11.2583 6 10.5333 6.21993 9.91661 6.63199C9.29993 7.04404 8.81928 7.62971 8.53545 8.31494C8.25162 9.00016 8.17736 9.75416 8.32205 10.4816C8.46675 11.209 8.8239 11.8772 9.34835 12.4017C9.8728 12.9261 10.541 13.2833 11.2684 13.4279C11.9958 13.5726 12.7498 13.4984 13.4351 13.2145C14.1203 12.9307 14.706 12.4501 15.118 11.8334C15.5301 11.2167 15.75 10.4917 15.75 9.75C15.75 8.75544 15.3549 7.80161 14.6517 7.09835C13.9484 6.39509 12.9946 6 12 6ZM12 12C11.555 12 11.12 11.868 10.75 11.6208C10.38 11.3736 10.0916 11.0222 9.92127 10.611C9.75097 10.1999 9.70642 9.7475 9.79323 9.31105C9.88005 8.87459 10.0943 8.47368 10.409 8.15901C10.7237 7.84434 11.1246 7.63005 11.561 7.54323C11.9975 7.45642 12.4499 7.50097 12.861 7.67127C13.2722 7.84157 13.6236 8.12996 13.8708 8.49997C14.118 8.86998 14.25 9.30499 14.25 9.75C14.25 10.3467 14.0129 10.919 13.591 11.341C13.169 11.7629 12.5967 12 12 12ZM12 1.5C9.81273 1.50248 7.71575 2.37247 6.16911 3.91911C4.62247 5.46575 3.75248 7.56273 3.75 9.75C3.75 12.6938 5.11031 15.8138 7.6875 18.7734C8.84552 20.1108 10.1489 21.3151 11.5734 22.3641C11.6995 22.4524 11.8498 22.4998 12.0037 22.4998C12.1577 22.4998 12.308 22.4524 12.4341 22.3641C13.856 21.3147 15.1568 20.1104 16.3125 18.7734C18.8859 15.8138 20.25 12.6938 20.25 9.75C20.2475 7.56273 19.3775 5.46575 17.8309 3.91911C16.2843 2.37247 14.1873 1.50248 12 1.5ZM12 20.8125C10.4503 19.5938 5.25 15.1172 5.25 9.75C5.25 7.95979 5.96116 6.2429 7.22703 4.97703C8.4929 3.71116 10.2098 3 12 3C13.7902 3 15.5071 3.71116 16.773 4.97703C18.0388 6.2429 18.75 7.95979 18.75 9.75C18.75 15.1153 13.5497 19.5938 12 20.8125Z"
                            fill="#333333" />
                    </svg>
                    <p class="contact-item">Muqimiy ko'chasi, Toshkent shahri </p>
                </div>

            </div>
            <div class="aloqa">
                <form action="{{ route('order.create', $product->id ) }}" method="post">
                    @csrf
                    <input type="text" name="fullname" placeholder="Ismingizni kiriting">
                    <input class="raqam" type="text" name="phone" placeholder="Telefon raqamingizni kiriting">
                    <input type="submit" value="Buyurtma berish">
                </form>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"
                        fill="none">
                        <path
                            d="M9.33445 14C9.33445 11.4228 11.4232 9.33296 14.0006 9.33296C16.5779 9.33296 18.6678 11.4228 18.6678 14C18.6678 16.5772 16.5779 18.667 14.0006 18.667C11.4232 18.667 9.33445 16.5772 9.33445 14ZM6.81144 14C6.81144 17.9704 10.03 21.1888 14.0006 21.1888C17.9711 21.1888 21.1897 17.9704 21.1897 14C21.1897 10.0296 17.9711 6.81117 14.0006 6.81117C10.03 6.81117 6.81144 10.0296 6.81144 14ZM19.7942 6.52613C19.7941 6.8584 19.8925 7.18325 20.077 7.4596C20.2615 7.73595 20.5238 7.95138 20.8307 8.07866C21.1377 8.20594 21.4755 8.23934 21.8014 8.17465C22.1273 8.10996 22.4267 7.95007 22.6618 7.71521C22.8969 7.48036 23.057 7.18107 23.1219 6.85521C23.1869 6.52935 23.1538 6.19154 23.0267 5.88451C22.8997 5.57748 22.6845 5.31502 22.4082 5.1303C22.132 4.94559 21.8072 4.84693 21.475 4.8468H21.4743C21.0289 4.84701 20.6018 5.02398 20.2868 5.33885C19.9718 5.65372 19.7946 6.08074 19.7942 6.52613ZM8.34433 25.3957C6.97934 25.3335 6.23742 25.1061 5.74437 24.9141C5.09072 24.6596 4.62433 24.3565 4.13397 23.8669C3.64362 23.3772 3.34009 22.9113 3.08673 22.2576C2.89453 21.7648 2.66716 21.0227 2.60511 19.6578C2.53724 18.1821 2.52369 17.7388 2.52369 14.0001C2.52369 10.2614 2.53836 9.81938 2.60511 8.34243C2.66727 6.97749 2.89632 6.23683 3.08673 5.74258C3.34121 5.08894 3.64429 4.62258 4.13397 4.13224C4.62366 3.6419 5.0896 3.33838 5.74437 3.08504C6.23719 2.89285 6.97934 2.66549 8.34433 2.60344C9.82011 2.53557 10.2634 2.52202 14.0006 2.52202C17.7377 2.52202 18.1815 2.53669 19.6585 2.60344C21.0235 2.6656 21.7642 2.89464 22.2584 3.08504C22.9121 3.33838 23.3785 3.64258 23.8688 4.13224C24.3592 4.6219 24.6616 5.08894 24.9161 5.74258C25.1083 6.23538 25.3356 6.97749 25.3977 8.34243C25.4656 9.81938 25.4791 10.2614 25.4791 14.0001C25.4791 17.7388 25.4656 18.1808 25.3977 19.6578C25.3355 21.0227 25.107 21.7646 24.9161 22.2576C24.6616 22.9113 24.3585 23.3776 23.8688 23.8669C23.3791 24.3561 22.9121 24.6596 22.2584 24.9141C21.7656 25.1063 21.0235 25.3336 19.6585 25.3957C18.1827 25.4635 17.7394 25.4771 14.0006 25.4771C10.2617 25.4771 9.81966 25.4635 8.34433 25.3957ZM8.22841 0.084784C6.73797 0.152656 5.71951 0.388976 4.83008 0.735056C3.90896 1.09245 3.12918 1.57192 2.34997 2.34987C1.57075 3.12782 1.09249 3.9088 0.735085 4.82989C0.388992 5.71984 0.152662 6.7377 0.0847874 8.22808C0.0157926 9.72082 0 10.198 0 14C0 17.802 0.0157926 18.2792 0.0847874 19.7719C0.152662 21.2624 0.388992 22.2802 0.735085 23.1701C1.09249 24.0906 1.57086 24.8725 2.34997 25.6501C3.12907 26.4277 3.90896 26.9065 4.83008 27.2649C5.72119 27.611 6.73797 27.8473 8.22841 27.9152C9.72199 27.9831 10.1985 28 14.0006 28C17.8027 28 18.2799 27.9842 19.7727 27.9152C21.2633 27.8473 22.2811 27.611 23.171 27.2649C24.0916 26.9065 24.8719 26.4281 25.6512 25.6501C26.4304 24.8722 26.9076 24.0906 27.266 23.1701C27.6121 22.2802 27.8496 21.2623 27.9163 19.7719C27.9842 18.2781 28 17.802 28 14C28 10.198 27.9842 9.72082 27.9163 8.22808C27.8485 6.73758 27.6121 5.71928 27.266 4.82989C26.9076 3.90936 26.4291 3.12906 25.6512 2.34987C24.8732 1.57069 24.0916 1.09245 23.1722 0.735056C22.2811 0.388976 21.2632 0.151536 19.7738 0.084784C18.281 0.016912 17.8038 0 14.0017 0C10.1996 0 9.72199 0.015792 8.22841 0.084784Z"
                            fill="url(#paint0_radial_101_26)" />
                        <path
                            d="M9.33445 14C9.33445 11.4228 11.4232 9.33296 14.0006 9.33296C16.5779 9.33296 18.6678 11.4228 18.6678 14C18.6678 16.5772 16.5779 18.667 14.0006 18.667C11.4232 18.667 9.33445 16.5772 9.33445 14ZM6.81144 14C6.81144 17.9704 10.03 21.1888 14.0006 21.1888C17.9711 21.1888 21.1897 17.9704 21.1897 14C21.1897 10.0296 17.9711 6.81117 14.0006 6.81117C10.03 6.81117 6.81144 10.0296 6.81144 14ZM19.7942 6.52613C19.7941 6.8584 19.8925 7.18325 20.077 7.4596C20.2615 7.73595 20.5238 7.95138 20.8307 8.07866C21.1377 8.20594 21.4755 8.23934 21.8014 8.17465C22.1273 8.10996 22.4267 7.95007 22.6618 7.71521C22.8969 7.48036 23.057 7.18107 23.1219 6.85521C23.1869 6.52935 23.1538 6.19154 23.0267 5.88451C22.8997 5.57748 22.6845 5.31502 22.4082 5.1303C22.132 4.94559 21.8072 4.84693 21.475 4.8468H21.4743C21.0289 4.84701 20.6018 5.02398 20.2868 5.33885C19.9718 5.65372 19.7946 6.08074 19.7942 6.52613ZM8.34433 25.3957C6.97934 25.3335 6.23742 25.1061 5.74437 24.9141C5.09072 24.6596 4.62433 24.3565 4.13397 23.8669C3.64362 23.3772 3.34009 22.9113 3.08673 22.2576C2.89453 21.7648 2.66716 21.0227 2.60511 19.6578C2.53724 18.1821 2.52369 17.7388 2.52369 14.0001C2.52369 10.2614 2.53836 9.81938 2.60511 8.34243C2.66727 6.97749 2.89632 6.23683 3.08673 5.74258C3.34121 5.08894 3.64429 4.62258 4.13397 4.13224C4.62366 3.6419 5.0896 3.33838 5.74437 3.08504C6.23719 2.89285 6.97934 2.66549 8.34433 2.60344C9.82011 2.53557 10.2634 2.52202 14.0006 2.52202C17.7377 2.52202 18.1815 2.53669 19.6585 2.60344C21.0235 2.6656 21.7642 2.89464 22.2584 3.08504C22.9121 3.33838 23.3785 3.64258 23.8688 4.13224C24.3592 4.6219 24.6616 5.08894 24.9161 5.74258C25.1083 6.23538 25.3356 6.97749 25.3977 8.34243C25.4656 9.81938 25.4791 10.2614 25.4791 14.0001C25.4791 17.7388 25.4656 18.1808 25.3977 19.6578C25.3355 21.0227 25.107 21.7646 24.9161 22.2576C24.6616 22.9113 24.3585 23.3776 23.8688 23.8669C23.3791 24.3561 22.9121 24.6596 22.2584 24.9141C21.7656 25.1063 21.0235 25.3336 19.6585 25.3957C18.1827 25.4635 17.7394 25.4771 14.0006 25.4771C10.2617 25.4771 9.81966 25.4635 8.34433 25.3957ZM8.22841 0.084784C6.73797 0.152656 5.71951 0.388976 4.83008 0.735056C3.90896 1.09245 3.12918 1.57192 2.34997 2.34987C1.57075 3.12782 1.09249 3.9088 0.735085 4.82989C0.388992 5.71984 0.152662 6.7377 0.0847874 8.22808C0.0157926 9.72082 0 10.198 0 14C0 17.802 0.0157926 18.2792 0.0847874 19.7719C0.152662 21.2624 0.388992 22.2802 0.735085 23.1701C1.09249 24.0906 1.57086 24.8725 2.34997 25.6501C3.12907 26.4277 3.90896 26.9065 4.83008 27.2649C5.72119 27.611 6.73797 27.8473 8.22841 27.9152C9.72199 27.9831 10.1985 28 14.0006 28C17.8027 28 18.2799 27.9842 19.7727 27.9152C21.2633 27.8473 22.2811 27.611 23.171 27.2649C24.0916 26.9065 24.8719 26.4281 25.6512 25.6501C26.4304 24.8722 26.9076 24.0906 27.266 23.1701C27.6121 22.2802 27.8496 21.2623 27.9163 19.7719C27.9842 18.2781 28 17.802 28 14C28 10.198 27.9842 9.72082 27.9163 8.22808C27.8485 6.73758 27.6121 5.71928 27.266 4.82989C26.9076 3.90936 26.4291 3.12906 25.6512 2.34987C24.8732 1.57069 24.0916 1.09245 23.1722 0.735056C22.2811 0.388976 21.2632 0.151536 19.7738 0.084784C18.281 0.016912 17.8038 0 14.0017 0C10.1996 0 9.72199 0.015792 8.22841 0.084784Z"
                            fill="url(#paint1_radial_101_26)" />
                        <defs>
                            <radialGradient id="paint0_radial_101_26" cx="0" cy="0" r="1"
                                gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(3.72012 28.1323) scale(36.5531 36.5516)">
                                <stop offset="0.09" stop-color="#FA8F21" />
                                <stop offset="0.78" stop-color="#D82D7E" />
                            </radialGradient>
                            <radialGradient id="paint1_radial_101_26" cx="0" cy="0" r="1"
                                gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(16.9814 29.3867) scale(28.8089 28.8077)">
                                <stop offset="0.64" stop-color="#8C3AAA" stop-opacity="0" />
                                <stop offset="1" stop-color="#8C3AAA" />
                            </radialGradient>
                        </defs>
                    </svg>
                    <a href="https://www.instagram.com/__munef__/" target="_blank"> @_ _munef_ _</a>
                </div>
                <div class="social-tg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"
                        fill="none">
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
        window.addEventListener("load", function() {
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
                document.getElementById('selectedLang').innerHTML = '<img src="./img/' + flagImage + '" alt="">' +
                    languageText;
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
            document.getElementById('selectedLang2').innerHTML = '<img src="./img/' + flagImage2 + '" alt="">' +
                languageText2;
            document.getElementById('languageOptions2').style.display = 'none';
        }
    </script>
    <script src="main.js"></script>
</body>

</html>
