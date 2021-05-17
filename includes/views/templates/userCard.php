<div class="card col-3" style="width: 18rem;">
  <img src="../../public/<?php echo$row['imgSrc'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['firstname'];?></h5>
    <p class="card-text"><?php echo $row['email']; ?></p>
  </div>
  <div class="card-body">
    <a href="../../public/editUser.php?id=<?php echo $row['id']; ?>" class="card-link">ویرایش</a>
    <a href="../../public/deleteUser.php?id=<?php echo $row['id']; ?>" class="card-link"> حذف</a>
  </div>
</div>