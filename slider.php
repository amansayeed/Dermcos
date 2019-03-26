<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"/>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

    <div class="carousel-inner">
                <div class="item">
                    <img src="http://placehold.it/1200x315" alt="...">
                    <div class="absolute-div">
                        <div class="carousel-caption">
                            <h3>What we Do</h3>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="http://placehold.it/1200x315" alt="...">
                    <div class="absolute-div">
                        <div class="carousel-caption">
                            <h3>What we Do</h3>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="http://placehold.it/1200x315" alt="...">
                    <div class="absolute-div">
                        <div class="carousel-caption">
                            <h3>What we Do</h3>
                        </div>
                    </div>
                </div>
           </div>
           <style >
             .carousel-caption {
    position: absolute;
    z-index: 1;
    display:table;
    width:100%;
    height:100%;
}

.absolute-div {
    position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
}

.carousel-caption h3 {
    display:table-cell;
    vertical-align: middle;
    text-align:center;
}

.item {
    position:relative;
}
           </style>