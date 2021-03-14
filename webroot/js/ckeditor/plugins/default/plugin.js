CKEDITOR.plugins.add( 'default', {
    icons: 'default',
    init: function( editor ) {
        editor.addCommand( 'insertDefault', {
            exec: function( editor ) {
                var now = new Date();
                var url = window.location.href
                editor.insertHtml( '<img src="' + editor.config.customValues.logo + '" ></img> ' ); //tiene que cambiar por el logo correspondiente  
                
            }
        });

        editor.ui.addButton( 'Default', {
            label: 'Insert defautl logo',
            command: 'insertDefault',
            toolbar: 'insert'
        });
    }
});
