<?php

/*************** IMAGE SIZES ***************/
if (function_exists('add_image_size')) {
  add_image_size('standard', 1280, 720, true);
  add_image_size('images', 245, 105, true);
  add_image_size('icon', 50, 36, true);
  add_image_size('contact-icon', 32, 32, false);
  add_image_size('logo', 214, 51, true);
  add_image_size('gallery-thumb', 548, 306, true);
  add_image_size('document-image', 630, 891, false);
}
