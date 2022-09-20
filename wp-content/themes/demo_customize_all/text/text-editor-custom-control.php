<?php
if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;

/**
 * Class to create a custom tags control
 */
class Text_Editor_Custom_Control extends WP_Customize_Control
{
      public function enqueue()
      {
          wp_enqueue_script( 'thefour-customizer', get_template_directory_uri() . '/js/customize-editor.js', array( 'jquery' ) );
      }

      /**
     * Render the content on the theme customizer page.
     */
    public function render_content()
    {
        ?>
        <label>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
        </label>
        <input type="hidden" <?php $this->link(); ?> value="<?php echo esc_attr( $this->value() ); ?>">
        <?php
        wp_editor( $this->value(), $this->id, array(
            'textarea_name' => $this->id,
        ) );
        do_action( 'admin_footer' );
        do_action( 'admin_print_footer_scripts' );
        ?>
        <?php
    }
}
?>