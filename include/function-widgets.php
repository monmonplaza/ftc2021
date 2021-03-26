<?php 
class Sidebar__Contact__Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'sidebar__contact__widget', // Base ID
			esc_html__( 'Contact Information', 'ftc_domain' ), // Name
			array( 'description' => esc_html__( 'Display Contact Information to your sidebar', 'sidebar__contact_widget' ), ) // Args
		);
	}


	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }  ?>

        <div class="sidebar__block">
            <ul> 
             <?php  
             if (! empty( $instance['name'])) { 
                echo "<li><h4> {$instance['name']} </h4></li>";
             } else {
                 echo "";
             }

             if (! empty( $instance['position'])) { 
                echo "<li><p> {$instance['position']} </p></li>";
             } else {
                echo "";
            }
             if (! empty( $instance['email'])) { 
                echo "<li><a href=\"mailto:{$instance['email']}\"> <i class=\"fal fa-envelope\"></i> {$instance['email']} </a></li>";
             } else {
                echo "";
            }

             if (! empty( $instance['phone'])) { 
                echo "<li><p><i class=\"fal fa-phone-rotary\"></i> {$instance['phone']} </p></li>";
             } else {
                echo "";
            }

             if (! empty( $instance['address'])) { 
                echo "<li><p><i class=\"fal fa-map-marker-alt\"></i>  {$instance['address']} </p></li>";
             } else {
                echo "";
            }
             
             ?> 
            </ul>
        </div>

        
    
    <?php
		echo $args['after_widget'];
	}

    	
	public function form( $instance ) {

        $name = ! empty( $instance['name'] ) ? $instance['name'] : esc_html__( 'Name', 'ftc_domain' );
        $position = ! empty( $instance['position'] ) ? $instance['position'] : esc_html__( 'Position', 'ftc_domain' );
        $email = ! empty( $instance['email'] ) ? $instance['email'] : esc_html__( 'Email', 'ftc_domain' );
        $phone = ! empty( $instance['phone'] ) ? $instance['phone'] : esc_html__( 'Phone', 'ftc_domain' );
        $address = ! empty( $instance['address'] ) ? $instance['address'] : esc_html__( 'Address', 'ftc_domain' );
		?>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>"><?php esc_attr_e( 'Name:', 'ftc_domain' ); ?></label> 
        <input class="widefat" 
            id="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>"
            name="<?php echo esc_attr( $this->get_field_name( 'name' ) ); ?>"
            type="text" value="<?php echo esc_attr( $name ); ?>">
        </p>

        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'position' ) ); ?>"><?php esc_attr_e( 'Position:', 'ftc_domain' ); ?></label> 
        <input class="widefat" 
            id="<?php echo esc_attr( $this->get_field_id( 'position' ) ); ?>"
            name="<?php echo esc_attr( $this->get_field_name( 'position' ) ); ?>"
            type="text" value="<?php echo esc_attr( $position ); ?>">
        </p>
        
        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>"><?php esc_attr_e( 'Email:', 'ftc_domain' ); ?></label> 
        <input class="widefat" 
            id="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>"
            name="<?php echo esc_attr( $this->get_field_name( 'email' ) ); ?>"
            type="text" value="<?php echo esc_attr( $email ); ?>">
        </p>

        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'phone' ) ); ?>"><?php esc_attr_e( 'Phone:', 'ftc_domain' ); ?></label> 
        <input class="widefat" 
            id="<?php echo esc_attr( $this->get_field_id( 'phone' ) ); ?>"
            name="<?php echo esc_attr( $this->get_field_name( 'phone' ) ); ?>"
            type="text" value="<?php echo esc_attr( $phone ); ?>">
        </p>

        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>"><?php esc_attr_e( 'Address:', 'ftc_domain' ); ?></label> 
        <input class="widefat" 
            id="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>"
            name="<?php echo esc_attr( $this->get_field_name( 'address' ) ); ?>"
            type="text" value="<?php echo esc_attr( $address ); ?>">
        </p>
       
     
		<?php 
	}

	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
      

		$instance['name'] = ( ! empty( $new_instance['name'] ) ) ? sanitize_text_field( $new_instance['name'] ) : '';
		$instance['position'] = ( ! empty( $new_instance['position'] ) ) ? sanitize_text_field( $new_instance['position'] ) : '';
        $instance['email'] = ( ! empty( $new_instance['email'] ) ) ? sanitize_text_field( $new_instance['email'] ) : '';
        $instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? sanitize_text_field( $new_instance['phone'] ) : '';
        $instance['address'] = ( ! empty( $new_instance['address'] ) ) ? sanitize_text_field( $new_instance['address'] ) : '';
		return $instance;
	}

} 


add_action( 'widgets_init', 'ftc_sidebar' );
function ftc_sidebar() {
    register_sidebar(
        array(
            'id'            => 'contact_sidebar',
            'name'          => __( 'Contact Admin Sidebar' ),
            'description'   => __( 'Contact Page Sidebar' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}


function register_contact_widget() {
    register_widget('Sidebar__Contact__Widget');
}
add_action( 'widgets_init', 'register_contact_widget');




