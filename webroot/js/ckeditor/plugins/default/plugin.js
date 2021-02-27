CKEDITOR.plugins.add( 'default', {
    icons: 'default',
    init: function( editor ) {
        editor.addCommand( 'insertDefault', {
            exec: function( editor ) {
                var now = new Date();
                editor.insertHtml( '<img src="/img/logoempresa.png" ></img> ' );  
            }
        });

        editor.ui.addButton( 'Default', {
            label: 'Insert defautl logo',
            command: 'insertDefault',
            toolbar: 'insert'
        });
    }
});
