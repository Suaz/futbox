<?php

/**
 *
 * Class td_block_big_grid_flex_7
 */
class td_block_big_grid_flex_7 extends td_block {

    const POST_LIMIT = 3;

    static function cssMedia( $res_ctx ) {

        /*-- GENERAL -- */
        $res_ctx->load_settings_raw( 'general_style', 1 );
        $res_ctx->load_settings_raw( 'specific_style', 1 );



        // modules gap
        $modules_gap = $res_ctx->get_shortcode_att('modules_gap');
        $res_ctx->load_settings_raw( 'modules_gap', $modules_gap );
        $res_ctx->load_settings_raw( 'modules_gap_mob', $modules_gap );
        if ( $modules_gap == '' ) {
            $res_ctx->load_settings_raw( 'modules_gap', '1px');
            $res_ctx->load_settings_raw( 'modules_gap_mob', '2px');
        } else if ( is_numeric( $modules_gap ) ) {
            $res_ctx->load_settings_raw( 'modules_gap', $modules_gap / 2 .'px' );
            $res_ctx->load_settings_raw( 'modules_gap_mob', $modules_gap .'px' );
        }

        // meta info horizontal align
        $meta_info_horiz = $res_ctx->get_shortcode_att('meta_info_horiz');
        if( $meta_info_horiz == 'content-horiz-center' ) {
            $res_ctx->load_settings_raw( 'meta_info_horiz_center', 1 );
        }
        if( $meta_info_horiz == 'content-horiz-right' ) {
            $res_ctx->load_settings_raw( 'meta_info_horiz_right', 1 );
        }

        // meta info vertical align
        $meta_info_vert = $res_ctx->get_shortcode_att('meta_info_vert');
        if( $meta_info_vert == 'content-vert-top' ) {
            $res_ctx->load_settings_raw( 'meta_info_vert_top', 1 );
        }
        if( $meta_info_vert == 'content-vert-center' ) {
            $res_ctx->load_settings_raw( 'meta_info_vert_center', 1 );
        }
        if( $meta_info_vert == 'content-vert-bottom' ) {
            $res_ctx->load_settings_raw( 'meta_info_vert_bottom', 1 );
        }

        // image alignment 1
        $res_ctx->load_settings_raw( 'image_alignment1', $res_ctx->get_shortcode_att('image_alignment1') . '%' );
        // image alignment 2
        $res_ctx->load_settings_raw( 'image_alignment2', $res_ctx->get_shortcode_att('image_alignment2') . '%' );

        // image height 1
        $image_height1 = $res_ctx->get_shortcode_att('image_height1');
        if ( is_numeric( $image_height1 ) ) {
            $res_ctx->load_settings_raw( 'image_height1', $image_height1 . '%' );
        } else {
            $res_ctx->load_settings_raw( 'image_height1', $image_height1 );
        }
        // image height 2
        $image_height2 = $res_ctx->get_shortcode_att('image_height2');
        if ( is_numeric( $image_height2 ) ) {
            $res_ctx->load_settings_raw( 'image_height2', $image_height2 . '%' );
        } else {
            $res_ctx->load_settings_raw( 'image_height2', $image_height2 );
        }

        // video icon size 1
        $video_icon1 = $res_ctx->get_shortcode_att('video_icon1');
        if ( $video_icon1 != '' && is_numeric( $video_icon1 ) ) {
            $res_ctx->load_settings_raw( 'video_icon1', $video_icon1 . 'px' );
        }
        // video icon size 2
        $video_icon2 = $res_ctx->get_shortcode_att('video_icon2');
        if( $video_icon2 == '' ) {
            $res_ctx->load_settings_raw( 'video_icon2', '30px' );
        } else {
            if ( is_numeric( $video_icon2 ) ) {
                $res_ctx->load_settings_raw( 'video_icon2', $video_icon2 . 'px' );
            }
        }

        // video icon position 1
        $video_icon_pos1 = $res_ctx->get_shortcode_att('video_icon_pos1');
        if( $video_icon_pos1 == '' || $video_icon_pos1 == 'center' ) {
            $res_ctx->load_settings_raw( 'video_icon_pos_center1', 1 );
        } else if ( $video_icon_pos1 == 'corner' ) {
            $res_ctx->load_settings_raw( 'video_icon_pos_corner1', 1 );
        }
        // video icon position 2
        $video_icon_pos2 = $res_ctx->get_shortcode_att('video_icon_pos2');
        if( $video_icon_pos2 == '' || $video_icon_pos2 == 'center' ) {
            $res_ctx->load_settings_raw( 'video_icon_pos_center2', 1 );
        } else if ( $video_icon_pos2 == 'corner' ) {
            $res_ctx->load_settings_raw( 'video_icon_pos_corner2', 1 );
        }

        // image width 1
        $image_width1 = $res_ctx->get_shortcode_att('image_width1');
        if ( is_numeric( $image_width1 ) ) {
            $res_ctx->load_settings_raw( 'image_width1', $image_width1 . '%' );
        } else {
            $res_ctx->load_settings_raw( 'image_width1', $image_width1 );
        }
        // image width 2
        $image_width2 = $res_ctx->get_shortcode_att('image_width2');
        if ( is_numeric( $image_width2 ) ) {
            $res_ctx->load_settings_raw( 'image_width2', $image_width2 . '%' );
        } else {
            $res_ctx->load_settings_raw( 'image_width2', $image_width2 );
        }

        // image zoom effect on hover
        $res_ctx->load_settings_raw( 'image_zoom', $res_ctx->get_shortcode_att('image_zoom') );

        // meta info width 1
        $meta_info_width1 = $res_ctx->get_shortcode_att('meta_width1');
        $res_ctx->load_settings_raw( 'meta_width1', $meta_info_width1 );
        if( $meta_info_width1 != '' && is_numeric( $meta_info_width1 ) ) {
            $res_ctx->load_settings_raw( 'meta_width1', $meta_info_width1 . 'px' );
        }
        // meta info width 2
        $meta_info_width2 = $res_ctx->get_shortcode_att('meta_width2');
        $res_ctx->load_settings_raw( 'meta_width2', $meta_info_width2 );
        if( $meta_info_width2 != '' && is_numeric( $meta_info_width2 ) ) {
            $res_ctx->load_settings_raw( 'meta_width2', $meta_info_width2 . 'px' );
        }

        // meta info margin 1
        $meta_margin1 = $res_ctx->get_shortcode_att('meta_margin1');
        $res_ctx->load_settings_raw( 'meta_margin1', $meta_margin1 );
        if ( is_numeric( $meta_margin1 ) ) {
            $res_ctx->load_settings_raw( 'meta_margin1', $meta_margin1 . 'px' );
        }
        // meta info margin 2
        $meta_margin2 = $res_ctx->get_shortcode_att('meta_margin2');
        $res_ctx->load_settings_raw( 'meta_margin2', $meta_margin2 );
        if ( is_numeric( $meta_margin2 ) ) {
            $res_ctx->load_settings_raw( 'meta_margin2', $meta_margin2 . 'px' );
        }

        // meta info padding 1
        $meta_padding1 = $res_ctx->get_shortcode_att('meta_padding1');
        $res_ctx->load_settings_raw( 'meta_padding1', $meta_padding1 );
        if ( is_numeric( $meta_padding1 ) ) {
            $res_ctx->load_settings_raw( 'meta_padding1', $meta_padding1 . 'px' );
        }
        // meta info padding 2
        $meta_padding2 = $res_ctx->get_shortcode_att('meta_padding2');
        $res_ctx->load_settings_raw( 'meta_padding2', $meta_padding2 );
        if ( is_numeric( $meta_padding2 ) ) {
            $res_ctx->load_settings_raw( 'meta_padding2', $meta_padding2 . 'px' );
        }

        // article title space 1
        $art_title1 = $res_ctx->get_shortcode_att('art_title1');
        $res_ctx->load_settings_raw( 'art_title1', $art_title1 );
        if ( is_numeric( $art_title1 ) ) {
            $res_ctx->load_settings_raw( 'art_title1', $art_title1 . 'px' );
        }
        // article title space 2
        $art_title2 = $res_ctx->get_shortcode_att('art_title2');
        $res_ctx->load_settings_raw( 'art_title2', $art_title2 );
        if ( is_numeric( $art_title2 ) ) {
            $res_ctx->load_settings_raw( 'art_title2', $art_title2 . 'px' );
        }

        // article title padding 1
        $art_title_padd1 = $res_ctx->get_shortcode_att('art_title_padd1');
        $res_ctx->load_settings_raw( 'art_title_padd1', $art_title_padd1 );
        if ( is_numeric( $art_title_padd1 ) ) {
            $res_ctx->load_settings_raw( 'art_title_padd1', $art_title_padd1 . 'px' );
        }
        // article title padding 2
        $art_title_padd2 = $res_ctx->get_shortcode_att('art_title_padd2');
        $res_ctx->load_settings_raw( 'art_title_padd2', $art_title_padd2 );
        if ( is_numeric( $art_title_padd2 ) ) {
            $res_ctx->load_settings_raw( 'art_title_padd2', $art_title_padd2 . 'px' );
        }

        // author & date padding 1
        $auth_date_padd1 = $res_ctx->get_shortcode_att('auth_date_padding1');
        $res_ctx->load_settings_raw( 'auth_date_padding1', $auth_date_padd1 );
        if ( is_numeric( $auth_date_padd1 ) ) {
            $res_ctx->load_settings_raw( 'auth_date_padding1', $auth_date_padd1 . 'px' );
        }
        // author & date padding 2
        $auth_date_padd2 = $res_ctx->get_shortcode_att('auth_date_padding2');
        $res_ctx->load_settings_raw( 'auth_date_padding2', $auth_date_padd2 );
        if ( is_numeric( $auth_date_padd2 ) ) {
            $res_ctx->load_settings_raw( 'auth_date_padding2', $auth_date_padd2 . 'px' );
        }

        // category tag margin 1
        $modules_category_margin1 = $res_ctx->get_shortcode_att('modules_category_margin1');
        $res_ctx->load_settings_raw( 'modules_category_margin1', $modules_category_margin1 );
        if( $modules_category_margin1 != '' ) {
            if( is_numeric( $modules_category_margin1 ) ) {
                $res_ctx->load_settings_raw( 'modules_category_margin1', $modules_category_margin1 . 'px' );
            }
        } else {
            $res_ctx->load_settings_raw( 'modules_category_margin1', '0 0 10px' );
        }
        // category tag margin 2
        $modules_category_margin2 = $res_ctx->get_shortcode_att('modules_category_margin2');
        $res_ctx->load_settings_raw( 'modules_category_margin2', $modules_category_margin2 );
        if( $modules_category_margin2 != '' ) {
            if( is_numeric( $modules_category_margin2 ) ) {
                $res_ctx->load_settings_raw( 'modules_category_margin2', $modules_category_margin2 . 'px' );
            }
        } else {
            $res_ctx->load_settings_raw( 'modules_category_margin2', '0 0 10px' );
        }

        // category tag padding 1
        $modules_category_padding1 = $res_ctx->get_shortcode_att('modules_category_padding1');
        $res_ctx->load_settings_raw( 'modules_category_padding1', $modules_category_padding1 );
        if( $modules_category_padding1 != '' && is_numeric( $modules_category_padding1 ) ) {
            $res_ctx->load_settings_raw( 'modules_category_padding1', $modules_category_padding1 . 'px' );
        }
        // category tag padding 2
        $modules_category_padding2 = $res_ctx->get_shortcode_att('modules_category_padding2');
        $res_ctx->load_settings_raw( 'modules_category_padding2', $modules_category_padding2 );
        if( $modules_category_padding2 != '' && is_numeric( $modules_category_padding2 ) ) {
            $res_ctx->load_settings_raw( 'modules_category_padding2', $modules_category_padding2 . 'px' );
        }

        // show meta info details
        $res_ctx->load_settings_raw( 'show_cat1', $res_ctx->get_shortcode_att('show_cat1') );
        $res_ctx->load_settings_raw( 'show_cat2', $res_ctx->get_shortcode_att('show_cat2') );

        $show_author1 = $res_ctx->get_shortcode_att('show_author1');
        $show_date1 = $res_ctx->get_shortcode_att('show_date1');
        $show_review1 = $res_ctx->get_shortcode_att('show_review1');
        $review_size1 = $res_ctx->get_shortcode_att('review_size1');
        $res_ctx->load_settings_raw( 'review_size1', 10 + $review_size1/0.5 . 'px' );
        if( $show_author1 == 'none' && $show_date1 == 'none' && $show_review1 == 'none' ) {
            $res_ctx->load_settings_raw( 'hide_author_date1', 'none' );
        } else {
            $res_ctx->load_settings_raw( 'hide_author_date1', 'inline-block' );
        }
        $res_ctx->load_settings_raw( 'show_author1', $show_author1 );
        $res_ctx->load_settings_raw( 'show_date1', $show_date1 );
        $res_ctx->load_settings_raw( 'show_review1', $show_review1 );

        $show_author2 = $res_ctx->get_shortcode_att('show_author2');
        $show_date2 = $res_ctx->get_shortcode_att('show_date2');
        $show_review2 = $res_ctx->get_shortcode_att('show_review2');
        $review_size2 = $res_ctx->get_shortcode_att('review_size2');
        $res_ctx->load_settings_raw( 'review_size2', 10 + $review_size2/0.5 . 'px' );
        if( $show_author2 == 'none' && $show_date2 == 'none' && $show_review2 == 'none' ) {
            $res_ctx->load_settings_raw( 'hide_author_date2', 'none' );
        } else {
            $res_ctx->load_settings_raw( 'hide_author_date2', 'inline-block' );
        }
        $res_ctx->load_settings_raw( 'show_author2', $show_author2 );
        $res_ctx->load_settings_raw( 'show_date2', $show_date2 );
        $res_ctx->load_settings_raw( 'show_review2', $show_review2 );


        // colors
        $res_ctx->load_color_settings( 'overlay_general', 'overlay_general', 'overlay_general_gradient', '', '' );
        $res_ctx->load_color_settings( 'overlay_h_general', 'overlay_h_general', 'overlay_general_h_gradient', '', '' );
        $res_ctx->load_color_settings( 'overlay_1', 'overlay_1', 'overlay_1_gradient', '', '' );
        $res_ctx->load_color_settings( 'overlay_2', 'overlay_2', 'overlay_2_gradient', '', '' );
        $res_ctx->load_color_settings( 'overlay_3', 'overlay_3', 'overlay_3_gradient', '', '' );
        $res_ctx->load_settings_raw( 'meta_bg', $res_ctx->get_shortcode_att('meta_bg') );
        $res_ctx->load_settings_raw( 'meta_shadow', $res_ctx->get_shortcode_att('meta_shadow') );
        $res_ctx->load_settings_raw( 'cat_bg', $res_ctx->get_shortcode_att('cat_bg') );
        $res_ctx->load_settings_raw( 'cat_txt', $res_ctx->get_shortcode_att('cat_txt') );
        $res_ctx->load_settings_raw( 'cat_bg_hover', $res_ctx->get_shortcode_att('cat_bg_hover') );
        $res_ctx->load_settings_raw( 'cat_txt_hover', $res_ctx->get_shortcode_att('cat_txt_hover') );
        $res_ctx->load_settings_raw( 'title_txt', $res_ctx->get_shortcode_att('title_txt') );
        $res_ctx->load_settings_raw( 'title_txt_hover', $res_ctx->get_shortcode_att('title_txt_hover') );
        $res_ctx->load_settings_raw( 'title_bg', $res_ctx->get_shortcode_att('title_bg') );
        $res_ctx->load_settings_raw( 'title_shadow', $res_ctx->get_shortcode_att('title_shadow') );
        $res_ctx->load_settings_raw( 'author_txt', $res_ctx->get_shortcode_att('author_txt') );
        $res_ctx->load_settings_raw( 'author_txt_hover', $res_ctx->get_shortcode_att('author_txt_hover') );
        $res_ctx->load_settings_raw( 'date_txt', $res_ctx->get_shortcode_att('date_txt') );
        $res_ctx->load_settings_raw( 'auth_date_bg', $res_ctx->get_shortcode_att('auth_date_bg') );
        $res_ctx->load_settings_raw( 'review_stars', $res_ctx->get_shortcode_att('review_stars') );


        // fonts
        $res_ctx->load_font_settings( 'f_title1' );
        $res_ctx->load_font_settings( 'f_cat1' );
        $res_ctx->load_font_settings( 'f_meta1' );
        $res_ctx->load_settings_raw( 'f_meta1_fw', $res_ctx->get_shortcode_att('f_meta1_font_weight') );
        $res_ctx->load_font_settings( 'f_title2' );
        $res_ctx->load_font_settings( 'f_cat2' );
        $res_ctx->load_font_settings( 'f_meta2' );
        $res_ctx->load_settings_raw( 'f_meta2_fw', $res_ctx->get_shortcode_att('f_meta2_font_weight') );

        // mix blend
        $mix_type = $res_ctx->get_shortcode_att('mix_type');
        if ( $mix_type != '' ) {
            $res_ctx->load_settings_raw('mix_type', $res_ctx->get_shortcode_att('mix_type'));
        }
        $res_ctx->load_color_settings( 'mix_color', 'color', 'mix_gradient', '', '' );

        $mix_type_h = $res_ctx->get_shortcode_att('mix_type_h');
        if ( $mix_type_h != '' ) {
            $res_ctx->load_settings_raw('mix_type_h', $res_ctx->get_shortcode_att('mix_type_h'));
        } else {
            $res_ctx->load_settings_raw('mix_type_off', 1);
        }
        $res_ctx->load_color_settings( 'mix_color_h', 'color_h', 'mix_gradient_h', '', '' );

        // effects
        $res_ctx->load_settings_raw('fe_brightness', 'brightness(1)');
        $res_ctx->load_settings_raw('fe_contrast', 'contrast(1)');
        $res_ctx->load_settings_raw('fe_saturate', 'saturate(1)');

        $fe_brightness = $res_ctx->get_shortcode_att('fe_brightness');
        if ($fe_brightness != '1') {
            $res_ctx->load_settings_raw('fe_brightness', 'brightness(' . $fe_brightness . ')');
            $res_ctx->load_settings_raw('effect_on', 1);
        }
        $fe_contrast = $res_ctx->get_shortcode_att('fe_contrast');
        if ($fe_contrast != '1') {
            $res_ctx->load_settings_raw('fe_contrast', 'contrast(' . $fe_contrast . ')');
            $res_ctx->load_settings_raw('effect_on', 1);
        }
        $fe_saturate = $res_ctx->get_shortcode_att('fe_saturate');
        if ($fe_saturate != '1') {
            $res_ctx->load_settings_raw('fe_saturate', 'saturate(' . $fe_saturate . ')');
            $res_ctx->load_settings_raw('effect_on', 1);
        }

        // effects hover
        $res_ctx->load_settings_raw('fe_brightness_h', 'brightness(1)');
        $res_ctx->load_settings_raw('fe_contrast_h', 'contrast(1)');
        $res_ctx->load_settings_raw('fe_saturate_h', 'saturate(1)');

        $fe_brightness_h = $res_ctx->get_shortcode_att('fe_brightness_h');
        $fe_contrast_h = $res_ctx->get_shortcode_att('fe_contrast_h');
        $fe_saturate_h = $res_ctx->get_shortcode_att('fe_saturate_h');

        if ($fe_brightness_h != '1') {
            $res_ctx->load_settings_raw('fe_brightness_h', 'brightness(' . $fe_brightness_h . ')');
            $res_ctx->load_settings_raw('effect_on_h', 1);
        }
        if ($fe_contrast_h != '1') {
            $res_ctx->load_settings_raw('fe_contrast_h', 'contrast(' . $fe_contrast_h . ')');
            $res_ctx->load_settings_raw('effect_on_h', 1);
        }
        if ($fe_saturate_h != '1') {
            $res_ctx->load_settings_raw('fe_saturate_h', 'saturate(' . $fe_saturate_h . ')');
            $res_ctx->load_settings_raw('effect_on_h', 1);
        }
        // make hover to work
        if ($fe_brightness_h != '1' || $fe_contrast_h != '1' || $fe_saturate_h != '1') {
            $res_ctx->load_settings_raw('effect_on', 1);
        }
        if ($fe_brightness != '1' || $fe_contrast != '1' || $fe_saturate != '1') {
            $res_ctx->load_settings_raw('effect_on_h', 1);
        }

    }

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>
                /* @general_style */
                .td-big-grid-flex {
                    width: 100%;
                    padding-bottom: 0;
                }
                .td-big-grid-flex .td_block_inner:after,
                .td-big-grid-flex .td_block_inner .td-big-grid-flex-post:after {
                    content: '';
                    display: table;
                    clear: both;
                }
                @media (max-width: 767px) {
                    .td-big-grid-flex .td_block_inner {
                        margin-left: -20px;
                        margin-right: -20px;
                    }
                }
                .td-big-grid-flex .td-big-grid-flex-post {
                    position: relative;
                    float: left;
                    padding-bottom: 0;
                }
                .td-big-grid-flex .td-image-container {
                    position: relative;
                    flex: 0 0 100%;
                    width: 100%;
                    height: 100%;
                }
                .td-big-grid-flex .td-image-wrap {
                    position: relative;
                    display: block;
                    overflow: hidden;
                }
                .td-big-grid-flex .td-image-wrap:before {
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    -webkit-transition: background-color 0.3s ease;
                    transition: background-color 0.3s ease;
                    z-index: 1;
                }
                .td-big-grid-flex .td-module-thumb {
                    position: relative;
                    margin-bottom: 0;
                }
                .td-big-grid-flex .td-module-thumb:after {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                }
                .td-big-grid-flex .td-thumb-css {
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    background-size: cover;
                    background-position: center center;
                    -webkit-transition: transform 0.3s ease, opacity 0.3s;
                    transition: transform 0.3s ease, opacity 0.3s;
                }
                .td-big-grid-flex .td-module-meta-info {
                    position: absolute;
                    left: 0;
                    margin-bottom: 0;
                    width: 100%;
                    pointer-events: none;
                    z-index: 1;
                }
                .td-big-grid-flex .td-post-category {
                    padding: 3px 7px;
                    background-color: rgba(0, 0, 0, 0.7);
                    font-family: 'Roboto', sans-serif;
                    line-height: 13px;
                    font-weight: 500;
                    text-transform: uppercase;
                    pointer-events: auto;
                }
                .td-big-grid-flex .td-module-title a,
                .td-big-grid-flex .td-post-author-name span,
                .td-big-grid-flex .td-module-container:hover .entry-title a,
                .td-big-grid-flex .td-post-author-name a,
                .td-big-grid-flex .td-post-date {
                    color: #fff;
                }
                .td-big-grid-flex .td-module-title {
                    margin: 0;
                }
                .td-big-grid-flex .td-module-title a {
                    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
                }
                .td-big-grid-flex .td-editor-date {
                    display: inline-block;
                }
                .td-big-grid-flex .td-post-author-name a,
                .td-big-grid-flex .td-post-author-name span,
                .td-big-grid-flex .td-post-date {
                    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
                }
                .td-big-grid-flex .td-big-grid-flex-post-empty .td-image-wrap {
                    background-color: #e5e5e5;
                }
                .td-big-grid-flex .td-big-grid-flex-post-empty .td-image-wrap:before {
                    display: none;
                }
                @media (min-width: 767px) {
                    .td-big-grid-flex-lightsky .td-image-wrap:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 160%;
                        height: 100%;
                        background: rgba(255, 255, 255, 0.2);
                        transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg) translate3d(0, -120%, 0);
                        -webkit-transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg) translate3d(0, -120%, 0);
                        transition: transform 0.7s ease 0s;
                        -webkit-transition: transform 0.7s ease 0s;
                        z-index: 1;
                    }
                    .td-big-grid-flex-lightsky .td-module-container:hover .td-image-wrap:after {
                        transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg) translate3d(0, 146%, 0);
                        -webkit-transform: scale3d(1.9, 1.4, 1) rotate3d(0, 0, 1, 45deg) translate3d(0, 146%, 0);
                    }
                }
                @media (max-width: 767px) {
                    div.td-big-grid-flex-scroll .td-big-grid-flex-post {
                        float: none;
                    }
                    div.td-big-grid-flex-scroll .td-big-grid-flex-scroll-holder {
                        overflow-x: auto;
                        overflow-y: hidden;
                        white-space: nowrap;
                        font-size: 0;
                        -webkit-overflow-scrolling: touch;
                    }
                    div.td-big-grid-flex-scroll .td-big-grid-flex-scroll-holder .td-big-grid-flex-post {
                        display: inline-block;
                        vertical-align: top;
                    }
                    div.td-big-grid-flex-scroll .td-module-title a {
                        white-space: normal;
                    }
                }
                
                /* @specific_style */
                .td_block_big_grid_flex_7 .td_module_flex_6 {
                    width: 50%;
                }
                .td_block_big_grid_flex_7 .td_module_flex_6 .entry-title {
                    font-size: 27px;
                    font-weight: 500;
                    line-height: 34px;
                }
                @media (min-width: 1019px) and (max-width: 1140px) {
                    .td_block_big_grid_flex_7 .td_module_flex_6 .entry-title {
                        font-size: 21px;
                        line-height: 28px;
                    }
                }
                @media (min-width: 768px) and (max-width: 1018px) {
                    .td_block_big_grid_flex_7 .td_module_flex_6 .entry-title {
                        font-size: 16px;
                        line-height: 20px;
                    }
                }
                .td_block_big_grid_flex_7 .td_module_flex_7 {
                    width: 25%;
                }
                .td_block_big_grid_flex_7 .td_module_flex_7 .entry-title {
                    font-size: 24px;
                    font-weight: 500;
                    line-height: 30px;
                }
                @media (min-width: 1019px) and (max-width: 1140px) {
                    .td_block_big_grid_flex_7 .td_module_flex_7 .entry-title {
                        font-size: 20px;
                        line-height: 26px;
                    }
                }
                @media (min-width: 768px) and (max-width: 1018px) {
                    .td_block_big_grid_flex_7 .td_module_flex_7 .entry-title {
                        font-size: 15px;
                        line-height: 20px;
                    }
                }
                .td_block_big_grid_flex_7 .td_module_flex_6 .td-image-wrap,
                .td_block_big_grid_flex_7 .td_module_flex_7 .td-image-wrap {
                    padding-bottom: 400px;
                }
                .td_block_big_grid_flex_7 .td_module_flex_6 .td-module-meta-info,
                .td_block_big_grid_flex_7 .td_module_flex_7 .td-module-meta-info {
                    padding: 20px;
                }
                @media (max-width: 767px) {
                    .td_block_big_grid_flex_7 .td_module_flex_6 .entry-title,
                    .td_block_big_grid_flex_7 .td_module_flex_7 .entry-title{
                        font-size: 16px;
                        line-height: 21px;
                    }
                }
                

				/* @modules_gap */
                div.$unique_block_class .td-big-grid-flex-post {
                    border-width: 0 @modules_gap;
                    border-style: solid;
                    border-color: transparent;
                }
                div.$unique_block_class .td_block_inner {
                    margin-left: -@modules_gap;
                    margin-right: -@modules_gap;
                }
				@media (max-width: 767px) {
                    div.$unique_block_class .td_block_inner {
                        margin-left: calc(-@modules_gap - 20px);
                        margin-right: calc(-@modules_gap - 20px);
                    }
				}
				/* @modules_gap_mob */
                @media (max-width: 767px) {
                    div.$unique_block_class .td-big-grid-flex-post-0,
                    div.$unique_block_class .td-big-grid-flex-post-1 {
                        margin-bottom: @modules_gap_mob;
                    }
                }
				
				/* @meta_info_horiz_center */
				div.$unique_block_class .td-module-meta-info {
					text-align: center;
                    right: 0;
                    margin: 0 auto;
				}
				/* @meta_info_horiz_right */
				div.$unique_block_class .td-module-meta-info {
					text-align: right;
					left: auto;
					right: 0;
				}
			
				/* @meta_info_vert_top */
				div.$unique_block_class .td-module-meta-info {
					top: 0;
				}
				/* @meta_info_vert_center */
				div.$unique_block_class .td-module-meta-info {
					top: 50%;
					transform: translateY(-50%);
				}
				/* @meta_info_vert_bottom */
				div.$unique_block_class .td-module-meta-info {
					bottom: 0;
				}
				
				/* @image_zoom */
				@media (min-width: 767px) {
                    div.$unique_block_class .td-module-container:hover .td-thumb-css {
                        transform: scale3d(1.1, 1.1, 1);
                        -webkit-transform: scale3d(1.1, 1.1, 1);
                    }
                }
                
				/* @image_alignment1 */
				div.$unique_block_class .td_module_flex_6 .entry-thumb {
					background-position: center @image_alignment1;
				}
				/* @image_alignment2 */
				div.$unique_block_class .td_module_flex_7 .entry-thumb {
					background-position: center @image_alignment2;
				}
				
				/* @image_height1 */
				div.$unique_block_class .td_module_flex_6 .td-image-wrap {
					padding-bottom: @image_height1;
				}
				/* @image_height2 */
				div.$unique_block_class .td_module_flex_7 .td-image-wrap {
					padding-bottom: @image_height2;
				}
				/* @video_icon1 */
				div.$unique_block_class .td_module_flex_6 .td-video-play-ico {
					width: @video_icon1;
					height: @video_icon1;
					font-size: @video_icon1;
				}
				/* @video_icon2 */
				div.$unique_block_class .td_module_flex_7 .td-video-play-ico {
					width: @video_icon2;
					height: @video_icon2;
					font-size: @video_icon2;
				}
				
				/* @video_icon_pos_center1 */
				div.$unique_block_class .td_module_flex_6 .td-video-play-ico {
					top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
				}
				/* @video_icon_pos_corner1 */
				div.$unique_block_class .td_module_flex_6 .td-video-play-ico {
					top: 20px;
                    left: auto;
                    right: 20px;
                    transform: none;
				}
				/* @video_icon_pos_center2 */
				div.$unique_block_class .td_module_flex_7 .td-video-play-ico {
					top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
				}
				/* @video_icon_pos_corner2 */
				div.$unique_block_class .td_module_flex_7 .td-video-play-ico {
					top: 20px;
                    left: auto;
                    right: 20px;
                    transform: none;
				}
				
				/* @image_width1 */
				div.$unique_block_class .td_module_flex_6 {
					width: @image_width1;
				}
				/* @image_width2 */
				div.$unique_block_class .td_module_flex_7 {
					width: @image_width2;
				}
				
				/* @meta_width1 */
				div.$unique_block_class .td_module_flex_6 .td-module-meta-info {
					width: @meta_width1;
				}
				/* @meta_width2 */
				div.$unique_block_class .td_module_flex_7 .td-module-meta-info {
					width: @meta_width2;
				}
				
				/* @meta_margin1 */
				div.$unique_block_class .td_module_flex_6 .td-module-meta-info {
					margin: @meta_margin1;
				}
				/* @meta_margin2 */
				div.$unique_block_class .td_module_flex_7 .td-module-meta-info {
					margin: @meta_margin2;
				}
				
				/* @meta_padding1 */
				div.$unique_block_class .td_module_flex_6 .td-module-meta-info {
					padding: @meta_padding1;
				}
				/* @meta_padding2 */
				div.$unique_block_class .td_module_flex_7 .td-module-meta-info {
					padding: @meta_padding2;
				}
				
				/* @meta_shadow */
				div.$unique_block_class .td-post-author-name a,
				div.$unique_block_class .td-post-author-name span,
				div.$unique_block_class .td-post-date {
				    text-shadow: none;
				}
				
				/* @art_title1 */
				div.$unique_block_class .td_module_flex_6 .tdb-module-title-wrap {
					margin: @art_title1;
				}
				/* @art_title2 */
				div.$unique_block_class .td_module_flex_7 .tdb-module-title-wrap {
					margin: @art_title2;
				}
				
				/* @art_title_padd1 */
				div.$unique_block_class .td_module_flex_6 .entry-title {
					padding: @art_title_padd1;
				}
				/* @art_title_padd2 */
				div.$unique_block_class .td_module_flex_7 .entry-title {
					padding: @art_title_padd2;
				}
				
				/* @auth_date_padding1 */
				div.$unique_block_class .td_module_flex_6 .td-editor-date {
					padding: @auth_date_padding1;
				}
				/* @auth_date_padding2 */
				div.$unique_block_class .td_module_flex_7 .td-editor-date {
					padding: @auth_date_padding2;
				}
				
				/* @modules_category_margin1 */
				div.$unique_block_class .td_module_flex_6 .td-post-category {
					margin: @modules_category_margin1;
				}
				/* @modules_category_margin2 */
				div.$unique_block_class .td_module_flex_7 .td-post-category {
					margin: @modules_category_margin2;
				}
				
				/* @modules_category_padding1 */
				div.$unique_block_class .td_module_flex_6 .td-post-category {
					padding: @modules_category_padding1;
				}
				/* @modules_category_padding2 */
				div.$unique_block_class .td_module_flex_7 .td-post-category {
					padding: @modules_category_padding2;
				}
				
				/* @show_cat1 */
				div.$unique_block_class .td_module_flex_6 .td-post-category {
					display: @show_cat1;
				}
				/* @show_cat2 */
				div.$unique_block_class .td_module_flex_7 .td-post-category {
					display: @show_cat2;
				}
				
				/* @hide_author_date1 */
				div.$unique_block_class .td_module_flex_6 .td-editor-date {
					display: @hide_author_date1;
				}
				/* @hide_author_date2 */
				div.$unique_block_class .td_module_flex_7 .td-editor-date {
					display: @hide_author_date2;
				}
				
				/* @show_author1 */
				div.$unique_block_class .td_module_flex_6 .td-post-author-name {
					display: @show_author1;
				}
				/* @show_author2 */
				div.$unique_block_class .td_module_flex_7 .td-post-author-name {
					display: @show_author2;
				}
				
				/* @show_date1 */
				div.$unique_block_class .td_module_flex_6 .td-post-date,
				div.$unique_block_class .td_module_flex_6 .td-post-author-name span {
					display: @show_date1;
				}
				/* @show_date2 */
				div.$unique_block_class .td_module_flex_7 .td-post-date,
				div.$unique_block_class .td_module_flex_7 .td-post-author-name span {
					display: @show_date2;
				}
				
				/* @show_review1 */
				div.$unique_block_class .td_module_flex_6 .entry-review-stars {
					display: @show_review1;
				}
				/* @review_size1 */
				div.$unique_block_class .td_module_flex_6 .td-icon-star,
                div.$unique_block_class .td_module_flex_6 .td-icon-star-empty,
                div.$unique_block_class .td_module_flex_6 .td-icon-star-half {
					font-size: @review_size1;
				}
				/* @show_review2 */
				div.$unique_block_class .td_module_flex_7 .entry-review-stars {
					display: @show_review2;
				}
				/* @review_size2 */
				div.$unique_block_class .td_module_flex_7 .td-icon-star,
                div.$unique_block_class .td_module_flex_7 .td-icon-star-empty,
                div.$unique_block_class .td_module_flex_7 .td-icon-star-half {
					font-size: @review_size2;
				}
				
			    
			    /* @overlay_general */
				div.$unique_block_class .td-image-wrap:before {
				    content: '';
				    background-color: @overlay_general;
				}
				/* @overlay_h_general */
				div.$unique_block_class .td-module-thumb:after {
				    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
				    background-color: @overlay_h_general;
				    opacity: 0;
				    z-index: 1;
                    -webkit-transition: opacity 0.4s ease 0.2s;
                    -moz-transition: opacity 0.4s ease 0.2s;
                    -o-transition: opacity 0.4s ease 0.2s;
                    transition: opacity 0.4s ease 0.2s;
                    pointer-events: none;
				}
				div.$unique_block_class .td-module-container:hover .td-module-thumb:after {
				    opacity: 1;
				}
				/* @overlay_general_gradient */
				div.$unique_block_class .td-image-wrap:before {
				    content: '';
				    @overlay_general_gradient
				}
				/* @overlay_1 */
				div.$unique_block_class .td-big-grid-flex-post-0 .td-image-wrap:before {
				    content: '';
				    background-color: @overlay_1;
				}
				/* @overlay_1_gradient */
				div.$unique_block_class .td-big-grid-flex-post-0 .td-image-wrap:before {
				    content: '';
				    @overlay_1_gradient
				}
				/* @overlay_2 */
				div.$unique_block_class .td-big-grid-flex-post-1 .td-image-wrap:before {
				    content: '';
				    background-color: @overlay_2;
				}
				/* @overlay_2_gradient */
				div.$unique_block_class .td-big-grid-flex-post-1 .td-image-wrap:before {
				    content: '';
				    @overlay_2_gradient
				}
				/* @overlay_3 */
				div.$unique_block_class .td-big-grid-flex-post-2 .td-image-wrap:before {
				    content: '';
				    background-color: @overlay_3;
				}
				/* @overlay_3_gradient */
				div.$unique_block_class .td-big-grid-flex-post-2 .td-image-wrap:before {
				    content: '';
				    @overlay_3_gradient
				}
				/* @meta_bg */
				div.$unique_block_class .td-module-meta-info {
					background-color: @meta_bg;
				}
				/* @cat_bg */
				div.$unique_block_class .td-post-category {
					background-color: @cat_bg;
				}
				/* @cat_bg_hover */
				div.$unique_block_class .td-module-container:hover .td-post-category {
					background-color: @cat_bg_hover;
				}
				/* @cat_txt */
				div.$unique_block_class .td-post-category {
					color: @cat_txt;
				}
				/* @cat_txt_hover */
				div.$unique_block_class .td-module-container:hover .td-post-category {
					color: @cat_txt_hover;
				}
				/* @title_txt */
				div.$unique_block_class .td-module-title a {
					color: @title_txt;
				}
				/* @title_txt_hover */
				div.$unique_block_class .td-big-grid-flex-post:hover .td-module-title a {
					color: @title_txt_hover;
				}
				/* @title_shadow */
				div.$unique_block_class .td-module-title a {
					text-shadow: none;
				}
				/* @title_bg */
				div.$unique_block_class .td-module-title {
					-webkit-text-fill-color: initial;
					background: @title_bg;
					-webkit-box-decoration-break: clone;
					box-decoration-break: clone;
					display: inline;
				}
				/* @author_txt */
				div.$unique_block_class .td-post-author-name a {
					color: @author_txt;
				}
				/* @author_txt_hover */
				div.$unique_block_class .td-big-grid-flex-post:hover .td-post-author-name a {
					color: @author_txt_hover;
				}
				/* @date_txt */
				div.$unique_block_class .td-post-date,
				div.$unique_block_class .td-post-author-name span {
					color: @date_txt;
				}
				/* @auth_date_bg */
				div.$unique_block_class .td-editor-date {
					background-color: @auth_date_bg;
				}
				/* @review_stars */
				div.$unique_block_class .entry-review-stars {
				    color: @review_stars;
				}
				
			
				/* @f_title1 */
				div.$unique_block_class .td_module_flex_6 .entry-title {
					@f_title1
				}
				/* @f_title2 */
				div.$unique_block_class .td_module_flex_7 .entry-title {
					@f_title2
				}
				
				/* @f_cat1 */
				div.$unique_block_class .td_module_flex_6 .td-post-category {
					@f_cat1
				}
				/* @f_cat2 */
				div.$unique_block_class .td_module_flex_7 .td-post-category {
					@f_cat2
				}
				
				/* @f_meta1 */
				div.$unique_block_class .td_module_flex_6 .td-editor-date,
				div.$unique_block_class .td_module_flex_6 .td-module-comments a {
					@f_meta1
				}
				/* @f_meta2 */
				div.$unique_block_class .td_module_flex_7 .td-editor-date,
				div.$unique_block_class .td_module_flex_7 .td-module-comments a {
					@f_meta2
				}
				
				/* @f_meta1_fw */
				div.$unique_block_class .td_module_flex_6 .td-post-author-name {
				    font-weight: @f_meta1_fw;
				}
				/* @f_meta2_fw */
				div.$unique_block_class .td_module_flex_7 .td-post-author-name {
				    font-weight: @f_meta2_fw;
				}
				
				/* @mix_type */
                html:not([class*='ie']) div.$unique_block_class .entry-thumb:before {
                    content: '';
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    top: 0;
                    left: 0;
                    opacity: 1;
                    transition: opacity 1s ease;
                    -webkit-transition: opacity 1s ease;
                    mix-blend-mode: @mix_type;
                }
                /* @color */
                html:not([class*='ie']) div.$unique_block_class .entry-thumb:before {
                    background: @color;
                }
                /* @mix_gradient */
                html:not([class*='ie']) div.$unique_block_class .entry-thumb:before {
                    @mix_gradient;
                }
                
                
                /* @mix_type_h */
                @media (min-width: 1141px) {
                    html:not([class*='ie']) div.$unique_block_class .entry-thumb:after {
                        content: '';
                        width: 100%;
                        height: 100%;
                        position: absolute;
                        top: 0;
                        left: 0;
                        opacity: 0;
                        transition: opacity 1s ease;
                        -webkit-transition: opacity 1s ease;
                        mix-blend-mode: @mix_type_h;
                    }
                    html:not([class*='ie']) div.$unique_block_class .td-module-container:hover .entry-thumb:after {
                        opacity: 1;
                    }
                }
                
                /* @color_h */
                html:not([class*='ie']) div.$unique_block_class .entry-thumb:after {
                    background: @color_h;
                }
                /* @mix_gradient_h */
                html:not([class*='ie']) div.$unique_block_class .entry-thumb:after {
                    @mix_gradient_h;
                }
                /* @mix_type_off */
                html:not([class*='ie']) div.$unique_block_class .td-module-container:hover .entry-thumb:before {
                    opacity: 0;
                }
                    
                /* @effect_on */
                html:not([class*='ie']) div.$unique_block_class .entry-thumb {
                    filter: @fe_brightness @fe_contrast @fe_saturate;
                    transition: all 1s ease;
                    -webkit-transition: all 1s ease;
                }
                /* @effect_on_h */
                @media (min-width: 1141px) {
                    html:not([class*='ie']) div.$unique_block_class .td-module-container:hover .entry-thumb {
                        filter: @fe_brightness_h @fe_contrast_h @fe_saturate_h;
                    }
                }
				
			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

        $compiled_css .= $td_css_res_compiler->compile_css();

        return $compiled_css;
    }


    function render($atts, $content = null){

		if ( empty( $atts ) ) {
			$atts = array();
		}
        $atts['limit'] = self::POST_LIMIT;

        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

        $additional_classes = array();

        if( $this->get_att( 'lightsky' ) != '' ) {
            $additional_classes[] = 'td-big-grid-flex-lightsky';
        }


        $buffy = '';

        $buffy .= '<div class="td-big-grid-flex ' . $this->get_block_classes($additional_classes). ' td-big-grid-flex-posts"' . $this->get_block_html_atts() . '>';
            //get the block css
            $buffy .= $this->get_block_css();

            $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner">';
                $buffy .= $this->inner($this->td_query->posts, $this->get_att('td_column_number')); //inner content of the block
            $buffy .= '</div>';
        $buffy .= '</div>';

        return $buffy;
    }

    function inner($posts, $td_column_number = '') {

        $buffy = '';

        if (!empty($posts)) {

            $post_count = 0;

            foreach ( $posts as $post ) {
                if ($post_count == 0) {
                    $td_module_flex = new td_module_flex_6($post, $this->get_all_atts());
                    $buffy .= $td_module_flex->render($post_count);

                    $post_count++;
                    continue;
                }

                $td_module_flex_2 = new td_module_flex_7($post, $this->get_all_atts());
                $buffy .= $td_module_flex_2->render($post_count);

                $post_count++;
            }

            if ($post_count < self::POST_LIMIT) {
                for ($i = $post_count; $i < self::POST_LIMIT; $i++) {
                    if ($post_count == 0) {
                        $td_module_flex = new td_module_flex_empty($post, $this->get_all_atts());
                        $buffy .= $td_module_flex->render($i, 'td_module_flex_6');

                        $post_count++;
                        continue;
                    }

                    $td_module_flex_2 = new td_module_flex_empty($post, $this->get_all_atts());
                    $buffy .= $td_module_flex_2->render($i, 'td_module_flex_7');

                    $post_count++;
                }
            }

        }

        return $buffy;
    }
}