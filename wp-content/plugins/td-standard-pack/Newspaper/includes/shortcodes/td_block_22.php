<?php

/**
 * Class td_block_22
 */
class td_block_22 extends td_block {

    static function cssMedia( $res_ctx ) {

        // fonts
        $res_ctx->load_font_settings( 'f_header' );
        $res_ctx->load_font_settings( 'f_ajax' );
        $res_ctx->load_font_settings( 'f_more' );

        // module 17 fonts
        $res_ctx->load_font_settings( 'm17f_title' );
        $res_ctx->load_font_settings( 'm17f_cat' );
        $res_ctx->load_font_settings( 'm17f_meta' );
        $res_ctx->load_font_settings( 'm17f_ex' );
        $res_ctx->load_font_settings( 'm17f_btn' );

    }

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>

				/* @f_header */
				.$unique_block_class .td-block-title a,
				.$unique_block_class .td-block-title span {
					@f_header
				}
				/* @f_ajax */
				.$unique_block_class .td-subcat-list a,
				.$unique_block_class .td-subcat-dropdown span,
				.$unique_block_class .td-subcat-dropdown a {
					@f_ajax
				}
				/* @f_more */
				.$unique_block_class .td-load-more-wrap a {
					@f_more
				}
				/* @m17f_title */
				.$unique_block_class .td_module_17 .entry-title {
					@m17f_title
				}
				/* @m17f_cat */
				.$unique_block_class .td_module_17 .td-post-category {
					@m17f_cat
				}
				/* @m17f_meta */
				.$unique_block_class .td_module_17 .td-module-meta-holder {
					@m17f_meta
				}
				/* @m17f_ex */
				.$unique_block_class .td_module_17 .td-excerpt {
					@m17f_ex
				}
				/* @m17f_btn */
				.$unique_block_class .td_module_17 .td-read-more a {
					@m17f_btn
				}
			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

        $compiled_css .= $td_css_res_compiler->compile_css();

        return $compiled_css;
    }

    function render($atts, $content = null) {

        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

        if (empty($td_column_number)) {
            $td_column_number = td_global::vc_get_column_number(); // get the column width of the block from the page builder API
        }

        $buffy = ''; //output buffer

        $buffy .= '<div class="' . $this->get_block_classes() . ' td-column-' . $td_column_number . '" ' . $this->get_block_html_atts() . '>';

		    //get the block js
		    $buffy .= $this->get_block_css();

		    //get the js for this block
		    $buffy .= $this->get_block_js();

            // block title wrap
            $buffy .= '<div class="td-block-title-wrap">';
                $buffy .= $this->get_block_title(); //get the block title
                $buffy .= $this->get_pull_down_filter(); //get the sub category filter for this block
            $buffy .= '</div>';

            $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner td-column-' . $td_column_number . ' td-opacity-read">'; // td-opacity-xxx - used for block colors to work with read more/category/author with no background color
                $buffy .= $this->inner($this->td_query->posts); //inner content of the block
            $buffy .= '</div>';

            //get the ajax pagination for this block
            $buffy .= $this->get_block_pagination();
        $buffy .= '</div> <!-- ./block -->';
        return $buffy;
    }

    function inner($posts, $td_column_number = '') {

        $buffy = '';


        if (!empty($posts)) {
            foreach ($posts as $post) {
                $td_module_17 = new td_module_17($post, $this->get_all_atts());
                $buffy .= $td_module_17->render($post);
            }
        }
        return $buffy;
    }
}
