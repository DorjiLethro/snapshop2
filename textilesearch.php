<?php
    include_once 'connection.php';
    session_start();

    if(isset($_POST['searchValue'])) {
        $input = $_POST['searchValue'];

        $sql = "select * from product where category = 'textile' and  product_title like '{$input}%' or category like '{$input}%' or price like '{$input}%' or description like '{$input}%' or location like '{$input}%' or product_condition like '{$input}%'";

        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result) > 0) {
            $counter = 0;
            while($row = $result->fetch_assoc()) {
                $counter++;
                $pt = $row['product_title'];
                $pr = $row['price'];
                $discount = $row['discount'];
                $desc = $row['description'];
                $image = $row['image'];
                $location = $row['location']; ?>


                <div class="mycard x_card">
                <div class = "imagecontainer">
                    <div class="image">
                        <img src="<?php echo 'upload/'.$image ?>" alt="">
                    </div>
                    <div class = "quick">
                      <button type="button" class = "btn border border-dark" style = "background-color: coral;" data-bs-toggle="modal" data-bs-target="#<?php echo 'x1'.$counter; ?>">Quick View</button>
                    </div>
                </div>
                <div class="modal fade" id='<?php echo 'x1'.$counter; ?>' tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $pt; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class = "d-flex justify-content-center align-items-center">
                          <img class = "" src="<?php echo 'upload/'.$image ?>" alt="" style = "width:250px; height: 250px; object-fit: cover;">
                          <div class = "ps-3">
                            <p><span class = "font-weight-bold">Location: </span><?php echo $location ?></p>
                            <p class = "text-decoration-linethrough"><span class = "font-weight-bold">Price Nu. </span><?php echo $pr ?></p>
                            <div class = "text-center">
                              <i class = "fa fa-star bg-rating"></i>
                              <i class = "fa fa-star bg-rating"></i>
                              <i class = "fa fa-star bg-rating"></i>
                              <i class = "fa fa-star"></i>
                              <i class = "fa fa-star"></i>
                              <p>(500)</p>
                            </div>
                            <?php
                              $r = mysqli_query($con,"select * from snapshopuser where phonenumber = '".$_SESSION['user']."'")->fetch_assoc();
                              $type = $r['type'];
                              if($type === 'buyer') { ?>
                                <div class = "d-flex justify-content-around align-items-center">
                                  <button class = "btn"><i class = "bi bi-messenger pt-2 pb-2"></i></button>
                                  <button class = "btn"><i class = "fa fa-facebook pt-2 pb-2"></i></button>
                                  <a href="#" data-toggle="popover" title= <?php echo $user; ?> data-content="Some content inside the popover"><i class="bi bi-telephone-forward-fill"></i></a>
                                </div>
                             <?php }
                            ?>
                          </div>
                        </div>
                        <h6 class = "mt-3 text-center">Product Description</h6>
                        <p><?php echo $desc ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="title mt-3">
                    <h4><?php echo $pt ?></h4>
                </div>
                <div class="des">
                    <p><?php echo $location ?></p>
                </div> 
              </div>
  
           <?php }
        }
    } 

?>  