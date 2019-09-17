<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.js"></script>
<script>
    // $( document ).ready( function() {
    //     $('.Valider').click( function() {
    //         alert("Ok" + $(this));
    //     });
    // });
    function Valider(matchIdentifiant,
                     equipeDomicileIdentifiant,
                     equipeExterieurIdentifiant,
                     UserId) {
        // alert("Match " + matchIdentifiant + ', ' + equipeDomicileIdentifiant + ', ' + equipeExterieurIdentifiant + ', ' + UserId);
        console.log("Match " + matchIdentifiant + ', ' + equipeDomicileIdentifiant + ', ' + equipeExterieurIdentifiant + ', ' + UserId);

        var identifantDomicile = '#' + matchIdentifiant + '_' + equipeDomicileIdentifiant;
        var identifantExterieur = '#' + matchIdentifiant + '_' + equipeExterieurIdentifiant;

        var scoreDomicile = $(identifantDomicile).val()
        var scoreExterieur = $(identifantExterieur).val()

        console.log("Match " + matchIdentifiant + ', ' + scoreDomicile + ', ' + scoreExterieur + ', ' + UserId);
        $.ajax({
            url: "/ajax",
            data: {
                "_token": "{{ csrf_token() }}",
                "User_id": UserId,
                "Match_Idt": matchIdentifiant,
                "MatchEquipe_Idt_Dom": equipeDomicileIdentifiant,
                "MatchEquipe_Idt_Ext": equipeExterieurIdentifiant,
                "ScoreDomicile": scoreDomicile,
                "ScoreExterieur": scoreExterieur,
            },
            type: "post",
            dataType: 'JSON',
            success: function (data) {

                console.log('Count Users =' + data);

                $('.ajax').empty();
                $('.ajax').append('Count Users =' + data);

            },
            error: function (e) {
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
        color: #1f6fb2;
    }
</style>

@extends('layouts.app')

@section('content')
    <div class="table-responsive">
        {{--        <table class="table table-striped table-hover table-condensed">--}}
        <table class="table table-striped table-bordered" border="1px solid black">
            <thead>
            <tr>
                <td>Num</td>
                <td>Stade</td>
                <td>Date/Heure</td>
                <td>Equipe Dom.</td>
                <td>Score Dom.</td>
                <td>Score Ext.</td>
                <td>Equipe Ext.</td>
                <td>Pensez-y</td>
            </tr>
            </thead>
            @foreach($allMatch as $key => $data)
                <tbody>
                <tr id="{{$data->Match_Idt}}">
                    <td>{{$data->Match_Num}}</td>
                    <td>{{$data->DteHre}}</td>
                    <td>{{$data->Stade_Nom}}</td>
                    <td>{{$data->Equipe_Nom_Dom}}</td>
                    <td><input id="{{$data->Match_Idt}}_{{$data->Equipe_Idt_Dom}}" min="0" max="20" size="3px"
                               maxlength="3" class="center"></td>
                    <td><input id="{{$data->Match_Idt}}_{{$data->Equipe_Idt_Ext}}" min="0" max="20" size="3px"
                               maxlength="3" class="center"></td>
                    <td>{{$data->Equipe_Nom_Ext}}</td>
                    <td>
                        <a onclick="Valider({{$data->Match_Idt}}, {{$data->Equipe_Idt_Dom}}, {{$data->Equipe_Idt_Ext}}, {{\Auth::user()->id}});"
                           class="Valider" href="#">Valider</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection

