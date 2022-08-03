<?php
  $currentPage = 'animals';
  include('components/header.php');

  $page = isset($_GET['page']) ? $_GET['page'] : 1;
  $page = $page < 1 ? 1 : $page;
  $sql = "SELECT id, name, image_id, description FROM tbl_animals WHERE id > 12*$page-12 AND id <= 12*$page";
  $res = mysqli_query($conn, $sql);
?>

<main>
  <section class="py-5 text-light text-start bg-dark">
    <div class="container p-3">
      <h1 class="display-1 text-warning my-3">Animals</h1>
      <nav class="mt-3" aria-label="Page navigation">
        <ul class="pagination justify-content-end">
          <li class="page-item <?=$page > 1 ?:'disabled'?>"><a class="page-link" href=<?=SITEURL.'animals.php?page='?><?=$page-1?>>Previous</a></li>
          <li class="page-item active" aria-current="page"><span class="page-link"><?=$page?></span></li>
          <li class="page-item <?=mysqli_num_rows($res)==12 ?:'disabled'?>"><a class="page-link" href=<?=SITEURL.'animals.php?page='?><?=$page+1?>>Next</a></li>
        </ul>
      </nav>
      
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-6 g-3">
        <?php
          if($res==TRUE && mysqli_num_rows($res) > 0) {
            while($rows = mysqli_fetch_assoc($res)) {
              $id = $rows['id'];
              $name = $rows['name'];
              $image_id = $rows['image_id'];
              $description = $rows['description'];
              
              ?>
                <div class="col">
                  <div class="card h-100 bg-transparent border-0">
                    <div class="card-header text-capitalize text-warning h5 border-bottom border-light border-1 bg-transparent"><?=$name?></div>
                    <img src="img/cards/<?=$image_id?>.jpeg" class="card-img-top p-1">
                    <div class="card-body">
                      <p class="card-text h6"><?=$description?></p>
                    </div>
                    <div class="card-footer d-flex justify-content-end border-top border-light border-1 bg-transparent">
                      <a href=<?=SITEURL.'animal.php?id='.$id?> class="btn btn-outline-warning btn-sm">Read more</a>
                    </div>
                  </div>
                </div>
              <?php
              
            }
          } else {
            ?>
              <h1 class="display-1">error: page invalid</h1>
            <?php
          }
        ?>
      </div>

      <nav class="mt-3"aria-label="Page navigation">
        <ul class="pagination justify-content-end">
          <li class="page-item <?=$page > 1 ?:'disabled'?>"><a class="page-link" href=<?=SITEURL.'animals.php?page='?><?=$page-1?>>Previous</a></li>
          <li class="page-item active" aria-current="page"><span class="page-link"><?=$page?></span></li>
          <li class="page-item <?=mysqli_num_rows($res)==12 ?:'disabled'?>"><a class="page-link" href=<?=SITEURL.'animals.php?page='?><?=$page+1?>>Next</a></li>
        </ul>
      </nav>
    </div>
  </section>  
</main>

<?php include('components/footer.php') ?>
