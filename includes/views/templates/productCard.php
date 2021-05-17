<div class="card col-3" style="width: 18rem;">
  <img src="<?php echo $imgSrc;?>" class="card-img-top" alt="...">
  <div class="card-body">
    <a href="productDetails.php?id=<?php echo $id;?>"><h5 class="card-title"><?php echo $title;?></h5></a>
    <p class="card-text"><?php echo $description; ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">قیمت : <?php echo $price; ?></li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">ویرایش</a>
    <a href="#" class="card-link"> حذف</a>
  </div>
</div>
