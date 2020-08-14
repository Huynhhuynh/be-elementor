
#  Be Elementor

a WordPress plugin add-on for Elementor

  

###  New Widget

Create new a folder `/be-elementor/widgets/<your-widget>/widget.php` 
```php
<?php 
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

/** 
 * widget.php
 * 
 * WIDGET: Hello
 */

class BeElementorWidgetHello extends Widget_Base {

    public function get_name() {
        return '';
    }

    public function get_title() {
        return '';
    }

    public function get_icon() {
        return '';
    }

    public function get_categories() {
        return [ 'be-elementor-category' ];
    }

    protected function _register_controls() {
        $this->start_controls_section(
			'section_query',
			[
				'label' => __( 'General', 'be-elementor' ),
			]
		);

        

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div>
            Be Elementor hello..!
        </div>
        <?php
    }

    protected function _content_template() {
        ?>
        <div>
            Be Elementor hello..!
        </div>
        <?php
    }
}

\Elementor\Plugin::instance()
    ->widgets_manager
    ->register_widget_type( new BeElementorWidgetHello() );
```