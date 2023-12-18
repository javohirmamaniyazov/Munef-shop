<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Munef</title>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

    <script>
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
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
