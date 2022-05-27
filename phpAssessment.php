<?php
// Elliot - We understand that you dont have experience with PHP but try your best
// Write a function that takes in two parameters:
//   1) a json string which contains articles (example below)
//   2) a string date in the format "2015-09-04"
// The function should return a json string of recent articles which
//   were published in the two weeks prior to the given date.
//
// Note: Feel free to run your code as many times as needed for debugging.

$json = '[
  { 
    "title": "This is the first title", 
    "body": "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
    "date": "2015-07-30"
  },
  {
    "title": "Another Title",
    "body": "Quisque porttitor dignissim massa rhoncus imperdiet.",
    "date": "2015-08-18"
  },
  {
    "title": "The Final Title",
    "body": "In aliquam auctor ex quis consequat. Praesent non lobortis metus.",
    "date": "2015-08-30"
  }
  ]';

// https://www.w3schools.com/php/php_functions.asp
function myFunc(string $data,string $date) {
  $returningArray = [];
  // https://www.geeksforgeeks.org/php-converting-string-to-date-and-datetime/
  $paramTime = strtotime($date); 
  // https://www.w3docs.com/snippets/php/creating-and-parsing-json-data.html
  $jsonArray = json_decode($data,true);

  // https://www.w3schools.com/php/php_looping_foreach.asp
  foreach ($jsonArray as $jsonObject) {
    $value = $jsonObject["date"];
    $articleTime = strtotime($value); 
    $diffInSeconds = $paramTime-$articleTime;
    $secondsPerDay = 86400;
    $daysBetween = $diffInSeconds / $secondsPerDay;
    // https://www.w3schools.com/php/php_if_else.asp
    if ($daysBetween <= 14) {
      // https://www.educba.com/php-append-array/
      array_push($returningArray,$jsonObject);
    } 
  }

  $returningJson = json_encode($returningArray);
  echo $returningJson;
  return $returningJson;
} 

myFunc($json,"2015-09-01");
