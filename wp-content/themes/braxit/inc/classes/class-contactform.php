<?php

/**
 * Contact Form File
 * 
 * PHP version 7
 *
 * @category Contact_Form_Widget
 * @package  Contact_Form_Widget
 * @author   Author <abdul.raffay@nytrotech.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */

/**
 * Contact Us Class
 * 
 * Contact_Form_Widget
 * 
 * @category Contact_Form_Widget
 * @package  Contact_Form_Widget
 * @author   Author <abdul.raffay@nytrotech.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */

class Contact_Form_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'contact_form_widget', // Base ID
			esc_html__( 'Contact Form Widget', 'textdomain' ), // Name
			array( 'description' => esc_html__( 'Contact Form', 'textdomain' ), ) // Args
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
        
        <div class="col-lg-6 col-md-12">
            <div class="single-gallery">
                <?php
                    $contactFormBG = get_template_directory_uri() . '/img/gallery/gallery2.png';
                    if(get_theme_mod('contact_form_setting')) {
                        $contactFormBG = get_theme_mod( 'contact_form_setting' );
                    }
                ?>
                <div class="gallery-img" style="background-image: url(<?php echo $contactFormBG; ?>;"></div>
                <div class="thumb-content-box">
                    <div class="thumb-content">
                        <h3><a href="#" style="pointer-events: none;">Need to make<br> an enquiry?</a></h3>
                        <p>We collect and analyze information about your general usage of the website products.</p>
                        <a href="<?php echo get_page_link($instance['url']); ?>">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="form-wrapper">
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="section-tittle section-tittle2 mb-30">
                            <h2>Drop your message</h2>
                        </div>
                    </div>
                </div>
                <form id="contact-form" action="<?php echo $instance['link']; ?>" method="POST">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="form-box user-icon mb-15">
                                <input type="text" name="name" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="form-box email-icon mb-15">
                                <input type="text" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="form-box email-icon mb-15">
                                <input type="text" name="email" placeholder="Phone no.">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 mb-15">
                            <div class="select-itms">
                                <select name="select" id="select2">
                                    <option value="">Topic</option>
                                    <option value="">Topic one</option>
                                    <option value="">Topic Two</option>
                                    <option value="">Topic Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-box message-icon mb-15">
                                <textarea name="message" id="message" placeholder="Message"></textarea>
                            </div>
                            <div class="submit-info">
                                <button class="submit-btn2" type="submit">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form> 
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
        // $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Contact Us', 'textdomain' );
        // $address = ! empty( $instance['address'] ) ? $instance['address'] : esc_html__( '789/A green avenue Dhanmondi, Dhaka', 'textdomain' );
        // $phone = ! empty( $instance['phone'] ) ? $instance['phone'] : esc_html__( '+10 783 3674 356', 'textdomain' );
        // $email = ! empty( $instance['email'] ) ? $instance['email'] : esc_html__( 'company@gmail.com', 'textdomain' );
        $link = ! empty( $instance['link'] ) ? $instance['link'] : esc_html__( '#', 'textdomain' );
        $url = ! empty( $instance['url'] ) ? $instance['url'] : esc_html__( '#', 'textdomain' );
		?>

        <!-- Link for Form Action -->
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>">
                <?php esc_attr_e( 'Link for Form Action:', 'textdomain' ); ?>
                <input 
                    class="widefat" 
                    id="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>" 
                    name="<?php echo esc_attr( $this->get_field_name( 'link' ) ); ?>" 
                    type="text" 
                    value="<?php echo esc_attr( $link ); ?>"
                >
            </label> 
        </p>

        <!-- URL -->
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>">
                <?php esc_attr_e( 'Learn More Page Link:', 'textdomain' ); ?>
                <select 
                    name="<?php echo esc_attr( $this->get_field_name( 'url' ) ); ?>" 
                    id="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>" 
                    class="widefat" 
                >
                    <?php 
                        // Pages
                        $all_pages = get_pages();

                        foreach($all_pages as $page){
                            ?>
                            <option value="<?php echo $page->ID; ?>"><?php echo $page->post_title; ?></option>
                            <?php
                        }
                    ?>
                </select>
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
        
        // $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        // $instance['address'] = ( ! empty( $new_instance['address'] ) ) ? sanitize_text_field( $new_instance['address'] ) : '';
        // $instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? sanitize_text_field( $new_instance['phone'] ) : '';
        // $instance['email'] = ( ! empty( $new_instance['email'] ) ) ? sanitize_text_field( $new_instance['email'] ) : '';
        $instance['link'] = ( ! empty( $new_instance['link'] ) ) ? sanitize_text_field( $new_instance['link'] ) : '#';
        $instance['url'] = ( ! empty( $new_instance['url'] ) ) ? sanitize_text_field( $new_instance['url'] ) : '#';

		return $instance;
	}

} // class Contact_Form_Widget