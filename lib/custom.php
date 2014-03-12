<?php
/**
 * Custom functions
 */
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);

function languages_list_custom(){
    $languages = icl_get_languages('skip_missing=0&orderby=custom');
    if(!empty($languages)){
        echo '<div id="lang_sel_list"><ul>';
        foreach($languages as $l){
            echo '<li>';
            if($l['country_flag_url']){
                echo '<a href="'.$l['url'].'" style="text-align:center;">';
                echo '<img src="'.$l['country_flag_url'].'" alt="'.$l['language_code'].'" />';
                echo icl_disp_language($l['native_name'], $l['translated_name']);
                echo '</a>';
            }
            echo '</li>';
        }
        echo '</ul></div>';
    }
}