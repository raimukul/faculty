<div class="jumbotron pt-3 mb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <img class="img-thumbnail profile-image mx-auto d-block rounded" width="200" style="max-height: 280px;" src="images/<?php echo $row['image']; ?>" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="row header-profile head-title text-left">
                            <div class="col-12 ">
                                <h1 class="text-capitalize" style="color: #49B5AF; font-size: 40px;"><?php echo $row['name']; ?></h1>
                            </div>
                            <div class="col-12 text-left head-title">
                                <br>
                               <h4 class="text-capitalize"><?php echo $row['position']; ?></h4>
                                <h6 class="text-capitalize"><?php echo $row['qualification']; ?></h6>
                                <h6 class="text-capitalize"><?php echo $row['field_of_teaching']; ?></h6>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gbulogoonpage text-center"><br>
                <img class="img-fluid align-middle" width="200" src="img/gbulogo.png" alt="">
               
            </div>
        </div>
    </div>
    <hr>
</div>