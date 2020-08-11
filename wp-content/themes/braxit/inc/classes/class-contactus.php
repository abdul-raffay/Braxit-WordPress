<?php

/**
 * Contact Us File
 * 
 * PHP version 7
 *
 * @category Contact_Us_Widget
 * @package  Contact_Us_Widget
 * @author   Author <abdul.raffay@nytrotech.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */

/**
 * Contact Us Class
 * 
 * Contact_Us_Widget
 * 
 * @category Contact_Us_Widget
 * @package  Contact_Us_Widget
 * @author   Author <abdul.raffay@nytrotech.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */

class Contact_Us_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'contact_us_widget', // Base ID
			esc_html__( 'Contact Us Widget', 'textdomain' ), // Name
			array( 'description' => esc_html__( 'Contact Information', 'textdomain' ), ) // Args
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
                <div class="footer-tittle">
                    <h4><?php echo $instance['title']; ?></h4>
                    <div class="footer-pera">
                        <p class="info1">Address: <?php echo $instance['address']; ?></p>
                    </div>
                </div>
                <div class="footer-number">
                    <p>Phone: <?php echo $instance['phone']; ?></p>
                    <p>Email: <?php echo $instance['email']; ?></p>
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
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Contact Us', 'textdomain' );
        $address = ! empty( $instance['address'] ) ? $instance['address'] : esc_html__( '789/A green avenue Dhanmondi, Dhaka', 'textdomain' );
        $phone = ! empty( $instance['phone'] ) ? $instance['phone'] : esc_html__( '+10 783 3674 356', 'textdomain' );
        $email = ! empty( $instance['email'] ) ? $instance['email'] : esc_html__( 'company@gmail.com', 'textdomain' );
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
        
        <!-- Address -->
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>">
                <?php esc_attr_e( 'Address:', 'textdomain' ); ?>
                <input 
                    class="widefat" 
                    id="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>" 
                    name="<?php echo esc_attr( $this->get_field_name( 'address' ) ); ?>" 
                    type="text" 
                    value="<?php echo esc_attr( $address ); ?>"
                >
            </label> 
		</p>
        
        <!-- Phone -->
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'phone' ) ); ?>">
                <?php esc_attr_e( 'Phone:', 'textdomain' ); ?>
                <input 
                    class="widefat" 
                    id="<?php echo esc_attr( $this->get_field_id( 'phone' ) ); ?>" 
                    name="<?php echo esc_attr( $this->get_field_name( 'phone' ) ); ?>" 
                    type="phone" 
                    value="<?php echo esc_attr( $phone ); ?>"
                >
            </label> 
		</p>
        
        <!-- Email -->
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>">
                <?php esc_attr_e( 'Email:', 'textdomain' ); ?>
                <input 
                    class="widefat" 
                    id="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>" 
                    name="<?php echo esc_attr( $this->get_field_name( 'email' ) ); ?>" 
                    type="email" 
                    value="<?php echo esc_attr( $email ); ?>"
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
        $instance['address'] = ( ! empty( $new_instance['address'] ) ) ? sanitize_text_field( $new_instance['address'] ) : '';
        $instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? sanitize_text_field( $new_instance['phone'] ) : '';
        $instance['email'] = ( ! empty( $new_instance['email'] ) ) ? sanitize_text_field( $new_instance['email'] ) : '';

		return $instance;
	}

} // class Contact_Us_Widget