<?php
new theme_customizer();

class theme_customizer
{
    public function __construct()
    {
        add_action ('admin_menu', array(&$this, 'customizer_admin'));
        add_action( 'customize_register', array(&$this, 'customize_manager_demo' ));
    }

    /**
     * Add the Customize link to the admin menu
     * @return void
     */
    public function customizer_admin() {
        add_theme_page( 'Customize', 'Customize', 'edit_theme_options', 'customize.php' );
    }

    /**
     * Customizer manager demo
     * @param  WP_Customizer_Manager $wp_manager
     * @return void
     */
    public function customize_manager_demo( $wp_manager )
    {
        $this->custom_sections( $wp_manager );
    }

    /**
     * Adds a new section to use custom controls in the WordPress customiser
     *
     * @param  Obj $wp_manager - WP Manager
     *
     * @return Void
     */
    private function custom_sections( $wp_manager )
    {
        $wp_manager->add_section( 'customiser_demo_custom_section', array(
            'title'          => 'Custom Controls Demo',
            'priority'       => 36,
        ) );

        // Add a post type dropdown control
        require_once dirname(__FILE__) . '/post-type-dropdown-custom-control.php';
        $wp_manager->add_setting( 'post_type_dropdown_setting', array(
            'default'        => '',
        ) );
        $wp_manager->add_control( new Post_Type_Dropdown_Custom_Control( $wp_manager, 'post_type_dropdown_setting', array(
            'label'   => 'Upload multi drag sort image',
            'section' => 'customiser_demo_custom_section',
            'settings'   => 'post_type_dropdown_setting',
            'priority' => 6
        ) ) );

    }

}

?>