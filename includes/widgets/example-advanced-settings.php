<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
/**
 * Elementor Widget Example With Advanced Initial Settings
 *
 * Just a reference for advanced settings found in elementor widgets common
 *
 * @since 1.0.0
 */
class Elementor_Widget_With_Advanced_Settings extends \Elementor\Widget_Base
{
    /**
     * Get init settings.
     *
     * Used to define the default/initial settings of the object. Inheriting classes may implement this method to define
     * their own default/initial settings.
     *
     * @since 2.3.0
     * @access protected
     *
     * @return array
     */
    protected function get_init_settings()
    {
        $settings = parent::get_init_settings();
        $modified_settings =
            [
                '_title' => '',
                '_margin' => [
                    'unit' => 'px',
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'isLinked' => '1',
                ],
                '_padding' => [
                    'unit' => 'px',
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'isLinked' => '1',
                ],
                '_z_index' => '',
                '_element_id' => '',
                '_css_classes' => '',
                'motion_fx_motion_fx_scrolling' => '',
                'motion_fx_translateY_effect' => '',
                'motion_fx_translateY_direction' => '',
                'motion_fx_translateY_speed' => [
                    'unit' => 'px',
                    'size' => '4',
                    'sizes' => [],
                ],
                'motion_fx_translateY_affectedRange' => [
                    'unit' => '%',
                    'size' => '',
                    'sizes' => [
                        'start' => '0',
                        'end' => '100',
                    ],
                ],
                'motion_fx_translateX_effect' => '',
                'motion_fx_translateX_direction' => '',
                'motion_fx_translateX_speed' => [
                    'unit' => 'px',
                    'size' => '4',
                    'sizes' => [],
                ],
                'motion_fx_translateX_affectedRange' => [
                    'unit' => '%',
                    'size' => '',
                    'sizes' => [
                        'start' => '0',
                        'end' => '100',
                    ],
                ],
                'motion_fx_opacity_effect' => '',
                'motion_fx_opacity_direction' => 'out-in',
                'motion_fx_opacity_level' => [
                    'unit' => 'px',
                    'size' => '10',
                    'sizes' => [],
                ],
                'motion_fx_opacity_range' => [
                    'unit' => '%',
                    'size' => '',
                    'sizes' => [
                        'start' => '20',
                        'end' => '80',
                    ],
                ],
                'motion_fx_blur_effect' => '',
                'motion_fx_blur_direction' => 'out-in',
                'motion_fx_blur_level' => [
                    'unit' => 'px',
                    'size' => '7',
                    'sizes' => [],
                ],
                'motion_fx_blur_range' => [
                    'unit' => '%',
                    'size' => '',
                    'sizes' => [
                        'start' => '20',
                        'end' => '80',
                    ],
                ],
                'motion_fx_rotateZ_effect' => '',
                'motion_fx_rotateZ_direction' => '',
                'motion_fx_rotateZ_speed' => [
                    'unit' => 'px',
                    'size' => '1',
                    'sizes' => [],
                ],
                'motion_fx_rotateZ_affectedRange' => [
                    'unit' => '%',
                    'size' => '',
                    'sizes' => [
                        'start' => '0',
                        'end' => '100',
                    ],
                ],
                'motion_fx_scale_effect' => '',
                'motion_fx_scale_direction' => 'out-in',
                'motion_fx_scale_speed' => [
                    'unit' => 'px',
                    'size' => '4',
                    'sizes' => [],
                ],
                'motion_fx_scale_range' => [
                    'unit' => '%',
                    'size' => '',
                    'sizes' => [
                        'start' => '20',
                        'end' => '80',
                    ],
                ],
                'motion_fx_transform_origin_x' => 'center',
                'motion_fx_transform_origin_y' => 'center',
                'motion_fx_devices' => [
                    0 => 'desktop',
                    1 => 'tablet',
                    2 => 'mobile',
                ],
                'motion_fx_range' => '',
                'motion_fx_motion_fx_mouse' => '',
                'motion_fx_mouseTrack_effect' => '',
                'motion_fx_mouseTrack_direction' => '',
                'motion_fx_mouseTrack_speed' => [
                    'unit' => 'px',
                    'size' => '1',
                    'sizes' => [],
                ],
                'motion_fx_tilt_effect' => '',
                'motion_fx_tilt_direction' => '',
                'motion_fx_tilt_speed' => [
                    'unit' => 'px',
                    'size' => '4',
                    'sizes' => [],
                ],
                'sticky' => '',
                'sticky_on' => [
                    0 => 'desktop',
                    1 => 'tablet',
                    2 => 'mobile',
                ],
                'sticky_offset' => '0',
                'sticky_offset_tablet' => '',
                'sticky_offset_mobile' => '',
                'sticky_effects_offset' => '0',
                'sticky_effects_offset_tablet' => '',
                'sticky_effects_offset_mobile' => '',
                'sticky_parent' => '',
                '_animation' => '',
                '_animation_tablet' => '',
                '_animation_mobile' => '',
                'animation_duration' => '',
                '_animation_delay' => '',
                '_transform_rotate_popover' => '',
                '_transform_rotateZ_effect' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_rotateZ_effect_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_rotateZ_effect_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_rotate_3d' => '',
                '_transform_rotateX_effect' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_rotateX_effect_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_rotateX_effect_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_rotateY_effect' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_rotateY_effect_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_rotateY_effect_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_perspective_effect' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_perspective_effect_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_perspective_effect_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_translate_popover' => '',
                '_transform_translateX_effect' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_translateX_effect_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_translateX_effect_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_translateY_effect' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_translateY_effect_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_translateY_effect_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scale_popover' => '',
                '_transform_keep_proportions' => 'yes',
                '_transform_scale_effect' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scale_effect_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scale_effect_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scaleX_effect' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scaleX_effect_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scaleX_effect_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scaleY_effect' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scaleY_effect_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scaleY_effect_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_skew_popover' => '',
                '_transform_skewX_effect' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_skewX_effect_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_skewX_effect_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_skewY_effect' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_skewY_effect_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_skewY_effect_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_flipX_effect' => '',
                '_transform_flipY_effect' => '',
                '_transform_rotate_popover_hover' => '',
                '_transform_rotateZ_effect_hover' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_rotateZ_effect_hover_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_rotateZ_effect_hover_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_rotate_3d_hover' => '',
                '_transform_rotateX_effect_hover' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_rotateX_effect_hover_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_rotateX_effect_hover_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_rotateY_effect_hover' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_rotateY_effect_hover_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_rotateY_effect_hover_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_perspective_effect_hover' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_perspective_effect_hover_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_perspective_effect_hover_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_translate_popover_hover' => '',
                '_transform_translateX_effect_hover' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_translateX_effect_hover_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_translateX_effect_hover_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_translateY_effect_hover' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_translateY_effect_hover_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_translateY_effect_hover_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scale_popover_hover' => '',
                '_transform_keep_proportions_hover' => 'yes',
                '_transform_scale_effect_hover' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scale_effect_hover_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scale_effect_hover_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scaleX_effect_hover' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scaleX_effect_hover_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scaleX_effect_hover_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scaleY_effect_hover' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scaleY_effect_hover_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_scaleY_effect_hover_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_skew_popover_hover' => '',
                '_transform_skewX_effect_hover' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_skewX_effect_hover_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_skewX_effect_hover_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_skewY_effect_hover' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_skewY_effect_hover_tablet' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_skewY_effect_hover_mobile' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_transform_flipX_effect_hover' => '',
                '_transform_flipY_effect_hover' => '',
                '_transform_transition_hover' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                'motion_fx_transform_x_anchor_point' => '',
                'motion_fx_transform_y_anchor_point' => '',
                '_background_background' => '',
                '_background_color' => '',
                '_background_color_stop' => [
                    'unit' => '%',
                    'size' => '0',
                    'sizes' => [],
                ],
                '_background_color_b' => '#f2295b',
                '_background_color_b_stop' => [
                    'unit' => '%',
                    'size' => '100',
                    'sizes' => [],
                ],
                '_background_gradient_type' => 'linear',
                '_background_gradient_angle' => [
                    'unit' => 'deg',
                    'size' => '180',
                    'sizes' => [],
                ],
                '_background_gradient_position' => 'center center',
                '_background_image' => [
                    'url' => '',
                    'id' => '',
                ],
                '_background_image_tablet' => [
                    'url' => '',
                    'id' => '',
                ],
                '_background_image_mobile' => [
                    'url' => '',
                    'id' => '',
                ],
                '_background_position' => '',
                '_background_xpos' => [
                    'unit' => 'px',
                    'size' => '0',
                    'sizes' => [],
                ],
                '_background_ypos' => [
                    'unit' => 'px',
                    'size' => '0',
                    'sizes' => [],
                ],
                '_background_attachment' => '',
                '_background_repeat' => '',
                '_background_size' => '',
                '_background_bg_width' => [
                    'unit' => '%',
                    'size' => '100',
                    'sizes' => [],
                ],
                '_background_video_link' => '',
                '_background_video_start' => '',
                '_background_video_end' => '',
                '_background_play_once' => '',
                '_background_play_on_mobile' => '',
                '_background_privacy_mode' => '',
                '_background_video_fallback' => [
                    'url' => '',
                    'id' => '',
                ],
                '_background_slideshow_gallery' => [],
                '_background_slideshow_loop' => 'yes',
                '_background_slideshow_slide_duration' => '5000',
                '_background_slideshow_slide_transition' => 'fade',
                '_background_slideshow_transition_duration' => '500',
                '_background_slideshow_background_size' => '',
                '_background_slideshow_background_position' => '',
                '_background_slideshow_ken_burns' => '',
                '_background_slideshow_ken_burns_zoom_direction' => 'in',
                '_background_hover_background' => '',
                '_background_hover_color' => '',
                '_background_hover_color_stop' => [
                    'unit' => '%',
                    'size' => '0',
                    'sizes' => [],
                ],
                '_background_hover_color_b' => '#f2295b',
                '_background_hover_color_b_stop' => [
                    'unit' => '%',
                    'size' => '100',
                    'sizes' => [],
                ],
                '_background_hover_gradient_type' => 'linear',
                '_background_hover_gradient_angle' => [
                    'unit' => 'deg',
                    'size' => '180',
                    'sizes' => [],
                ],
                '_background_hover_gradient_position' => 'center center',
                '_background_hover_image' => [
                    'url' => '',
                    'id' => '',
                ],
                '_background_hover_image_tablet' => [
                    'url' => '',
                    'id' => '',
                ],
                '_background_hover_image_mobile' => [
                    'url' => '',
                    'id' => '',
                ],
                '_background_hover_position' => '',
                '_background_hover_xpos' => [
                    'unit' => 'px',
                    'size' => '0',
                    'sizes' => [],
                ],
                '_background_hover_ypos' => [
                    'unit' => 'px',
                    'size' => '0',
                    'sizes' => [],
                ],
                '_background_hover_attachment' => '',
                '_background_hover_repeat' => '',
                '_background_hover_size' => '',
                '_background_hover_bg_width' => [
                    'unit' => '%',
                    'size' => '100',
                    'sizes' => [],
                ],
                '_background_hover_video_link' => '',
                '_background_hover_video_start' => '',
                '_background_hover_video_end' => '',
                '_background_hover_play_once' => '',
                '_background_hover_play_on_mobile' => '',
                '_background_hover_privacy_mode' => '',
                '_background_hover_video_fallback' => [
                    'url' => '',
                    'id' => '',
                ],
                '_background_hover_slideshow_gallery' => [],
                '_background_hover_slideshow_loop' => 'yes',
                '_background_hover_slideshow_slide_duration' => '5000',
                '_background_hover_slideshow_slide_transition' => 'fade',
                '_background_hover_slideshow_transition_duration' => '500',
                '_background_hover_slideshow_background_size' => '',
                '_background_hover_slideshow_background_position' => '',
                '_background_hover_slideshow_ken_burns' => '',
                '_background_hover_slideshow_ken_burns_zoom_direction' => 'in',
                '_background_hover_transition' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_border_border' => '',
                '_border_width' => [
                    'unit' => 'px',
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'isLinked' => '1',
                ],
                '_border_color' => '',
                '_border_radius' => [
                    'unit' => 'px',
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'isLinked' => '1',
                ],
                '_box_shadow_box_shadow_type' => '',
                '_box_shadow_box_shadow' => [
                    'horizontal' => '0',
                    'vertical' => '0',
                    'blur' => '10',
                    'spread' => '0',
                    'color' => 'rgba(0,0,0,0.5)',
                ],
                '_box_shadow_box_shadow_position' => '',
                '_border_hover_border' => '',
                '_border_hover_width' => [
                    'unit' => 'px',
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'isLinked' => '1',
                ],
                '_border_hover_color' => '',
                '_border_radius_hover' => [
                    'unit' => 'px',
                    'top' => '',
                    'right' => '',
                    'bottom' => '',
                    'left' => '',
                    'isLinked' => '1',
                ],
                '_box_shadow_hover_box_shadow_type' => '',
                '_box_shadow_hover_box_shadow' => [
                    'horizontal' => '0',
                    'vertical' => '0',
                    'blur' => '10',
                    'spread' => '0',
                    'color' => 'rgba(0,0,0,0.5)',
                ],
                '_box_shadow_hover_box_shadow_position' => '',
                '_border_hover_transition' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_mask_switch' => '',
                '_mask_shape' => 'circle',
                '_mask_image' => [
                    'url' => '',
                    'id' => '',
                ],
                '_mask_notice' => '',
                '_mask_size' => 'contain',
                '_mask_size_scale' => [
                    'unit' => '%',
                    'size' => '100',
                    'sizes' => [],
                ],
                '_mask_position' => 'center center',
                '_mask_position_x' => [
                    'unit' => '%',
                    'size' => '0',
                    'sizes' => [],
                ],
                '_mask_position_y' => [
                    'unit' => '%',
                    'size' => '0',
                    'sizes' => [],
                ],
                '_mask_repeat' => 'no-repeat',
                '_element_width' => '',
                '_element_width_tablet' => '',
                '_element_width_mobile' => '',
                '_element_custom_width' => [
                    'unit' => 'px',
                    'size' => '',
                    'sizes' => [],
                ],
                '_element_vertical_align' => '',
                '_position' => '',
                '_offset_orientation_h' => 'start',
                '_offset_x' => [
                    'unit' => 'px',
                    'size' => '0',
                    'sizes' => [],
                ],
                '_offset_x_end' => [
                    'unit' => 'px',
                    'size' => '0',
                    'sizes' => [],
                ],
                '_offset_orientation_v' => 'start',
                '_offset_y' => [
                    'unit' => 'px',
                    'size' => '0',
                    'sizes' => [],
                ],
                '_offset_y_end' => [
                    'unit' => 'px',
                    'size' => '0',
                    'sizes' => [],
                ],
                'hide_desktop' => '',
                'hide_tablet' => '',
                'hide_mobile' => '',
                '_attributes' => '',
                'custom_css' => '',
            ];
        return array_merge($settings, $modified_settings);
    }

    public function get_script_depends()
    {

        wp_register_script('etrain-course-module-widget-script', plugins_url('js/course-module-widget.js', __FILE__));

        return [
            'etrain-course-module-widget-script'
        ];
    }

    public function get_style_depends()
    {

        wp_register_style('etrain-course-module-widget-style', plugins_url('css/course-module-widget.css', __FILE__));

        return [
            'etrain-course-module-widget-style'
        ];
    }
    public function get_name()
    {
    }

    public function get_title()
    {
    }

    public function get_icon()
    {
    }

    public function get_custom_help_url()
    {
    }

    public function get_categories()
    {
    }

    public function get_keywords()
    {
    }

    protected function register_controls()
    {
    }

    protected function render()
    {
    }

    protected function content_template()
    {
    }
}
