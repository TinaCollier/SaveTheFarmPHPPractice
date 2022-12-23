<?php
  // Change player location
function changeLocation(){	
  // Write your code here:
  global $location;
  echo "Where do you want to go?\n";
  $next_location = readline (">> ");
  $next_location = strtolower($next_location);
  echo "\n";
  if ($location === "kitchen" && $next_location === "bathroom") {
    $location = "bathroom";
    echo "You go to: {$next_location}.\n";
  } elseif ($location === "kitchen" && $next_location === "woods") {
    $location = $next_location;
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.\n";
  } elseif ($location === "bathroom" && $next_location === "kitchen") {
    $location = $next_location;
    echo "You go to: {$next_location}.\n";
  } elseif ($location === "woods" && $next_location === "kitchen") {
    $location = $next_location;
    echo "You go to: {$next_location}.\n";
  } elseif ($next_location === "woods" || $next_location === "kitchen"|| $next_location === "bathroom"){
    echo "You can't go directly to $next_location. Try going somewhere else first.\n";
    } else {
    echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
  }
}