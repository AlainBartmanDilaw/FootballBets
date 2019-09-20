<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.js"></script>
<script>
    // $( document ).ready( function() {
    //     $('.Valider').click( function() {
    //         alert("Ok" + $(this));
    //     });
    // });
    function Valider(matchIdentifier,
        equipeDomicileIdentifiant,
        equipeExterieurIdentifiant,
        UserId) {
        console.log("Match " + matchIdentifier + ', ' + equipeDomicileIdentifiant + ', ' + equipeExterieurIdentifiant + ', ' + UserId);

        var identifantDomicile = '#' + matchIdentifier + '_' + equipeDomicileIdentifiant;
        var identifantExterieur = '#' + matchIdentifier + '_' + equipeExterieurIdentifiant;

        var scoreDomicile = $(identifantDomicile).val();
        var scoreExterieur = $(identifantExterieur).val();

        console.log("Match " + matchIdentifier + ', ' + scoreDomicile + ', ' + scoreExterieur + ', ' + UserId);
        $.ajax({
            url: "/ajax",
            data: {
                "_token": "{{ csrf_token() }}",
                "User_id": UserId,
                "Match_Idt": matchIdentifier,
                "MatchEquipe_Idt_Dom": equipeDomicileIdentifiant,
                "MatchEquipe_Idt_Ext": equipeExterieurIdentifiant,
                "ScoreDomicile": scoreDomicile,
                "ScoreExterieur": scoreExterieur,
            },
            type: "post",
            dataType: 'JSON',
            success: function(data) {

                console.log('Count Users =' + data);

                $('.ajax').empty();
                $('.ajax').append('Count Users =' + data);

            },
            error: function(e) {
                console.log(e.responseText);
            },
        });
    }
</script>

<style type="text/css">
    .right {
        text-align: right;
    }

    .center {
        text-align: center;
    }

    .Valider {
        color: darkred;
        text-align: right;
    }

    .DateHeure {
        font-size: 0.5rem;
    }

    .Score {
        color: red;
        width: 100%;
        object-position: center;
        position: center;
        background: #fff6a1;
    }

    .Score:focus {
        background: lightblue;
    }
</style>

@extends('layouts.app')

@section('content')
@if(\Auth::check())
<div class="table-responsive">
    {{-- <table class="table table-striped table-hover table-condensed">--}}
    <table class="table table-striped table-bordered" border="1px solid black">
        <thead>
            <tr>
                <td>Num</td>
                <td>Date/Heure</td>
                <td>Stade</td>
                <td>Equipe Dom.</td>
                <td>Dom.</td>
                <td>Ext.</td>
                <td>Equipe Ext.</td>
                <td>Pensez-y</td>
            </tr>
        </thead>
        @foreach($allMatchBet as $key => $data)
        @if($data->User_Id == \Auth::user()->id)
        <tbody>
            <tr id="{{$data->Match_Idt}}">
                <td>{{$data->Match_Num}}</td>
                <td class="DateHeure">{{$data->DteHre}}</td>
                <td>{{$data->Stade_Nom}}</td>
                <td>{{$data->Equipe_Nom_Dom}}</td>
                <td><input class="Score center" id="{{$data->Match_Idt}}_{{$data->MatchEquipe_Idt_Dom}}" min="0" max="20" size="3px" maxlength="3" value="{{$data->ScoreDomicile}}"></td>
                <td><input class="Score center" id="{{$data->Match_Idt}}_{{$data->MatchEquipe_Idt_Ext}}" min="0" max="20" size="3px" maxlength="3" value="{{$data->ScoreExterieur}}"></td>
                <td>{{$data->Equipe_Nom_Ext}}</td>
                <td>
                    <a onclick="Valider({{$data->Match_Idt}}, {{$data->MatchEquipe_Idt_Dom}}, {{$data->MatchEquipe_Idt_Ext}}, {{\Auth::user()->id}});" class="Valider" href="#">Valider</a>
                </td>
            </tr>
        </tbody>
        @endif
        @endforeach
    </table>
</div>
@endif

@endsection