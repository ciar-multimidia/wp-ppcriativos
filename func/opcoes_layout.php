<?php 

add_action('admin_init', 'add_opcoes_layout_init');
add_action('admin_menu', 'add_opcoes_layout_add_page'); 
function add_opcoes_layout_init() {
    register_setting('add_opcoes', 'add_opcoes_layout'); 
} 
function add_opcoes_layout_add_page() {
    // add_theme_page( __( 'Configurações do site' ), __( 'Configurações do site' ), 'edit_theme_options', 'opcoes_layout', 'add_opcoes_layout_do_page' );

    add_submenu_page( 'options-general.php', 'Informações do site', 'Informações do site', 'edit_theme_options', 'info_site', 'add_opcoes_layout_do_page' );
}
function add_opcoes_layout_do_page() {
    global $select_options;
    if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false; 

    // ========================================//
    // INICIO INTERFACE OPCOES 
    // ========================================//     
    
    ?>
    

    <div class="painel-opcoes-tema">

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/func/css/painel.css" TYPE="text/css" MEDIA="screen">
        <h1>Informações do site</h1>
    
    <?php // if ( false !== $_REQUEST['settings-updated'] ) : echo '<p>&nbsp;</p><div id="message" class="updated"><p><strong>Pronto!</strong> Tudo salvo.</p></div>'; endif; ?> 

    <div class="section painel">
    
                <form method="post" class="formulario-opcoes" action="options.php">
                <?php settings_fields('add_opcoes'); ?>  
                <?php $options = get_option('add_opcoes_layout'); ?> 

                        <table class="form-table">
                            <tr>
                                <th>URL do Moodle do curso</th>
                                <td>
                                    <?php /*<textarea name="add_opcoes_layout[nomeOpcao]" id="add_opcoes_layout[nomeOpcao]" cols="50" rows="8"><?php if (!empty($options['nomeOpcao'])) { echo esc_textarea( $options['nomeOpcao'] ); } ?></textarea><br>*/ ?>
                                    <input type="text" name="add_opcoes_layout[url_moodle]" id="add_opcoes_layout[url_moodle]" value="<?php if (!empty($options['url_moodle'])) { esc_attr_e( $options['url_moodle'] ); } ?>" /> <br>
                                    <small>A URL deve estar completa, devendo começar com 'http' ou 'https'. Ex:<br>
                                    https://google.com<br>
                                    http://www.ufg.br</small>
                                    
                                </td>
                            </tr>

                            <tr>
                                <th>Telefone para contato</th>
                                <td>
                                    <?php /*<textarea name="add_opcoes_layout[nomeOpcao]" id="add_opcoes_layout[nomeOpcao]" cols="50" rows="8"><?php if (!empty($options['nomeOpcao'])) { echo esc_textarea( $options['nomeOpcao'] ); } ?></textarea><br>*/ ?>
                                    <input type="text" name="add_opcoes_layout[tel_contato]" id="add_opcoes_layout[tel_contato]" value="<?php if (!empty($options['tel_contato'])) { esc_attr_e( $options['tel_contato'] ); } ?>" />
                                    
                                    
                                </td>
                            </tr>

                            <tr>
                                <th>E-mail para contato</th>
                                <td>
                                    <?php /*<textarea name="add_opcoes_layout[nomeOpcao]" id="add_opcoes_layout[nomeOpcao]" cols="50" rows="8"><?php if (!empty($options['nomeOpcao'])) { echo esc_textarea( $options['nomeOpcao'] ); } ?></textarea><br>*/ ?>
                                    <input type="text" name="add_opcoes_layout[email_contato]" id="add_opcoes_layout[email_contato]" value="<?php if (!empty($options['email_contato'])) { esc_attr_e( $options['email_contato'] ); } ?>" /> <br>
                                    
                                    
                                </td>
                            </tr>

                            
                            <tr><td colspan="2"><hr></td></tr>
                            <tr>
                                <td><input type="submit" value="Salvar" class="button button-primary button-large" /></td>
                                <td></td>
                            </tr>                    
                        </table>

                </form>  

    </div>
 
<?php } 
    // ========================================//
    // INICIO INTERFACE OPCOES 
    // ========================================// 
?>
