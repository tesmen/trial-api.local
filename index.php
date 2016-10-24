<meta charset="utf-8">

<script src="jquery-3.1.0.min.js"></script>
<script src="bootstrap.js"></script>
<script src="common-ui.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="style.css"/>

<div class="container">
    <div class="services col-md-12">
        <a class="item">Объявления</a>
        <a class="item">Помощь</a>
    </div>

    <div class="col-xs-12 hidden-xs v-header">
        <div class="col-xs-4 hidden-xs v-logo">v-logo</div>
        <div class="col-xs-4 hidden-xs v-about">v-about</div>
        <div class="col-xs-4 hidden-xs v-user-bar">v-user-bar</div>
    </div>

    <div class="spacer-25 col-xs-12"></div>

    <div class="row">
        <div class="col-xs-3 dropdown hidden-xs">
            <button type="button" class="col-xs-12 btn btn-default btn-md catalog-menu-button" data-toggle="dropdown">
                <span class="pull-left">Catalog</span>

                <span class="glyphicon glyphicon-th-list pull-right"></span>
            </button>

            <div class="list-group dropdown-menu unbound-list-group catalog-menu">
                <a href="#" class="list-group-item unclickable-dropdown-item" data-label-for="menu1">Unclickable-dropdown-item</a>
                <a href="#" class="list-group-item unclickable-dropdown-item" data-label-for="menu2">Unclickable-dropdown-item
                    2 </a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Vestibulum at eros</a>

                <div class="list-group catalog-submenu unbound-list-group display-none" id="menu1">
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>

                <div class="list-group catalog-submenu unbound-list-group display-none" id="menu2">
                    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item">Morbi leo risus</a>
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>
            </div>


        </div>

        <div class="spacer-25 col-xs-12"></div>

        <div class="col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
        </div>
    </div>

    <div class="col-sm-3">
        left bar
    </div>

    <div class="col-xs-9">
        <div class="row advert-list-item">
            <div class="col-md-2 col-xs-4" href="#">
                <img src="no_photo.png" class="img-thumbnail advert-photo">

            </div>

            <div class="col-md-7 col-xs-4 v-advert-info">
                <div class="clip">
                    <a class="title" href="#">Dapibus ac facilisis in</a>
                </div>

                <div class="clip">
                    <span class="description text-gray" href="#">Dapibus ac facilisis in Vestibulum at erosDapibus ac facilisis in Vestibulum at erosDapibus ac facilisis in Vestibulum at eros</span>
                </div>

            </div>

            <div class="col-md-3 col-xs-4 v-advert-info">
                <span class="price one-half-rem">13 990 руб.</span>
            </div>
        </div>
    </div>
</div>
