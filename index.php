<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.1/axios.min.js"></script>
    <title>Dischi</title>
</head>

<body>

    <div id="app">

    <!-- HEADER con logo ed eventuale navbar -->
        <header class="p-3 bg-dark text-white">
            <div class="container">
                <h1>Dischi</h1>
            </div>
        </header>

    <!-- Struttura cards dei dischi -->
        <main class="pt-5">
            <div class="container">
                <div class="row row-cols-4 gy-3">
                    <!-- DISCHI ciclati dall'array -->
                    <div class="col" v-for="album in allAlbum">
                        <div class="card text-center">
                            <img :src="album.poster" alt="" class="card-img-top">
                            <div class="card-body">
                                <h2 class="card-title">{{ album.title }}</h2>
                                <h3 class="card-subtitle">{{ album.author }}</h3>
                                <h4 class="card-text">{{ album.year }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="app.js"></script>
</body>
</html>