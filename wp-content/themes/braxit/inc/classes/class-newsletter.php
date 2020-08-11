<?php

/**
 * Newsletter File
 * 
 * PHP version 7
 *
 * @category Newsletter_Widget
 * @package  Newsletter_Widget
 * @author   Author <abdul.raffay@nytrotech.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */

/**
 * Newsletter Class
 * 
 * Newsletter_Widget
 * 
 * @category Newsletter_Widget
 * @package  Newsletter_Widget
 * @author   Author <abdul.raffay@nytrotech.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */

class Newsletter_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'newsletter_widget', // Base ID
			esc_html__( 'Newsletter Widget', 'textdomain' ), // Name
			array( 'description' => esc_html__( 'Newsletter for Subscription', 'textdomain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
        
        ?>
        
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
            <div class="single-footer-caption mb-50">
                <div class="footer-tittle mb-50">
                    <h4><?php echo $instance['title']; ?></h4>
                    <p><?php echo $instance['text']; ?></p>
                </div>
                <!-- Form -->
                <div class="footer-form">
                    <div id="mc_embed_signup">
                        <form target="_blank" action="<?php echo $instance['url']; ?>" method="get" class="subscribe_form relative mail_part" novalidate="true">
                            <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                            <div class="form-icon">
                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                    Subscribe
                                </button>
                            </div>
                            <div class="mt-10 info"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php

		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Newsletter', 'textdomain' );
        $text = ! empty( $instance['text'] ) ? $instance['text'] : esc_html__( 'Subscribe our newsletter to get updates about our services', 'textdomain' );
        $url = ! empty( $instance['url'] ) ? $instance['url'] : esc_html__( 'https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01', 'textdomain' );
		?>

        <!-- Title -->
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
                <?php esc_attr_e( 'Title:', 'textdomain' ); ?>
                <input 
                    class="widefat" 
                    id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" 
                    name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" 
                    type="text" 
                    value="<?php echo esc_attr( $title ); ?>"
                >
            </label> 
        </p>
        
        <!-- Text -->
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>">
                <?php esc_attr_e( 'Text:', 'textdomain' ); ?>
                <input 
                    class="widefat" 
                    id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" 
                    name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" 
                    type="text" 
                    value="<?php echo esc_attr( $text ); ?>"
                >
            </label> 
		</p>
        
        <!-- URL -->
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>">
                <?php esc_attr_e( 'URL:', 'textdomain' ); ?>
                <input 
                    class="widefat" 
                    id="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>" 
                    name="<?php echo esc_attr( $this->get_field_name( 'url' ) ); ?>" 
                    type="url" 
                    value="<?php echo esc_attr( $url ); ?>"
                >
            </label> 
		</p>

		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
        $instance = array();
        
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['text'] = ( ! empty( $new_instance['text'] ) ) ? sanitize_text_field( $new_instance['text'] ) : '';
        $instance['url'] = ( ! empty( $new_instance['url'] ) ) ? sanitize_text_field( $new_instance['url'] ) : '';

		return $instance;
	}

} // class Newsletter_Widget