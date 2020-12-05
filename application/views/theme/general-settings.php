<?php

// $setting Return setting row as object.
$setting = $this->db->get('settings')->row();

// Un serialize phone to array.
$phone       = unserialize($setting->phone);
$email       = unserialize($setting->email);
$socail_icon = unserialize($setting->socail_icon);
$socail_link = unserialize($setting->socail_link);

// $layout Return layout row as object.
$layout = $this->db->get('layouts')->row();

// Get layout feilds from database.
$title          = ($layout) ? unserialize($layout->title) : '';
$subtitle       = ($layout) ? unserialize($layout->subtitle) : '';
$image          = ($layout) ? unserialize($layout->image) : '';
$color          = ($layout) ? unserialize($layout->color) : '';
$link           = ($layout) ? unserialize($layout->link) : '';
$whyWe_icon     = ($layout) ? unserialize($layout->whyWe_icon) : '';
$whyWe_title    = ($layout) ? unserialize($layout->whyWe_title) : '';
$whyWe_content  = ($layout) ? unserialize($layout->whyWe_content) : '';
$counter_icon   = ($layout) ? unserialize($layout->counter_icon) : '';
$counter_number = ($layout) ? unserialize($layout->counter_number) : '';
$counter_title  = ($layout) ? unserialize($layout->counter_title) : '';
$menu_parent    = ($layout) ? unserialize($layout->menu_parent) : '';
