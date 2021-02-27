CKEDITOR.plugins.add( 'default', {
    icons: 'default',
    init: function( editor ) {
        editor.addCommand( 'inserdetaultLogo', {
            exec: function( editor ) {
                var now = new Date();
                editor.insertHtml( 'The current date and time is: <em>' + now.toString() + '</em>' );
            }
        });

        editor.ui.addButton( 'Default', {
            label: 'Insert defuatl logo',
            command: 'inserdetaultLogo',
            toolbar: 'insertar Logo por defecto'
        });
    }
});
