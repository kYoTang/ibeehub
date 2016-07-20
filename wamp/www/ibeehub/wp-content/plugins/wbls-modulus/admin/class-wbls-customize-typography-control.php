<?php 
/**
 * Customizer Custom Control Class for Typography
 */
if( ! class_exists('Wbls_Customize_Typography_Control')) {
	class Wbls_Customize_Typography_Control extends WP_Customize_Control {
		public $type = 'typography';

		public function render_content() {
			?>
			<label>
				<span class="customize-control-title"><?php _e('Font Family', 'wbls-modulus'); ?></span>
				<select <?php $this->link('family'); ?>>
				<?php 
					printf(  '<optgroup label="%1$s">', __( 'Standard Fonts', 'wbls-modulus' ) );
					$font_manager = new Wbls_Font_Manager();
					$standard_fonts =  $font_manager->get_standard_fonts();
					foreach( $standard_fonts as $font => $family ) {
						printf( '<option value="%1$s">%2$s</option>', esc_attr( $family ), esc_html( $font ) );
					}
					printf( '</optgroup>');
					printf( '<optgroup label="%1$s">', __( 'Google Fonts', 'wbls-modulus') );
					$google_fonts =  $font_manager->get_google_fonts();
					foreach( $google_fonts as $font => $family ) {
						printf( '<option value="%1$s">%2$s</option>', esc_attr( $family ), esc_html( $font ) );
					}
					printf( '</optgroup>');

				?>
				</select>
			</label>
			<label>
				<span class="customize-control-title"><?php _e('Font Weight/Style','wbls-modulus'); ?></span>
				<select <?php $this->link('weight'); ?>>
					<option value="normal"><?php _e( 'Normal', 'wbls-modulus' ); ?></option>
					<option value="bold"><?php _e( 'Bold', 'wbls-modulus' ); ?></option>
				</select>
			</label>
			<label>
				<span class="customize-control-title"><?php _e('Font Size','wbls-modulus'); ?></span>
				<input type="number" <?php $this->link('size'); ?> min="1" value="<?php $this->value(); ?>">
			</label>
		<?php
		}
	}
}