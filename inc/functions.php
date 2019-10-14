<?php

//Multidimensional array containing associative away of quotes

$quotes =
[
  [
    "quote" => "The darker the night, the brighter the stars, The deeper the grief, the closer is God!",

    "source" => "Fyodor Dostoevsky",

    "citation" => "Crime and Punishment",

    "year" => 1866,

    

  ],

  [
    "quote" => "The longer and more carefully we look at a funny story, the sadder it becomes.",

    "source" => "Nikolai Gogol ",

    "citation" => "Dead Souls",

    "year" => 1842,

    

  ],

  [
    "quote" => "If you look for perfection, you'll never be content.",

    "source" => "Leo Tolstoy",

    "citation" => "Anna Karenina",

    "year" => 1877,

    "tag" => 'inspiration',

  ],

  [
    "quote" => "The tongue may hide the truth but the eyes—never!",

    "source" => "Mikhail Bulgakov ",

    "citation" => "The Master and Margarita",

    "year" => 1877,

    

  ],

  [
    "quote" => "I have the impression that if he didn't complicate his life so needlessly, he would die of boredom.",

    "source" => "Boris Pasternak",

    "citation" => "Doctor Zhivago",

    "year" => 1957,

    "tag" => "humor",

  ],

  [
    "quote" => "We sit in the mud, my friend, and reach for the stars."
    ,

    "source" => "Ivan Turgenev",

    "citation" => "Fathers and Sons",

    "year" => 1862,

    "tag" => 'inspiration',

  ],

];

//returns a random quote from multidimensional away of quotes

function getRandomQuote($array) {
  return $array[rand(0, 4)];
}



//formats array from getRandomQuote


function printQuote() {
  global $quotes;
  $quote = getRandomQuote($quotes);
  $string = " ";
  $string .= "<p class='quote'>" . $quote["quote"] . "</p>";
  $string .= "<p class='source'>" . $quote["source"];
  if ($quote["citation"]) {
    $string .= "<span class='citation'>". $quote["citation"] . "</span>";
  }
  if ($quote["year"]) {
    $string .= "<span class='year'>" . $quote["year"] . "</span>";
  }
  if ($quote["tag"]) {
    $string .= "<span class='tag'>" . $quote["tag"] . "</span>";
  }
  $string .= "</p>";
  echo $string;
}

// Selects random background color from array of colors

function backgroundColor() {
  $background_color = ['#00dffc', '008c9e', '#005f6b', '#6AAFE6', '#41D3BD', '#58C9B9'];
  $random_color = $background_color[array_rand($background_color)];
  echo $random_color;
}