
<style type="text/css">

    .builder_height_bloc{
        height: 50px;
        opacity: 0.5;
    }
    .preview_height_bloc{
        height: 80px;
        /*padding-top: 23px;*/
    }
    .preview_height_bloc .add{
        margin-top: 23px;
    }
    .builder_height_module{
        height: 90px;
    }
    .builder_height_module .value{
        margin-top: 5px;
        font-size: 10px;
    }
    .infographic-box {
        padding: 21px;
    }

    .main-box-mod{
        margin-top: 10px;
    }
    .main-box-mod h2{
        margin-top: 7px;
    }
    .addMod{
        border-bottom: none;
        padding: 6px 0px;
    }
    .modalMod .main-box .main-box-header {
        padding: 10px 10px;
    }

</style>

<!--Display all Modules-->
<div class="modal fade" id="myModal" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Choix des modules</h4>
            </div>
            <div class="modal-body">
                <div class="show-grid clearfix">
                    <div class="clearfix modalMod">

                        <div class="row">

                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box clearfix">
                                    <header class="main-box-header clearfix">
                                        <a data-toggle="modal" href="#" class="addMod btn" data-dismiss="modal" data-title="Text" data-type="addMod-text">
                                            <h2><i class="fa fa-file-text-o"></i> Text</h2>
                                        </a>
                                    </header>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box clearfix">
                                    <header class="main-box-header clearfix">
                                        <a data-toggle="modal" href="#" class="addMod btn" data-dismiss="modal" data-title="Accordion" data-type="addMod-accordion">
                                            <h2><i class="fa fa-bars"></i> Accordion</h2>
                                        </a>
                                    </header>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box clearfix">
                                    <header class="main-box-header clearfix">
                                        <a data-toggle="modal" href="#" class="addMod btn" data-dismiss="modal" data-title="Onglet" data-type="addMod-onglet">
                                            <h2><i class="fa fa-calendar-o"></i> Onglet</h2>
                                        </a>
                                    </header>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box clearfix">
                                    <header class="main-box-header clearfix">
                                        <a data-toggle="modal" href="#" class="addMod btn" data-dismiss="modal" data-title="Image" data-type="addMod-image">
                                            <h2><i class="fa fa-file-image-o"></i> Image</h2>
                                        </a>
                                    </header>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box clearfix">
                                    <header class="main-box-header clearfix">
                                        <a data-toggle="modal" href="#" class="addMod btn" data-dismiss="modal" data-title="Vidéo" data-type="addMod-video">
                                            <h2><i class="fa fa-youtube"></i> Vidéo</h2>
                                        </a>
                                    </header>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box clearfix">
                                    <header class="main-box-header clearfix">
                                        <a data-toggle="modal" href="#" class="addMod btn" data-dismiss="modal" data-title="Social" data-type="addMod-social">
                                            <h2><i class="fa fa-facebook"></i> Social</h2>
                                        </a>
                                    </header>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box clearfix">
                                    <header class="main-box-header clearfix">
                                        <a data-toggle="modal" href="#" class="addMod btn" data-dismiss="modal" data-title="Map" data-type="addMod-map">
                                            <h2><i class="fa fa-map-marker"></i> Map</h2>
                                        </a>
                                    </header>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box clearfix">
                                    <header class="main-box-header clearfix">
                                        <a data-toggle="modal" href="#" class="addMod btn" data-dismiss="modal" data-title="Carousel" data-type="addMod-carousel">
                                            <h2><i class="fa fa-caret-square-o-right"></i> Carousel</h2>
                                        </a>
                                    </header>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Text Module-->
<div class="modal fade" id="myModalText" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Text Module</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titre</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Votre titre">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">Contenu</label>
                        <textarea class="form-control ckeditor" id="exampleTextarea" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<!--Image Module-->
<div class="modal fade" id="myModalImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Image</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="InputImageUrl">URL</label>
                        <input name="imageURL" type="text" class="form-control" id="InputImageUrl" placeholder="Lien de l'image">
                    </div>
                    <div class="form-group">
                        <label for="InputImageAlt">Alt</label>
                        <input name="imageAlt" type="text" class="form-control" id="InputImageAlt" placeholder="Text Alternative">
                    </div>
                    <div class="form-group">
                        <label for="InputImageLink">Lien</label>
                        <input name="imageLink" type="text" class="form-control" id="InputImageLink" placeholder="Lien lors de clique sur l'image">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<!--Vidéo Module-->
<div class="modal fade" id="myModalVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Vidéo</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titre</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Titre">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Lien de la vidéo</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Url de la vidéo">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<!--Map Module-->
<div class="modal fade" id="myModalMap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Map</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titre</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Titre">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Code de géolocation</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Code de géolocalisation">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<!--Social Module-->
<div class="modal fade" id="myModalSocial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Social</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom du réseau</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nom">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Url du réseau</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Url du réseau">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<!--Onglet Module-->
<div class="modal fade" id="myModalOnglet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Onglet</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titre</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Titre">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Contenu</label>
                        <textarea class="form-control ckeditor" id="exampleTextarea" rows="3"></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<!--Accordion Module-->
<div class="modal fade" id="myModalAccordion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Accordion</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titre</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Titre">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Contenu</label>
                        <textarea class="form-control ckeditor" id="exampleTextarea" rows="3"></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<!--Carousel Module-->
<div class="modal fade" id="myModalCarousel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Carousel</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titre</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Titre">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Contenu</label>
                        <textarea class="form-control ckeditor" id="exampleTextarea" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Lien lors de clique sur l'image">
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <h1>Builder (Beta)</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-12">

                <div class="main-box show-grid clearfix"  style="
                      font-family: 'Open Sans', sans-serif;
                      color: #777777;
                      background-color: #dddddd;
                      background-image: url('http://subtlepatterns.com/patterns/geometry.png');
                      background-attachment: fixed;
                      line-height: 18px;
                      -webkit-font-smoothing: antialiased;">
                    <div class="main-box-body clearfix">
                        <br><br>
                        <div class="previewBloc">
                            <h1><i class="fa fa-cubes"></i> Preview</h1>
                            <p>Drag Something</p>

                            <div class="previewPlace" id="blocs-container" style="min-height: 100px;padding: 10px;">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-box show-grid clearfix"  style="
                  font-family: 'Open Sans', sans-serif;
                  color: #777777;
                  background-color: #0b0b0b;
                  background-image: url('http://subtlepatterns.com/patterns/binding_dark.png');
                  background-attachment: fixed;
                  line-height: 18px;
                  -webkit-font-smoothing: antialiased;">
                    <div class="main-box-body clearfix">
                        <br><br>
                        <div class="renderBloc">
                            <h1><i class="fa fa-code"></i> Render</h1>
                            <p>Code generate</p>


<pre class="language-markup">
<code id="renderCode" class="language-markup">

</code>
</pre>



                        </div>

                    </div>
                </div>




            </div>
        </div>

    </div>
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box show-grid clearfix">
                    <div class="main-box-body clearfix" id="dragElem">
                        <br>
                        <h2>Choix des colonnes</h2>
                        <br>
                        <div class="row addCol" id="b4" data-type="12" data-col="1" data-id="c">
                            <div class="col-lg-12 col-sm-12 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">4/4</span>
                                </div>
                            </div>
                        </div>
                        <div class="row addCol" id="b1-1-1-1" data-type="3" data-col="4" data-id="c">
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">1/4</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">1/4</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">1/4</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">1/4</span>
                                </div>
                            </div>
                        </div>
                        <div class="row addCol" id="b2-2"  data-type="6" data-col="2" data-id="c">
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">2/4</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">2/4</span>
                                </div>
                            </div>
                        </div>
                        <div class="row addCol" id="b1-3" data-type="6" data-col="2" data-id="c">
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">1/4</span>
                                </div>
                            </div>
                            <div class="col-lg-9 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">3/4</span>
                                </div>
                            </div>
                        </div>
                        <div class="row addCol" id="b3-1">
                            <div class="col-lg-9 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">3/4</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">1/4</span>
                                </div>
                            </div>
                        </div>
                        <div class="row addCol" id="b1-2-1">
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">1/4</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">2/4</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">1/4</span>
                                </div>
                            </div>
                        </div>
                        <div class="row addCol" id="b1-1-1">
                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">1/3</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">1/3</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">1/3</span>
                                </div>
                            </div>

                        </div>
                        <div class="row addCol" id="b1-1-2">
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">1/4</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">1/4</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">2/4</span>
                                </div>
                            </div>
                        </div>
                        <div class="row addCol" id="b2-1-1">
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">2/4</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">1/4</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <div class="main-box infographic-box colored blue-bg builder_height_bloc">
                                    <span class="headline">1/4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="hideme" style="display: none;">

<!-- colonne 4/4 -->
<div id="col-b4" class="col" data-choice="b4" data-nombre-colonne="1">
    <!-- colonne 4/4 -->
    <div class="row">
        <div class="col-lg-12">
            <div id="bloc-b4" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a class="btn btn-primary btn-xs add"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- colonne 1/4 1/4 1/4 1/4 -->
<div id="col-b1-1-1-1"  class="col" data-choice="b1-1-1-1" data-nombre-colonne="4">
    <!-- colonne 1/4 1/4 1/4 1/4 -->
    <div class="row">
        <div class="col-lg-3">
            <div id="bloc-b1-1-1-1_1" data-id="bloc-b1-1-1-1_1" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a class="btn btn-primary btn-xs add"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="col-lg-3">
            <div id="bloc-b1-1-1-1_2" data-id="bloc-b1-1-1-1_2" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a class="btn btn-primary btn-xs add"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="col-lg-3">
            <div id="bloc-b1-1-1-1_3" data-id="bloc-b1-1-1-1_3" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a class="btn btn-primary btn-xs add"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="col-lg-3">
            <div id="bloc-b1-1-1-1_4" data-id="bloc-b1-1-1-1_4" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a class="btn btn-primary btn-xs add"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- colonne 2/4 2/4 -->
<div id="col-b2-2"  class="col" data-choice="b2-2" data-nombre-colonne="2">
    <!-- colonne 2/4 2/4 -->
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div id="bloc-b2-2_1" data-id="bloc-b2-2_1" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a class="btn btn-primary btn-xs add"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div id="bloc-b2-2_2" data-id="bloc-b2-2_2" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a class="btn btn-primary btn-xs add"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- colonne 1/4 3/4 -->
<div id="col-b1-3" class="col" data-choice="b1-3" data-nombre-colonne="2">
    <!-- colonne 1/4 3/4 -->
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div id="bloc-b1-3_1" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs add add-b1-3" data-choice="b1-3" data-nombre-colonne="1"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="col-lg-9 col-sm-6 col-xs-12">
            <div id="bloc-b1-3_2" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs add add-b1-3" data-choice="b1-3" data-nombre-colonne="2"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- colonne 3/4 1/4 -->
<div id="col-b3-1" class="col" data-choice="b3-1" data-nombre-colonne="2">
    <!-- colonne 3/4 1/4 -->
    <div class="row">
        <div class="col-lg-9 col-sm-6 col-xs-12">
            <div id="bloc-b3-1_1" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs add add-b3-1" data-choice="b3-1" data-nombre-colonne="1"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div id="bloc-b3-1_2" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs add add-b3-1" data-choice="b3-1" data-nombre-colonne="2"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- colonne 1/4 2/4 1/4 -->
<div id="col-b1-2-1" class="col" data-choice="b1-2-1" data-nombre-colonne="3">
    <!-- colonne 1/4 2/4 1/4 -->
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div id="bloc-b1-2-1_1" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs add add-b1-2-1" data-choice="b1-2-1" data-nombre-colonne="1"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div id="bloc-b1-2-1_2" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs add add-b1-2-1" data-choice="b1-2-1" data-nombre-colonne="2"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div id="bloc-b1-2-1_3" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs add add-b1-2-1" data-choice="b1-2-1" data-nombre-colonne="3"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- colonne 1/3 1/3 1/3 -->
<div id="col-b1-1-1" class="col" data-choice="b1-1-1" data-nombre-colonne="3">
    <!-- colonne 1/3 1/3 1/3 -->
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div id="bloc-b1-1-1_1" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs add add-b1-1-1" data-choice="b1-1-1" data-nombre-colonne="1"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div id="bloc-b1-1-1_2" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs add add-b1-1-1" data-choice="b1-1-1" data-nombre-colonne="2"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div id="bloc-b1-1-1_3" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs add add-b1-1-1" data-choice="b1-1-1" data-nombre-colonne="3"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- colonne 1/4 1/4 2/4 -->
<div id="col-b1-1-2" class="col" data-choice="b1-1-2" data-nombre-colonne="3">
    <!-- colonne 1/4 1/4 2/4 -->
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div id="bloc-b1-1-2_1" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs add add-b1-1-2" data-choice="b1-1-2" data-nombre-colonne="1"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div id="bloc-b1-1-2_2" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs add add-b1-1-2" data-choice="b1-1-2" data-nombre-colonne="2"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div id="bloc-b1-1-2_3" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs add add-b1-1-2" data-choice="b1-1-2" data-nombre-colonne="3"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- colonne 2/4 1/4 1/4 -->
<div id="col-b2-1-1" class="col" data-choice="b2-1-1" data-nombre-colonne="3">
    <!-- colonne 2/4 1/4 1/4 -->
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div id="bloc-b2-1-1_1" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-x add add-b2-1-1" data-choice="b2-1-1" data-nombre-colonne="1"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div id="bloc-b2-1-1_2" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs add add-b2-1-1" data-choice="b2-1-1" data-nombre-colonne="2"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div id="bloc-b2-1-1_3" class="main-box preview_height_bloc profile-message-btn center-block text-center">
                <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-xs add add-b2-1-1" data-choice="b2-1-1" data-nombre-colonne="3"> <i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
</div>







<!--Add Preview code-->

    <!-- colonne 4/4 -->
    <div id="add-code-b4">
        <!-- colonne 4/4 -->
        <div class="row">
            <div class="col-lg-12">
                <div id="module">
                    module here
                </div>
            </div>
        </div>
    </div>

    <!-- colonne 1/4 1/4 1/4 1/4 -->
    <div id="add-code-b1-1-1-1">
        <!-- colonne 1/4 1/4 1/4 1/4 -->
        <div class="row">
            <div class="col-lg-3">
                <div id="module">
                    module here
                </div>
            </div>
            <div class="col-lg-3">
                <div id="module">
                    module here
                </div>
            </div>
            <div class="col-lg-3">
                <div id="module">
                    module here
                </div>
            </div>
            <div class="col-lg-3">
                <div id="module">
                    module here
                </div>
            </div>
        </div>
    </div>

    <!-- colonne 2/4 2/4 -->
    <div id="add-code-b2-2">
        <!-- colonne 2/4 2/4 -->
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
        </div>
    </div>

    <!-- colonne 1/4 3/4 -->
    <div id="add-code-b1-3">
        <!-- colonne 1/4 3/4 -->
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
            <div class="col-lg-9 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
        </div>
    </div>

    <!-- colonne 3/4 1/4 -->
    <div id="add-code-b3-1">
        <!-- colonne 3/4 1/4 -->
        <div class="row">
            <div class="col-lg-9 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
        </div>
    </div>

    <!-- colonne 1/4 2/4 1/4 -->
    <div id="add-code-b1-2-1">
        <!-- colonne 1/4 2/4 1/4 -->
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
        </div>
    </div>

    <!-- colonne 1/3 1/3 1/3 -->
    <div id="add-code-b1-1-1">
        <!-- colonne 1/3 1/3 1/3 -->
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
        </div>
    </div>

    <!-- colonne 1/4 1/4 2/4 -->
    <div id="add-code-b1-1-2">
        <!-- colonne 1/4 1/4 2/4 -->
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
        </div>
    </div>

    <!-- colonne 2/4 1/4 1/4 -->
    <div id="add-code-b2-1-1">
        <!-- colonne 2/4 1/4 1/4 -->
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12">
                < <div id="module">
                    module here
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div id="module">
                    module here
                </div>
            </div>
        </div>
    </div>





</div>
