{{--@extends('layouts.default')--}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <h2>Paris avant la compétition</h2>
            <p>
                Ici, il s'agit de parier sur les résultats finaux de l'Euro :
            </p>
            <p>
                1/ Qui gagnera le Championnat d'Europe 2016 ?
            </p>
            <p>
                2/ Qui sera Finaliste vaincu ?
            </p>
            <p>
                3/ Qui sortira vainqueur de chacun des groupes A à F
            </p>
            <p>
                4/ Qui marquera le plus grand nombre de buts (meilleure attaque) ?
            </p>
            <p>
                5/ Qui encaissera le plus petit nombre de buts (meilleure défense) ?
            </p>
            <p>
                Les Paris 4 et 5 seront calculés sur les 4 dernières équipes (les 4 demis-finalistes)
            </p>
            <h2>Paris pendant la compétition</h2>
            </p>
            <p>
                Pour ces paris, il suffit de parier sur le résultat attendu de chacun des matches, 1/4 d'heure avant que celui-ci ne commence.
            </p>
            <p>
                Décompte des points
            </p>
            <p>
                Pari Incorrect : 1 point. (ceci pour donner un bénéfice par rapport à celui qui aurait oublié de poster son pari)... Exemple un pari = (2 : 1) pour un résultat de (1 : 2)
            </p>
            <p>
                Tendance : 5 points (2 : 1 pour 3 : 1)
            </p>
            <p>
                Différence : 9 points (2 : 1 pour 4 : 3)
            </p>
            <p>
                Exact : 20 points (2 : 1 pour 2 : 1)
            </p>
            <p>
                Cas particulier
            </p>
            <p>
                En cas de match nul bien pronostiqué, on prend le nombre point de la différence de buts (i.e 9 points). (1 : 1 pour 2 : 2)
            </p>
            <p>
                Lors des phases à élimination directe, on gardera le résultat en fin de prolongation (on peut donc avoir un match nul !)
            </p>
            <p>
                <h2>Bonus Score :</h2>
            </p>
            <p>
                +2 points si le nombre de buts de l'équipe "domicile" est correct.
            </p>
            <p>
                +2 points si le nombre de buts de l'équipe "extérieure" est correct.
            </p>
            <p>
                Ainsi, même avec un résultat incorrect, on pourra grappiller des points.
            </p>
            <p>
                Par exemple, si le résultat est 2 : 1 et que le pari était à 0 : 1, on gagne quand même 2 points pour bon score "extérieur".
            </p>
            <p>
                Ceci fait qu'un pari "Exact" permet de gagner 24 points ! 20 + 2 + 2 !
            </p>
            <p>

                <h2>Questions Bonus</h2>
            </p>
            <p>
                Attribués en fin de championnat, ces points peuvent bouleverser le classement déjà établi.
            </p>
            <p>
                Qui gagnera le Championnat d'Europe 2016 ? 50 points
            </p>
            <p>
                Qui sera Finaliste vaincu ? 37 points
            </p>
            <p>
                Qui sortira vainqueur de chacun des groupes A à F 22 points
            </p>
            <p>
                Qui marquera le plus grand nombre de buts (meilleure attaque) ? 11 points
            </p>
            <p>
                Qui encaissera le plus petit nombre de buts (meilleure défense) ? 11 points
            </p>
            <h2>Site web développé par A. Léglise en collaboration avec Ben. Four.</h2>

        </div>
    </div>
</div>
@endsection
