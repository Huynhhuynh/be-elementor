
#  Be Elementor

a WordPress plugin add-on for Elementor

## 👉  `npm install`
- Install node package

## 👉  `npm run dev`
- Use webpack to compile JavaScript modules.

### Define 
```php
/**
 * Define 
 */
define( 'BEE_VER', '1.0.0' );
define( 'BEE_DIR', plugin_dir_path( __FILE__ ) );
define( 'BEE_URI', plugin_dir_url( __FILE__ ) );
```  

### Support JS Library
- [OwlCarousel](https://github.com/OwlCarousel2/OwlCarousel2) 
- [Magnific-Popup](https://github.com/dimsemenov/Magnific-Popup)

###  New Widget
Create new a folder `/be-elementor/widgets/<your-widget>/widget.php`, widget style in `/be-elementor/src/scss/widgets/_<your-widget>.scss` or `_widget-common.scss`
```php
<?php 
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

/** 
 * widget.php
 * 
 * WIDGET: Hello
 */

class BeeWidgetHello extends Widget_Base {

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
    ->register_widget_type( new BeeWidgetHello() );
```