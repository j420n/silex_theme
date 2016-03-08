<?php
/**
 * Preprocess variables for page.tpl.php
 *
 * @see page.tpl.php
 */
function silex_preprocess_page(&$variables) {
}

function silex_form_system_theme_settings_alter(&$form, $form_state) {
    $form['silex_theme-footer-text'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Widget'),
        '#default_value' => theme_get_setting('silex_theme-footer-text'),
        '#description'   => t("Place this text in the widget spot on your site."),
    );
}
