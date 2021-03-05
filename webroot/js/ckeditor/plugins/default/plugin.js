CKEDITOR.plugins.add( 'default', {
    icons: 'default',
    init: function( editor ) {
        editor.addCommand( 'insertDefault', {
            exec: function( editor ) {
                var now = new Date();
                editor.insertHtml( '<img src="https://w7.pngwing.com/pngs/608/842/png-transparent-logo-trading-company-organization-empresa-fruitwishes-international-corp-blue-company-text.png" ></img> ' ); //html logo   
            }
        });

        editor.ui.addButton( 'Default', {
            label: 'Insert defautl logo',
            command: 'insertDefault',
            toolbar: 'insert'
        });
    }
});
