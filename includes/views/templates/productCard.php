<div class="card col-3" style="width: 18rem;">
  <img src="../../public/<?php echo$row['imgSrc'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['title'];?></h5>
    <p class="card-text"><?php echo $row['description']; ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">قیمت : <?php echo $row['price']; ?></li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">ویرایش</a>
    <a href="#" class="card-link"> حذف</a>
  </div>
</div>
