<?php
/**
 * Title: Contact Section
 * Slug: ajrwebdesign/contact-section
 * Categories: call-to-action
 * Description: Contact section with intro copy and the AJR Forms contact form (name, email, message).
 *
 * The form is an AJR Forms block, so it must sit in a Page's content (the plugin reads the form from the
 * page it was sent from). Block attributes go through serialize_block_attributes(), which escapes --, <, >
 * and &, so a translated label can never end the block comment early (wp_json_encode() escapes none of them).
 *
 * @package AJRWebDesign_Theme
 */

?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Contact"},"align":"full","className":"contact-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"bg","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull contact-section has-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|accent-dark"}}}},"textColor":"accent-dark","fontSize":"base"} -->
<p class="has-text-align-center has-accent-dark-color has-text-color has-link-color has-base-font-size" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'A simple place to start', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Tell me a little about your website', 'ajrwebdesign-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|muted"}}},"typography":{"lineHeight":"1.7"}},"textColor":"muted"} -->
<p class="has-text-align-center has-muted-color has-text-color has-link-color" style="line-height:1.7"><?php esc_html_e( 'Whether you already know exactly what you need or are still figuring things out, feel free to share a little about your website, goals, or any challenges you’re currently facing.', 'ajrwebdesign-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:ajr-forms/form <?php echo serialize_block_attributes( array( 'formKey' => 'contact', 'label' => __( 'Contact form', 'ajrwebdesign-theme' ), 'notifySubject' => 'New Entry: Simple Contact Form' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- serialize_block_attributes() is the escaper for block-comment JSON. ?> -->
<!-- wp:ajr-forms/field <?php echo serialize_block_attributes( array( 'name' => 'name', 'label' => __( 'Name', 'ajrwebdesign-theme' ), 'required' => true ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- serialize_block_attributes() is the escaper for block-comment JSON. ?> /-->
<!-- wp:ajr-forms/field <?php echo serialize_block_attributes( array( 'type' => 'email', 'name' => 'email', 'label' => __( 'Email', 'ajrwebdesign-theme' ), 'required' => true ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- serialize_block_attributes() is the escaper for block-comment JSON. ?> /-->
<!-- wp:ajr-forms/field <?php echo serialize_block_attributes( array( 'type' => 'textarea', 'name' => 'message', 'label' => __( 'Tell me a little about your website or project', 'ajrwebdesign-theme' ), 'rows' => 5 ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- serialize_block_attributes() is the escaper for block-comment JSON. ?> /-->
<!-- wp:ajr-forms/field <?php echo serialize_block_attributes( array( 'type' => 'submit', 'label' => __( 'Submit', 'ajrwebdesign-theme' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- serialize_block_attributes() is the escaper for block-comment JSON. ?> /-->
<!-- wp:ajr-forms/field <?php echo serialize_block_attributes( array( 'type' => 'success', 'text' => __( 'Thanks for contacting us! We will be in touch with you shortly.', 'ajrwebdesign-theme' ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- serialize_block_attributes() is the escaper for block-comment JSON. ?> /-->
<!-- /wp:ajr-forms/form --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
