
$(document).ready(function() {
    $('.addCol').click(function(event) {
        clickBloc($(this).attr('id'));
    });
});
$(document).on("click", ".add", function () {
    var myBlocId    = $(this).parents('.col').attr('id');
    var myCibleId   = $(this).parent().data('id');
    $(this).parent().attr('id', myCibleId);
    showModal(myBlocId, myCibleId);
});
$(document).on("click", ".addcolomn", function () {
    $('#myModalColomn').modal();

});
$(document).on("click", ".addMod", function () {
    var recipient   = $(this).data('type');
    var moduleType  = $(this).data('title');
    var target      = $(this).attr('cible');
    addBloc(recipient,moduleType, target);
});
function clickBloc(id){
    var count = 1;
    var blocks = '';
    var cleanBlocks = '';

    $('#myModalColomn').modal('hide');
    var choice          = $(this).attr('data-choice');
    var size = 0;

    $('#'+id).find("div.colomn").each(function(i){
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
    var initBlock       = '<div class="row">'+ blocks +'</div>';
    var firstBlock      = '<div class="'+$('#'+id)+'">'+ initBlock +'</div>';
    var initCleanBlocks  = '<div class="row">'+ cleanBlocks +'</div>';

    $('.previewPlace').append(firstBlock);
    $('#renderCode').text( ( $('#renderCode').text() ) + initCleanBlocks );
    Prism.highlightElement( $('#renderCode')[0] );

}
function showModal(id, ci){
    myBlocId    = id;
    myCibleId   = ci;
    $('#'+myBlocId+' '+'#'+myCibleId).css( "background-color", "beige" );
    $('.addMod').attr('cible', myCibleId);
    $('#myModal').modal();
}
function addBloc(recipient, moduleType, target){
    $('#'+target).html('<div id="'+ recipient +'"><div class="main-box-mod"><header class="main-box-header clearfix"><h2 class="pull-left">'+ moduleType +'</h2><div class="icon-box pull-right"><a class="btn btn-primary btn-xs pull-left" data-toggle="modal" href="#myModal'+ moduleType +'" ><i class="fa fa-cog"></i></a><a class="btn pull-left" id="removeMod"><i class="fa fa-times"></i></a></div></header></div></div>');
}