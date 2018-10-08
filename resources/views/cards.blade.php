<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Flip Cards') }}</title>
    <!--bootsrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('styles.css') }}" rel="stylesheet">

</head>
<body>
<div class="container">

  <div class="flashcard-form">
    <label for='front'>Front</label>
    <input type="text" id="front"></input>
    <label for='back'>Back</label>
    <input type="text" id="back"></input>
    <button>Add a New Card</button>
    <span class="error">Oops! Flashcard needs both front and back!</span>
  </div>

    <ul class="flashcard-list">
      <li v-onclick="toggleCard(card)" v-for="card in cards">
        <p v-if="!card.flipped" class="card">{{ card.front }}
          <span class="delete-card">X</span>
        </p>
        <p v-else class="card">{{ card.back }}
          <span class="delete-card">X</span>
        </p>
      </li>
</div>
   <!-- Scripts -->
      <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
      <script src="{{ asset('js/app.js') }}"></script>

  </body>
  </html>
