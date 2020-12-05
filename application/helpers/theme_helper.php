<?php 

define('THEMEPATH',APPPATH.'views/theme/');

/**
 * Get menu multi level.
 *
 * @param integer $id    is an id of menu parent.
 *
 * @param integer $level is lavel of loop menu.
 *
 * @return boolean
 */
function hierarchy($id = 0, $level = 0)
{
    $ci = &get_instance();

    // $ci->load->model('menu');

    $menuItem = '';

    $stmt = $ci->db->query(
        "SELECT pages.title , menus.* FROM menus LEFT JOIN pages ON menus.page_id = pages.id
                        WHERE menu_parent = ? AND menu_header = '1' ORDER BY menu_order"
    , array($id));

    $menus = $stmt->result();

    if (count($menus) > 0) {
        foreach ($menus as $menu) {
            if ($menu->menu_parent == $id) {
                // Create menu link if menu type is Standard get menu url , or get link by page id.
                $menuLink = ( $menu->menu_type == 'Standard' ) ? $menu->menu_url : base_url().'page/'.url_title($menu->title);
                // Create menu title.
                $menuTitle = ( $menu->menu_type == 'Standard' ) ? $menu->menu_name : $menu->title;

                if (isParent($menu->id)) {
                    $menuItem .= '<li class="dropdown" >';
                    $menuItem .= '<a href="'.$menuLink.'" class="dropdown-toggle" data-toggle="dropdown" >'.$menuTitle.' </a>';
                    $menuItem .= '<ul class="dropdown-menu animated fadeOutUp" data-id="'.$id.'" >'.hierarchy($menu->id, ($level + 1)).'</ul>';
                } else {
                    $menuItem .= '<li>';
                    $menuItem .= '<a href="'.$menuLink.'" >'.$menuTitle.' </a>';
                }

                $menuItem .= '</li>';
            }
        }

        return $menuItem;
    }//end if
}//end hierarchy()

/**
 * Check databse connection or not.
 *
 * @param integer $id is an id of menu parent.
 *
 * @return boolean
 */
function isParent($id)
{
    $ci = &get_instance();

    $stmt = $ci->db->query("SELECT * FROM menus WHERE menu_parent = ?",array($id));

    return ($stmt->num_rows() > 0) ? true : false;
}//end isParent()