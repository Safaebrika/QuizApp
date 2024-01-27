<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>QuizTime</title>
   <link rel="stylesheet" href="{{asset('Css/home.css')}}">
</head>

<body>

    <div class="cont">

        <div class=" row part1">
            {{-- <div class="bobles ">
                <span style="--i:11;"></span>
                <span style="--i:12;"></span>
                <span style="--i:24;"></span>
                <span style="--i:10;"></span>
                <span style="--i:14;"></span>
                <span style="--i:23;"></span>
                <span style="--i:18;"></span>
                <span style="--i:16;"></span>
            </div> --}}
            <div class=" col-sm-6">

                <div class="container ps-5 ">

                    <p class=" p">Découvrez le monde des Quiz interactifs!</p>
                    <p class="para2">Cliquez sur le bouton ci-dessous pour commencer!</p>
                    <a class="btnToLogin mt-5" href="{{ route('loginn') }}">Commencer !</a>
                    {{-- <form action="" method="post">
                        @csrf
                        <button class=" mybtn " type="submit"></button>
                    </form> --}}

                </div>
            </div>

            <div class="col-sm-6 m-0">
                {{-- <div class=" bobles">
                    <span style="--i:11;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:24;"></span>
                    <span style="--i:10;"></span>
                    <span style="--i:14;"></span>
                    <span style="--i:23;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:16;"></span>
                </div> --}}
                <img src="./imgs/quiz.png" alt="" width="500" class="i1">



            </div>
            <div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,128L48,133.3C96,139,192,149,288,133.3C384,117,480,75,576,80C672,85,768,139,864,144C960,149,1056,107,1152,74.7C1248,43,1344,21,1392,10.7L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>

        </div>
        <div class="body ">
            <div class="container">
                <div class="row  ">

                    <div class="col-sm-8 part3">
                        <h1 class="title1">
                            <span>Plateforme de quiz </span>
                        </h1>
                        <p>
                            Laissez-nous vous guider dans une aventure enrichissante où l'apprentissage devient
                            passionnant.
                            Notre plateforme propose une variété de catégories pour satisfaire toutes les curiosités
                            dans le domaine
                            du développement informatique. Que vous soyez un passionné de programmation, un amateur
                            d'algorithmes ou que
                            vous souhaitiez tester vos connaissances sur différents langages de programmation, nous
                            avons ce qu'il vous faut.
                        </p>
                        <div class="bobin">

                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#FFFF99" d="M48.4,-68.2C62.2,-56.5,72.7,-41.8,74.2,-26.6C75.7,-11.5,68.1,4.1,60.7,17.5C53.3,30.9,46,42.1,35.9,51.5C25.8,60.9,12.9,68.5,0.1,68.4C-12.8,68.3,-25.6,60.6,-38.6,52.1C-51.5,43.7,-64.7,34.5,-72.6,21C-80.5,7.6,-83.1,-10.2,-77.8,-24.9C-72.5,-39.7,-59.3,-51.5,-45,-63.1C-30.7,-74.7,-15.3,-86,1,-87.3C17.2,-88.6,34.5,-79.9,48.4,-68.2Z" transform="translate(100 100)" />
                              </svg>
                        </div>
                    </div>
                    <div class="col-sm-4  ">
                        <img src="./imgs/quiz2.png" alt="" class="i1">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row part4">
                <div class="d-flex part2">
                    <div class="col-sm-6 ">
                        <img src="./imgs/quiz3.png" alt="">
                    </div>
                    <div class="col-sm-6 part5">
                        <h1 class="title2">Diversité des Catégories de Développement</h1>
                        <p class=" mt-5" style="font-size: 40px;">
                            Explorez des quiz dans une multitude de catégories de développement informatique. De la
                            programmation Web à l'intelligence
                            artificielle, en passant par les bases de données et bien plus encore.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row part2">
                <div class="col-sm-6">
                    <h1 class="title2">
                        Suivez Votre Progression
                    </h1>
                    <p class=" mt-5" style="font-size: 40px ; margin-left:50px;">
                        Gardez un œil sur vos performances. Visualisez vos scores antérieurs et suivez l'évolution de
                        vos connaissances en développement informatique.
                    </p>
                </div>
                <div class="col-sm-6">
                    <img src="./imgs/quiz4.png" alt="" style="margin-left: 50px;">
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <h2 class="" style="font-size: 40px; color:#ff99cc;  font-weight: bold; margin-left:50px;">
                Prêt à Mettre vos Connaissances à l'Épreuve?
            </h2>
            <div class="col-sm-6">
                <p style="font-size: 40px;margin-left:30px;">
                    Ne perdez plus de temps! Cliquez ci-dessous pour plonger dans le monde captivant des quiz de
                    développement informatique.
                </p>
                <form action="{{ route('loginn') }}" method="get" style="margin-left: 80px;">
                    @csrf
                    <button class=" mybtn " type="submit">Get Started</button>
                </form>
            </div>
            <div class="col-sm-6">
                <img src="./imgs/started.jpg" alt="" width="600">
            </div>
        </div>
    </div>
</body>

</html>
