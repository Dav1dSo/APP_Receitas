<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('../includes/boostrap')    

<style>
    #bg_img {
        background-image: url('https://img.freepik.com/fotos-premium/preparacao-para-cozinhar-em-um-fundo-de-madeira-vista-superior-espaco-livre-para-texto_187166-51517.jpg');       
        /* opções de background */
        /* background-image: url('https://img.freepik.com/premium-photo/colorful-various-herbs-spices-cooking-dark-background-copy-space-mock-up-banner-high-quality-photo_370312-387.jpg'); */

        background-repeat: no-repeat;
        Background-position: center center;
        Background-size: cover;
        height: 100vh;
    }

    .text-wrapper {
        margin-top: 20vh;
        color: aliceblue
    }
</style>

<body class="antialiased">
    <div id="bg_img">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-6 col-md-7 col-text">
                            <div class="text-wrapper">
                                <p class="label-text mbr-fonts-style display-6">Bem vindo ao APP Receitas!</p>
                                <h1 class="mbr-section-title mbr-fonts-style display-5"><strong>O APP Receitas
                                        disponibiliza a receita ideal para sua refeição.</strong></h1>
                                <p class="mbr-text mbr-fonts-style display-7">
                                    Aqui você irá encontrar milhares de receitas para todos os paladares e de forma
                                    gratuita. Cadastre-se e aproveite!
                                </p>
                                <div class="mbr-section-btn"><a class="btn btn-primary"
                                        href="{{ route('register') }}">Cadastre-se </a> <a class="btn btn-secondary"
                                        href="{{ route('login') }}"> Login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
