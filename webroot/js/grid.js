$(document).ready(function () {
            
    // prepare the data
    var source =
    {
        datatype: "json",
        datafields: [
            { name: 'asunto' },
            { name: 'nombre' , map: 'cobranza_notificacion_tipo>nombre'},
            { name: 'created' },
            { name: 'dia_notificacion', map: 'dia_notificacion' },
            
        ],
        id: 'id',
        localdata: url
        
    };
    var dataAdapter = new $.jqx.dataAdapter(source, {
       
        downloadComplete: function (data, status, xhr) { },
        loadComplete: function (data) { },
        loadError: function (xhr, status, error) { }
    });

    function changeLengajeDay(){
        
    }



    var  columnrender = function (value) {

        return '<a href="#" class="btn btn-danger" onclick="if (confirm(&quot;Are you sure you want to delete # 3?&quot;)) { document.post_6031b03faf905747311104.submit(); } event.returnValue = false; return false;">Delete</a>';}


    var cellrenderer = function (row, column, value) {


        var hello = "hello pass"
        return ` ${hello}; `
        
    }


    $("#jqxgrid").jqxGrid(
    {
        
        source: dataAdapter,
        width: "100%",
        showstatusbar: true,
        columns: [
          { text: 'asunto', datafield: 'asunto', width: 200 },
          { text: 'tipo', datafield: 'nombre', width: 200 },
          { text: 'created', datafield: 'created', width: 200 },
          { text: 'Dia Recordatorio', datafield: 'dia_notificacion', width: 200 },


          { text: 'Ver', 
            datafield: 'Ver', 
            columntype: 'button', 
            width: 100,
            
            cellsrenderer: function () {
                return "Ver";
            }, 
            buttonclick: function (row) {
        // open the popup window when the user clicks a button.
            editrow = row;
            var offset = $("#jqxgrid").offset();
            var dataRecord = $("#jqxgrid").jqxGrid('getrowdata', editrow);        
            }},


          { 
            text: 'Edit', 
            datafield: 'Edit', 
            columntype: 'button', 
            width: 100,
            cellsrenderer: function (value) {
                return '<button type=""  class="btn btn-default">'+ value +  '</button> ';
            }, 
            buttonclick: function (row) {
            // open the popup window when the user clicks a button.
                editrow = row;
                var offset = $("#jqxgrid").offset();
                var dataRecord = $("#jqxgrid").jqxGrid('getrowdata', editrow);
                alert(row);
            }
        },
        { 
            text: 'Eliminar', 
            datafield: 'Eliminar', 
            
            width: 100,

            cellsrenderer: cellrenderer,
            renderer: columnrender,
          
        }
       ]
    });


   
});