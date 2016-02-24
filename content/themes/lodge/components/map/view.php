<?php

  $apiKey = get_field('theme_google_api_key', 'option');
  $address = get_field('theme_address', 'option');

?>

<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=<?php echo $apiKey; ?>&q=<?php echo urlencode($address); ?>&zoom=13" allowfullscreen class="map">
</iframe>
