<div class="header">
    <div class="nav">
        <input type="checkbox" id="nav-check" />
        <a href="/" class="nav-header">
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
                        <a href="/" class="sl1" id="uzbLang2"><img src="{{ asset('img/uzbflag.png')}}" alt="">Uzb</a>
                        <a href="./rus//" class="sl2" id="rusLang2"><img src="{{ asset('img/rusflag.png')}}" alt="">Rus</a>
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
            <a href="/">
                Pishiriqlar
            </a>
            <a href="#about">Biz haqimizda</a>
            <a href="#fikrlar">Mijozlar fikri</a>
            <div class="switch_lang_des">
                <div class="switch_lang">
                    <div class="selected_lang" id="selectedLang">
                        <img src="{{ asset('img/uzbflag.png') }}" alt="">Uzb
                    </div>
                    <div class="selection_lang" id="languageOptions" style="display: none;">
                        <a href="/" class="sl1" id="uzbLang"><img src="{{ asset('img/uzbflag.png') }}" alt="">Uzb</a>
                        <a href="./rus//" class="sl2" id="rusLang"><img src="{{ asset('img/rusflag.png') }}" alt="">Rus</a>
                    </div>
                </div>
            </div>
            <a href="{{ route('contact')}}" class="contact-btn">Bog'lanish</a>
        </nav>
    </div>
</div>