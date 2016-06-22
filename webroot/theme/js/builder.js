/**
 * Created by Nabil on 12/06/15.
 */

$(document).ready(function() {

    $('#email-list li > .star > a').on('click', function() {
        $(this).toggleClass('starred');
    });


    $(".clickable-row > div:not(.chbox,.star)").click(function(e) {
        if ((e.target instanceof HTMLAnchorElement) == true) {
            return;
        }
        var href = $(this).parent().data('href');
        if (href != '' && typeof href != 'undefined') {
            window.document.location = href;
        }
    });


    /*
    *
    * DRAG SYSTEME GENIUS HOLDING
    *
    */



    //Init
    var drag_element_id = '';

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

                    //nombre of drag event
                    var n = $('.previewPlace .col').length +1;

                    //Genarate unique ID and clone then append to preview
                    var temp = $('#col-'+id).clone();
                    temp.attr('id', temp.attr('id')+'_'+n);
                    temp.find('.main-box').attr('id', 'bloc-'+this.id+'_'+n);
                    temp.attr('data-id', temp.attr('id'));
                    choice = temp.attr('data-choice');
                    nombre_colonne = temp.attr('data-nombre-colonne');
                    cible = choice+'_'+nombre_colonne+'_'+n;
                    $('.previewPlace').append(temp);
                }
            }
        });
    }


    /*
     End Drag and display code on prism
     */

});

//Trigger event click
$(document).on("click", ".add", function () {
    var myBlocId    = $(this).parents('.col').attr('id');
    var myCibleId   = $(this).parent().attr('id');
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