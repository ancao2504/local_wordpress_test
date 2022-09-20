<?php
if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;
/**
 * Class to create a custom post type control
 */
class Post_Type_Dropdown_Custom_Control extends WP_Customize_Control
{
    private $postTypes = false;

    public function __construct($manager, $id, $args = array(), $options = array())
    {
        $postargs = wp_parse_args($options, array('public' => true));
        $this->postTypes = get_post_types($postargs, 'object');

        parent::__construct( $manager, $id, $args );
    }

    public function enqueue() {
		wp_enqueue_style( 'drag-sort-multi-image-upload-control-styles', get_parent_theme_file_uri('/css/drag-sort-multi-image-upload-control.css'), false, '1.0.0', 'all' );
		wp_enqueue_script( 'drag-sort-multi-image-upload-control-script-loader', get_parent_theme_file_uri('/js/customizer-control-script-loader.js'), array('jquery'), '1.0.0', true );
		wp_add_inline_script( 'drag-sort-multi-image-upload-control-script-loader', 'const MYSCRIPT = ' . json_encode( array(
			'path' => get_parent_theme_file_uri('/js/drag-sort-multi-image-upload-control.js'),
			'id' => 'drag-sort-multi-image-upload-control-script',
	   )), 'before' );
	}

    /**
    * Render the content on the theme customizer page
    */
    public function render_content() {
        $imageControl = new \stdClass();
        $imageControl->setting = $this->id;
        $imageControl->label = esc_html( $this->label );
        $imageControl->selected_ids = json_decode($this->value());
        ?>
           <label for="_customize-input-<?php echo $this->id ?>" class="customize-control-title">
              <?php echo $imageControl->label; ?>
           </label>
           <!-- Input element for storing setting value -->
           <input className="wp-editor-area" id="_customize-input-<?php echo $this->id ?>" type="hidden" <?php $this->link(); ?> />
  
           <!-- The container to load React component -->
           <div id="wp-drag-sort-multi-image-upload-control"><?php echo(json_encode($imageControl)); ?></div>
        <?php
    }
}
?>