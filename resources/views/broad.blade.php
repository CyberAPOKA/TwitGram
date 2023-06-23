<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/js/bootstrap.js'])

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <main>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    @php
                                        echo env('MAIL_FROM_ADDRESS');
                                    @endphp
                                    <div class="row">
                                        <div id="presenca" class="col-xl-4">
                                            <h5 style="text-align: center;">Canal de Presença</h5>
                                            <div id="user-presenca" class="alert alert-primary">
                                                <p>Usuários Conectados</p>
                                            </div>
                                        </div>
                                        <div id="privado" class="col-xl-4">
                                            <h5 style="text-align: center;">Canal Privado</h5>
                                        </div>
                                        <div id="publico" class="col-xl-4">
                                            <h5 style="text-align: center;"> Canal Publico</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</body>

<script>
    var presenca = document.getElementById("presenca");
    var users_presenca = document.getElementById("user-presenca");
    var privado = document.getElementById("privado");
    var publico = document.getElementById("publico");

    Echo.channel('channel-publico')
        .listen('channelPublico', (e) => {
            publico.innerHTML += "<div class='alert alert-success' >" +
                e.mensagem + '</div>';
        });
    Echo.private('App.Models.User.{{ Auth::user()->id }}')
        .listen('channelPrivado', (e) => {
            privado.innerHTML += "<div class='alert alert-success' >" +
                e.mensagem + '</div>';
        }).notification((notificaBroadcasting) => {
            swal("OK!", notificaBroadcasting.mensagem, "success");
        });
    Echo.join('chat')
        .here(users => {
            users.forEach(user => {
                users_presenca.innerHTML += '<p>' + user.name + '</p>';
            });
        })
        .joining((user) => {
            presenca.innerHTML += "<div class='alert alert-success' > O usuário : " +
                user.name + ' entrou no canal de presença.</div>';
        })
        .leaving((user) => {
            presenca.innerHTML += "<div class='alert alert-warning'> O usuário:  " +
                user.name + ' saiu do canal de presença.</div>';
        })
        .error((error) => {
            alert(error);
        }).listen('channelPresenca', (e) => {
            presenca.innerHTML += "<div class='alert alert-success'>" + e.mensagem + '</div>';
        });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
