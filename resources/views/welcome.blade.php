<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <div class="parallax">
            <div id="group2" class="parallax__group">
                <div class="parallax__layer parallax__layer--base">
                    <div class="title">Base Layer</div>
                </div>
                <div class="parallax__layer parallax__layer--back">
                    <div class="title">Background Layer</div>
                </div>
            </div>
        </div>
        <header class="mobile-menu">Navbar</header>
        <section>Sugar plum muffin cookie pastry oat cake icing candy canes chocolate. Gummi bears chupa chups fruitcake dessert jelly. Muffin cookie ice cream soufflé pastry lollipop gingerbread sweet. Unerdwear.com bonbon candy marzipan bonbon gummies chocolate cakegummi bears powder. Unerdwear.com tart halvah chocolate cake dragée liquorice. Sugar plum chocolate bar pastry liquorice dragée jelly powder. Jelly tootsie roll applicake caramels. Marzipan candy tootsie roll donut. Gummies ice cream macaroon applicake.</section>

        <script>
            $(window).scroll(function() {
            var sticky = $('.mobile-menu'),
                scroll = $(window).scrollTop();
            
            if (scroll >= 40) { 
                sticky.addClass('fixed'); }
            else { 
            sticky.removeClass('fixed');

            }
            });
        </script>
    </body>
</html>