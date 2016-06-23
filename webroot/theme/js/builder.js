$(document).ready(function() {
    //Init
    var drag_element_id = '';

    var count = 1;

    $('.addCol').mouseenter(function(){
        dragBloc($(this).attr('id'),$(this).attr('data-position'));
    });

    //Detect drop action and drop it in bloc container
    $('#blocs-container').droppable({
        over: function(event, ui) {
            drag_element_id = this.id;
        },
        out: function(event, ui) {
            drag_element_id = '';
        }
    });

    //Main function for drag action
    function dragBloc(id, p){

        //Init Some blank Variables
        var choice = '';
        var nombre_colonne = '';
        var cible ='';
        var blocks = '';
        var initBlock = '';
        var firstBlock = '';

        //begin the drag evenet using the #id of the block
        $('#'+id).draggable({
            start: function(event, ui) {
                $(event.target).css({'opacity': '0.5'});
            },
            helper:'clone',
            revert: true,
            revertDuration: 1,
            cursor: "move",

            stop: function(event, ui) {
                $(event.target).css({'opacity': '1'});
                if(drag_element_id != ''){

                    //Highlight the code generated
                    $('#renderCode').text( ( $('#renderCode').text() ) + $('#add-code-'+id).html() );
                    Prism.highlightElement( $('#renderCode')[0] );
                    //end highlight

                    alert($(this).attr('id'));
                    alert($(this).data('nombre-colonne'));

                    choice          = $(this).attr('data-choice');
                    nombre_colonne  = $(this).attr('data-nombre-colonne');

                    for (var i=1 ; i <= nombre_colonne; i++){

                        blocks = blocks +
                        '<div class="col-lg-'+12/nombre_colonne+'">' +
                            '<div id="bloc-'+ choice +'_'+i+'_'+count+'" class="main-box"  data-id="bloc-'+ choice +'_'+i+'_'+count+'" >' +
                            '<a class="btn btn-primary btn-xs add"> ' +
                            '<i class="fa fa-plus"></i>' +
                            '</a>' +
                            '</div>' +
                            '</div>';
                        count = count + 1;
                    }
                    initBlock       = '<div class="row">'+ blocks +'</div>';
                    firstBlock      = '<div class="'+$(this).attr('id')+'">'+ initBlock +'</div>';
                    alert(firstBlock);
                    $('.previewPlace').append(firstBlock);
                }
            }
        });
    }

});

function generateBloc(col, id, target){



    $('#'+target .row).each(function( index ) {
        //console.log( index + ": " + $( this ).text() );
        blocks = '<div class="col-lg-'+ 12/col +'">  <div id="module">module here</div>  </div>';
    });

    $('#'+target).html('<div class="row">  <div class="col-lg-'+ 12/col +'">  <div id="module">module here</div>  </div>  </div>');



}

//Trigger event click
$(document).on("click", ".add", function () {
    var myBlocId    = $(this).parents('.col').attr('id');
    var myCibleId   = $(this).parent().data('id');
    $(this).parent().attr('id', myCibleId);

    showModal(myBlocId, myCibleId);
});

function showModal(id, ci){
    myBlocId    = id;
    myCibleId   = ci;
    $('#'+myBlocId+' '+'#'+myCibleId).css( "background-color", "beige" );
    $('.addMod').attr('cible', myCibleId);
    alert(myCibleId);
    $('#myModal').modal();
}

//Trigger event click
$(document).on("click", ".addMod", function () {
    var recipient   = $(this).data('type');
    var moduleType  = $(this).data('title');
    var target      = $(this).attr('cible');

    alert(target);

    addBloc(recipient,moduleType, target);
});


function addBloc(recipient, moduleType, target){
    $('#'+target).html('<div id="'+ recipient +'"><div class="main-box-mod"><header class="main-box-header clearfix"><h2 class="pull-left">'+ moduleType +'</h2><div class="icon-box pull-right"><a class="btn btn-primary btn-xs pull-left" data-toggle="modal" href="#myModal'+ moduleType +'" ><i class="fa fa-cog"></i></a><a class="btn pull-left" id="removeMod"><i class="fa fa-times"></i></a></div></header></div></div>');
}