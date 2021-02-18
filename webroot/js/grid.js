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
            cellsrenderer: function () {
                return "Editar";
            }, 
            buttonclick: function (row) {
            // open the popup window when the user clicks a button.
                editrow = row;
                var offset = $("#jqxgrid").offset();
                var dataRecord = $("#jqxgrid").jqxGrid('getrowdata', editrow);


               


            // $("#popupWindow").jqxWindow({ position: { x: parseInt(offset.left) + 60, y: parseInt(offset.top) + 60 } });

            // // get the clicked row's data and initialize the input fields.
            // var dataRecord = $("#grid").jqxGrid('getrowdata', editrow);
            // $("#firstName").val(dataRecord.firstname);
            // $("#lastName").val(dataRecord.lastname);
            // $("#product").val(dataRecord.productname);
            // $("#quantity").jqxNumberInput({ decimal: dataRecord.quantity });
            // $("#price").jqxNumberInput({ decimal: dataRecord.price });

            // // show the popup window.
            // $("#popupWindow").jqxWindow('open');
        }
        },
        { 
            text: 'Eliminar', 
            datafield: 'Eliminar', 
            columntype: 'button', 
            width: 100,
            cellsrenderer: function () {
                return "Eliminar";
            }, 
            buttonclick: function (row) {
                
                editrow = row;
                var offset = $("#jqxgrid").offset();
                var dataRecord = $("#jqxgrid").jqxGrid('getrowdata', editrow);

                console.log(dataRecord);
                var data = dataRecord.uid;

                console.log(data);

                $.ajax({
                    url: '/cobranza-notificacion-configuraciones/delete/5',
                    type: 'POST',
                    dataType: 'json',
                    contentType: 'json',
                    success: function(result) {
                        // Do something with the result
                        alert('this was deleted');
                    }

                    
                });
                
              
                
      
            }
        }
       ]
    });


   
});