<?php include('header.php');?>

    <style>
    /* Cards FOR rides */
    .time, .status{
        display: inline-block;
    }

    .cardboxes{
        width: 100%;
        text-align: center;
        padding-top: 10px;
        background-color: rgba(255,255,255,0.29);
        margin: 20px 0px 20px 0px;
        border-radius: 0px;
        border: 2px solid #8D1B3D;
        box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.5);
    }

    .rowmarg{
        padding: 0px 10px 0px 10px;
    }

    .fortimeandbtn{
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
        padding-left: 20px;
        padding-right: 10px;
        margin-bottom: 20px;
    }

    .status, .time{
        font-size: 13px;
        font-weight: bold;
    }

    .status:before{
        font-family: "Font Awesome 5 Free"; 
        font-weight: 900; 
        content: "\f155";
        margin-right: 10px;
        font-size: 15px;
    }

    .ongoing{
        color: green;
    }

    .profilepic{
        height: 120px;
        width: 120px;
        border-radius: 50%;
    }

    .containerdemap{
        margin-top: 20px;
    }

    .nameandcar{
        background-color: #000;
        padding: 10px;
        text-align: left;
    }

    .theirsizesride{
        font-size: 25px;
    }

    .theirsizesride, .knowsride{
        color: #fff;
    }

    .theirsizesride{
        font-size: 16px;
    }

    .knowsride{
        font-size: 13px;
        width: 100%;
    }
    </style>

    <!-- About Us heading -->
    <div class="backgroundforabout">
        <div class="row">
            <div class="col-12 text-center">
                <div class="aboutusheadingcontainer">
                    <h1 class="aboutusheading">RIDE HISTORY</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="cardboxes">
                    <div class="fortimeandbtn">
                        <p class="time"><?php echo date('d-m-y');?>&nbsp;<?php echo date("H:i:s");?></p>
                        <p class="status">Ride Cost: <span class="ongoing">250 PKR</span></p>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-6">
                            <img src="assets/img/Simone_Graphic_Designer.jpeg" alt="#iconImage" class="profilepic" style="border: 0px !important;">
                        </div>
                        <div class="col-6">
                            <p class="nameofrider">Name: <br> <span class="font-weight-bold">Lorem D'souza</span></p>
                            <p class="joiningdate">Joining Date: <br> <span class="font-weight-bold">26 Jan 2019</span></p>
                        </div>
                    </div>
                    <div id="map-container-google-1" class="z-depth-1-half map-container containerdemap" style="height: 150px;">
                        <iframe src="https://maps.google.com/maps?q=doha&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            style="border:0 ;   height: 100%; width: 100%;" allowfullscreen></iframe>
                    </div>
                    <div class="nameandcar">
                       <div class="row rowmarg">
                            <div class="col-2 text-right"><i class="fas fa-car theirsizesride"></i></div>
                            <div class="col-10 text-left">
                                <p class="knowsride">Model: <span class="font-weight-bold">Toyota Prius</span> <br> Color: <span class="font-weight-bold">White</span> <br> License Plate: <span class="font-weight-bold">5FLXYZ</span></p>
                            </div>
                        </div>
                        <div class="row rowmarg">
                            <div class="col-2 text-right"><i class="fas fa-map-marker-alt theirsizesride"></i></div>
                            <div class="col-10 text-left">
                                <p class="knowsride">From <span class="font-weight-bold">North Nazimabad</span></p>
                            </div>
                        </div>
                        <div class="row rowmarg">
                            <div class="col-2 text-right"><i class="fas fa-route theirsizesride"></i></div>
                            <div class="col-10 text-left">
                                <p class="knowsride">To <span class="font-weight-bold">Site Area, Sadar</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="cardboxes">
                   <div class="fortimeandbtn">
                        <p class="time"><?php echo date('d-m-y');?>&nbsp;<?php echo date("H:i:s");?></p>
                        <p class="status">Ride Cost: <span class="ongoing">250 PKR</span></p>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-6">
                            <img src="assets/img/Simone_Graphic_Designer.jpeg" alt="#iconImage" class="profilepic" style="border: 0px !important;">
                        </div>
                        <div class="col-6">
                            <p class="nameofrider">Name: <br> <span class="font-weight-bold">Lorem D'souza</span></p>
                            <p class="joiningdate">Joining Date: <br> <span class="font-weight-bold">26 Jan 2019</span></p>
                        </div>
                    </div>
                    <div id="map-container-google-1" class="z-depth-1-half map-container containerdemap" style="height: 150px;">
                        <iframe src="https://maps.google.com/maps?q=doha&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            style="border:0 ;   height: 100%; width: 100%;" allowfullscreen></iframe>
                    </div>
                    <div class="nameandcar">
                        <div class="row rowmarg">
                            <div class="col-2 text-right"><i class="fas fa-car theirsizesride"></i></div>
                            <div class="col-10 text-left">
                                <p class="knowsride">Model: <span class="font-weight-bold">Toyota Prius</span> <br> Color: <span class="font-weight-bold">White</span> <br> License Plate: <span class="font-weight-bold">5FLXYZ</span></p>
                            </div>
                        </div>
                        <div class="row rowmarg">
                            <div class="col-2 text-right"><i class="fas fa-map-marker-alt theirsizesride"></i></div>
                            <div class="col-10 text-left">
                                <p class="knowsride">From <span class="font-weight-bold">North Nazimabad</span></p>
                            </div>
                        </div>
                        <div class="row rowmarg">
                            <div class="col-2 text-right"><i class="fas fa-route theirsizesride"></i></div>
                            <div class="col-10 text-left">
                                <p class="knowsride">To <span class="font-weight-bold">Site Area, Sadar</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="cardboxes">
                    <div class="fortimeandbtn">
                        <p class="time"><?php echo date('d-m-y');?>&nbsp;<?php echo date("H:i:s");?></p>
                        <p class="status">Ride Cost: <span class="ongoing">250 PKR</span></p>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-6">
                            <img src="assets/img/Simone_Graphic_Designer.jpeg" alt="#iconImage" class="profilepic" style="border: 0px !important;">
                        </div>
                        <div class="col-6">
                            <p class="nameofrider">Name: <br> <span class="font-weight-bold">Lorem D'souza</span></p>
                            <p class="joiningdate">Joining Date: <br> <span class="font-weight-bold">26 Jan 2019</span></p>
                        </div>
                    </div>
                    <div id="map-container-google-1" class="z-depth-1-half map-container containerdemap" style="height: 150px;">
                        <iframe src="https://maps.google.com/maps?q=doha&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            style="border:0 ;   height: 100%; width: 100%;" allowfullscreen></iframe>
                    </div>
                    <div class="nameandcar">
                        <div class="row rowmarg">
                            <div class="col-2 text-right"><i class="fas fa-car theirsizesride"></i></div>
                            <div class="col-10 text-left">
                                <p class="knowsride">Model: <span class="font-weight-bold">Toyota Prius</span> <br> Color: <span class="font-weight-bold">White</span> <br> License Plate: <span class="font-weight-bold">5FLXYZ</span></p>
                            </div>
                        </div>
                        <div class="row rowmarg">
                            <div class="col-2 text-right"><i class="fas fa-map-marker-alt theirsizesride"></i></div>
                            <div class="col-10 text-left">
                                <p class="knowsride">From <span class="font-weight-bold">North Nazimabad</span></p>
                            </div>
                        </div>
                        <div class="row rowmarg">
                            <div class="col-2 text-right"><i class="fas fa-route theirsizesride"></i></div>
                            <div class="col-10 text-left">
                                <p class="knowsride">To <span class="font-weight-bold">Site Area, Sadar</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php');?>