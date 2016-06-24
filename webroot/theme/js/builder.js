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
        var blocks = '';
        var cleanBlocks = '';
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

                    choice          = $(this).attr('data-choice');
                    nombre_colonne  = $(this).attr('data-nombre-colonne');
                    var size = 0;

                    $(this).find("div.colomn").each(function(i){
                        size = $(this).attr('data-size');
                        blocks = blocks +
                            '<div class="col-lg-'+size+'">' +
                            '<div id="bloc-'+ choice +'_'+i+'_'+count+'" class="main-box"  data-id="bloc-'+ choice +'_'+i+'_'+count+'" >' +
                            '<a class="btn btn-primary btn-xs add"> ' +
                            '<i class="fa fa-plus"></i>' +
                            '</a>' +
                            '</div>' +
                            '</div>';


                        cleanBlocks = cleanBlocks +
                            '<div class="col-lg-'+size+'" id="module">' +
                            '</div>';

                        count = count + 1;
                    });
                    initBlock       = '<div class="row">'+ blocks +'</div>';
                    firstBlock      = '<div class="'+$(this).attr('id')+'">'+ initBlock +'</div>';

                    initCleanBlocks  = '<div class="row">'+ cleanBlocks +'</div>';

                    $('.previewPlace').append(firstBlock);


                    //Highlight the code generated
                    $('#renderCode').text( ( $('#renderCode').text() ) + initCleanBlocks );
                    Prism.highlightElement( $('#renderCode')[0] );
                    //end highlight

                }
            }
        });
    }
});


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
    $('#myModal').modal();
}

//Trigger event click
$(document).on("click", ".addMod", function () {
    var recipient   = $(this).data('type');
    var moduleType  = $(this).data('title');
    var target      = $(this).attr('cible');
    addBloc(recipient,moduleType, target);
});

function addBloc(recipient, moduleType, target){
    $('#'+target).html('<div id="'+ recipient +'"><div class="main-box-mod"><header class="main-box-header clearfix"><h2 class="pull-left">'+ moduleType +'</h2><div class="icon-box pull-right"><a class="btn btn-primary btn-xs pull-left" data-toggle="modal" href="#myModal'+ moduleType +'" ><i class="fa fa-cog"></i></a><a class="btn pull-left" id="removeMod"><i class="fa fa-times"></i></a></div></header></div></div>');
}