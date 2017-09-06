@extends('layouts.app')
<script type="text/javascript">
    

</script>
@section('content')
<h1>When I Think of a Title, It Will Go Here</h1>

  <img src="src/images/main.jpg" alt="Quran only" id="main-image" style="height: 400px; width: 100%;">


<section id="index-section-one">

<div class="row">
<div class="col-md-6">
  <h2 style="text-align: center;">Site overview</h2><hr class="main-color-bg" style="height: 10px;">
  <p style="font-family: sans-serif;font-size: 18px;">The Quran is a continuation of the scripture that came before it from the GOD of Abraham and the children of Israel. The Quran is a book that is complete in its guidance, and was sent in part to complete the guidance of GOD to mankind. The practice Islam one does not need hadith literature or the literature of a so called "sheikh". What is known as mainstream Islam, is nothing more that a reigious system that is based on hadith literature. Many of the main beliefs in of Sunni Islam are based upon the things found in the ahadith literature and not found in the Quran, and in many instances, contradicts the Quran. </p><br>
  <p>This site will establish the authority of the Quran over the ahadith literature that has corrupted the true spirt and essence of Islam. Islam predated the Arabic Quran and thereforth it predated any hadith literature.</p><br>
  <p>Feel free to search the publised posts for a wide range of topics.</p>

    <p>If you want to leave a comment or subscribe to our news letter you must <a href="{{route('register')}}">register</a> or <a href="{{route('login')}}">login</a> </p>

    @endsection