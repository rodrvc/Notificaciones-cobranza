$(document).ready(function () {


    
    // prepare the data
    var source =
    {
        datatype: "json",
        datafields: [
            { name: 'asunto' },
            { name: 'nombre' , map: 'cobranza_notificacion_tipo>nombre'},
            { name: 'created' ,  type: 'date' },
            { name: 'dia_notificacion', map: 'dia_notificacion' },
            
        ],
        id: 'id',
        localdata: url,
        deleterow: function (rowid, commit) {
         
            var data = rowid ;
            var url = window.location.href;
            
            $.ajax({
                method: "post",
                data:data, 
                cache: false,
                url: url + "/delete/" + data,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', csrfToken);
                },
                success: function (data, status, xhr) {
                    // delete command is executed.
                    console.log(data, status, xhr);
                    commit(true);
                    var gridData = data;
                    
                },  
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR, textStatus, errorThrown);
                    commit(false);         
                },
                
            }).done(function(){ 
                location.reload();
               
            });
    
           
        },
        
    };
    var dataAdapter = new $.jqx.dataAdapter(source, {

        
       
        downloadComplete: function (data, status, xhr) {   
          },
        loadComplete: function (data) { },
        loadError: function (xhr, status, error) { }
    });

    dataAdapter.dataBind();

    
    
    //RENDER BUTTONS
    var cellrenderer = function (row, column, value) {
        
        var dataRecord = $("#jqxgrid").jqxGrid('getrowdata', row);
        var modal = `#myModal` + dataRecord.uid; 
        var url = window.location.href;

       
        return `<div class="grid-div-buttons" >` + 
                    '<a href="' + modal + '" class="btn btn-primary" data-toggle="modal" > Ver </a>' + 
                    '<a href="' + url + '/edit/'+ dataRecord.uid + '" class="btn btn-primary ">Editar</a>' + 
                    "<button id='deleterowbutton' class='deleterowbutton btn btn-danger'  value='Delete Selected Row' >borrar</button>" + 
               `</div>`
    }
    
    
    
    
    
    $("#jqxgrid").jqxGrid(
    {
       

        source: dataAdapter,
        width: "100%",
        autorowheight: true,
        autoheight: true,
        showstatusbar: true,
        columns: [
          { text: 'asunto', datafield: 'asunto', width: 200 },
          { text: 'tipo', datafield: 'nombre', width: 200 },
          { text: 'creado', datafield: 'created', cellsformat: 'dd/MM/yyyy'},
          { text: 'Dia Recordatorio', datafield: 'dia_notificacion', width: 200, 
            
            cellsalign: 'center', align: 'center',
            cellsrenderer: function (row){
                var dataRecord = $("#jqxgrid").jqxGrid('getrowdata', row);
                var traduccionDia = ""; 
            
                switch (dataRecord.dia_notificacion) {
                    case "1":
                        traduccionDia =  'Lunes';                        
                        break;
                    case "2":
                        traduccionDia =  "Martes"
                        break; 
                    case "3":
                        traduccionDia = "Miercoles"
                        break; 
                    case "4":
                        traduccionDia =  "Jueves"
                        break; 
                    case "5":
                        traduccionDia =  "Viernes"
                        break; 
                    case "6": 
                        traduccionDia =  "Sabado"
                        break; 
                    case "0": 
                        traduccionDia=  "Domingo";
                        break; 
                    default:
                        break;
                }

                return "<div class='text-grid'><div style='flex: 0 0 120px;' >" + traduccionDia + "</div></div>"
            }
           
          },
          { 
            text: 'Acciones', 
            datafield: 'Acciones', 
            height: 150,
            width: 220,
            cellsrenderer: cellrenderer,
            cellsalign: 'center', align: 'center'
           }, 
       ]
    });
   
    // $(".deleterowbutton").jqxButton();
        
    $(".deleterowbutton").jqxButton();

    $(".deleterowbutton").on('click' ,  function (e) {
       
        var selectedrowindex = $("#jqxgrid").jqxGrid('getselectedrowindex');
        console.log("delete?")
        var rowscount = $("#jqxgrid").jqxGrid('getdatainformation').rowscount;
        if (selectedrowindex >= 0 && selectedrowindex < rowscount) {
            var id = $("#jqxgrid").jqxGrid('getrowid', selectedrowindex);
            var dataRecord = $("#jqxgrid").jqxGrid('getrowdata', selectedrowindex);
            if (confirm(`Esta seguro que desea eliminar el notificacion asunto: ${dataRecord.asunto}?`)) { 
                $("#jqxgrid").jqxGrid('deleterow', id);
                
             
                return event.returnValue = false; 
             } event.returnValue = false; return false;
        }
    });


    

   

    
    //MODAL AJAX LOAD
    
    $body = $("body");
    
    $(document).on({
        ajaxStart: function() { $body.addClass("loading");    },
        //ajaxStop: function() { $body.removeClass("loading"); }    
    });
    
  
    
    });

  

