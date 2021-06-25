@include('includes.head')
@extends('layouts.app')

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.0/moment.min.js"></script>
<style type="text/css">
    .right {
        text-align: right;
    }

    .Valider {
        color: darkred;
        text-align: right;
    }

    /*.DateHeure {*/
    /*    font-size: 0.95rem;*/
    /*}*/

    .Score {
        color: black;
        width: 100%;
        object-position: center;
        position: center;
        background: #98dfb6;
    }

    .Score:disabled {
        background: #c6c8ca;
    }

    input {
        text-align: center;
    }

    input[value=""] {
        background-color: #f09593;
    }

</style>

<script>

    $(document).ready(function () {
        $('.Score').change(function () {
            showValider($(this));
        });

        function showValider(context) {
            const currentRow = context.closest("tr");
            const fieldId = currentRow[0].id;
            var isafter = moment.utc($("#DH_" + fieldId).text(), "YYYY-MM-DD  HH:mm:ss").isAfter(moment());

            if (isafter) {
                $('#Valider_' + fieldId).attr('hidden', false);
            }
        }

    });

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
            success: function (data) {
                // $('#Valider_' + matchIdentifier).attr('hidden', true);
            },
            error: function (e) {
                var reponse = JSON.parse(e.responseText);
                alert(reponse['message']);
            },
            complete: function () {
                $('#Valider_' + matchIdentifier).attr('hidden', true);
            }
        });
    }

</script>

@section('content')
    @auth {{-- Le user est il-connecté ? --}}
    @if (Auth::user()->isadmin())
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
                            <td id='DH_{{$data->Match_Idt}}' class="DateHeure">{{$data->DteHre}}</td>
                            <td>{{$data->Stade_Nom}}</td>
                            <td>{{$data->Equipe_Nom_Dom}}</td>
                            @if($data->Disponible=="OK")
                                <td><input class="Score center" id="{{$data->Match_Idt}}_{{$data->MatchEquipe_Idt_Dom}}"
                                           placeholder="Score ?"
                                           min="0" max="20" size="3px"
                                           onchange="this.className+=(this.value=='')?'':'visited';"
                                           onkeyup="this.setAttribute('value', this.value);"
                                           maxlength="2" value="{{$data->ScoreDomicile}}">
                                </td>
                                <td><input class="Score center" id="{{$data->Match_Idt}}_{{$data->MatchEquipe_Idt_Ext}}"
                                           {{--                                       disabled="{{$data->Disponible}}=='OK'?'--}}
                                           placeholder="Score ?"
                                           min="0" max="20" size="3px"
                                           onchange="this.className+=(this.value=='')?'':'visited';"
                                           onkeyup="this.setAttribute('value', this.value);"
                                           maxlength="2" value="{{$data->ScoreExterieur}}">
                                </td>
                            @else
                                <td><input class="Score center" id="{{$data->Match_Idt}}_{{$data->MatchEquipe_Idt_Dom}}"
                                           disabled
                                           min="0" max="20" size="3px"
                                           onchange="this.className+=(this.value=='')?'':'visited';"
                                           onkeyup="this.setAttribute('value', this.value);"
                                           maxlength="2" value="{{$data->ScoreDomicile}}">
                                </td>
                                <td><input class="Score center" id="{{$data->Match_Idt}}_{{$data->MatchEquipe_Idt_Ext}}"
                                           disabled
                                           min="0" max="20" size="3px"
                                           onchange="this.className+=(this.value=='')?'':'visited';"
                                           onkeyup="this.setAttribute('value', this.value);"
                                           maxlength="2" value="{{$data->ScoreExterieur}}">
                                </td>
                            @endif
                            <td>{{$data->Equipe_Nom_Ext}}</td>
                            <td>
                                <a onclick="Valider({{$data->Match_Idt}}, {{$data->MatchEquipe_Idt_Dom}}, {{$data->MatchEquipe_Idt_Ext}}, {{\Auth::user()->id}});"
                                   class="Valider" href="#" hidden id="Valider_{{$data->Match_Idt}}">Valider</a>
                            </td>
                        </tr>
                        </tbody>
                    @endif
                @endforeach
            </table>
        </div>
    @endif
    @endauth
    @guest
        {{-- The user is not authenticated... --}}
        <div>Seules les personnes authentifiées peuvent accéder à la saisie des matchs.</div>
    @endguest
@endsection
