<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/3ded77a9f9ecd18e/conditions/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $weather = $parsed_json->{'current_observation'}->{'weather'};
  $city = $parsed_json->{'current_observation'}->{'display_location'}->{'city'};
  $temp_f = $parsed_json->{'current_observation'}->{'temp_f'};
  $wind = $parsed_json->{'current_observation'}->{'wind_degrees'};
  $pressurein = $parsed_json->{'current_observation'}->{'pressure_in'};
  echo "Weather in ${city} ${weather} and temp ${temp_f}F with ${wind} wind degrees <br>
  pressure in ${pressurein} ";
?>
<br><br>

<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/3ded77a9f9ecd18e/tide/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->{'tide'}->tideSummary[0]->{'utcdate'}->{'tzname'};
  $year = $parsed_json->{'tide'}->tideSummary[0]->{'utcdate'}->{'year'};
  $height = $parsed_json->{'tide'}->tideSummary[0]->{'data'}->{'height'};
  echo "in ${year} at ${location} height is ${height} ";
?>
<br><br>

<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/3ded77a9f9ecd18e/astronomy/q/Australia/Sydney.json");
  $parsed_json = json_decode($json_string);
  $hour = $parsed_json->{'moon_phase'}->{'sunrise'}->{'hour'};
  $minute = $parsed_json->{'moon_phase'}->{'sunrise'}->{'minute'};
  $moon = $parsed_json->{'moon_phase'}->{'ageOfMoon'};
  echo "in Australia Sydney Age of Moon is ${moon} <br>
  time sunrise is ${hour}.${minute}  ";
?>