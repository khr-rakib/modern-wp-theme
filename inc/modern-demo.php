<?php
    function ocdi_import_files() {
        return array(
            array(
                'import_file_name'             => 'Modern Demo',
                'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/content.xml',
                'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo/widgets.wie',            
                
                'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'modern' ),            
            )            
        );
    }
    add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );