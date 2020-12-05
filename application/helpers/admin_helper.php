<?php

/**
 * Get admin header from load view function.
 *
 * @return void
 */
function get_admin_header()
{
    global $page_title;
    $CI = &get_instance();
    $CI->load->view('admin/components/header');
}

/**
 * Get admin sidebar from load view function.
 *
 * @return void
 */
function get_admin_sidebar()
{
    $CI = &get_instance();
    $CI->load->view('admin/components/sidebar');
}

/**
 * Get admin footer from load view function.
 *
 * @return void
 */
function get_admin_footer()
{
    $CI = &get_instance();
    $CI->load->view('admin/components/footer'); 
}


function get_admin_components($file_name = '')
{
    $ci = &get_instance();
    $ci->load->view('admin/components/'.$file_name);
}

/**
 * Create slug from string.
 *
 * @param string $value as key of layout page.
 *
 * @return array
 */
function page_layout($value = '')
{
    $page_layout = [
        'Standard' => 'Standard Page Layout',
        'About-us' => 'About Page Layout',
        'Portfolio' => 'Portfolio Page Layout',
        'Services' => 'Services Page Layout',
        'Contact' => 'Contact Page Layout',
        'faq' => 'FAQ Page Layout',
    ];

    return (isset($page_layout[$value])) ? $page_layout[$value] : $page_layout;
}//end page_layout()

/**
 * Get socail madia .
 *
 * @param string $value as key of socail madia.
 *
 * @return array
 */
function socialMedia($value = '')
{
    $socail = [
        'icon' => '  icon',
        'facebook' => '  Facebook',
        'twitter' => ' Twitter',
        'youtube' => ' Youtube',
        'youtube-play' => ' Youtube Play',
        'instagram' => ' Instagram',
        'google-plus' => ' Google Plus',
        'linkedin' => ' Linkedin',
        'tumblr' => ' Tumblr',
        'behance' => ' Behance',
        'digg' => ' Digg',
        'dribbble' => ' Dribbble',
        'github' => ' Github',
        'github-alt' => ' Github Alt',
        'pinterest-p' => ' Pinterest',
        'soundcloud' => ' Soundcloud',
        'stack-overflow' => ' Stack Overflow',
        'vimeo' => ' Vimeo',
        'vk' => ' VK',
        'weibo' => ' Weibo',
    ];

    return (isset($socail[$value])) ? $socail[$value] : $socail;
}//end socialMedia()


function active_parent($className)
{
    $ci = &get_instance();
    $class = $ci->router->fetch_class();

    if ($class == $className ) {
        return 'active';
    } 
}

function active($className)
{
    $ci = &get_instance();
    $class = $ci->router->fetch_class().'/';
    $method = $ci->router->fetch_method();
    $route = $class . $method.'/';
    if ($route == $className ) {
        return 'active';
    } 
}

function create_active($className)
{
    $ci = &get_instance();
    $class = $ci->router->fetch_class();
    $method = $ci->router->fetch_method();
    $path = $class . '/' . $method;
    $pathCom = $className . '/create';
    
    if ($path == $pathCom ) {
        return 'active';
    } 
}