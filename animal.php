<?php
  $currentPage = 'animals';
  include('components/header.php');

  $id = isset($_GET['id']) ? $_GET['id'] : 1;
  $id = $id < 1 ? 1 : $id;
  $sql = "SELECT id, name, image_id, description FROM tbl_animals WHERE id=$id";
  $res = mysqli_query($conn, $sql);

  if($res==TRUE && mysqli_num_rows($res) > 0) {
    $rows = mysqli_fetch_assoc($res);
    $name = $rows['name'];
    $image_id = $rows['image_id'];
    $description = $rows['description'];
  } else {
    $name = "error: invalid id";
    $description = "something's gone wrong";
  }
?>

<main>
  <section class="py-5 text-light text-start bg-dark">
    <div class="container p-3">
      <h1 class="display-1 text-capitalize text-warning my-3"><?=$name?></h1>
      <div class="container px-3 d-flex justify-content-center">
        <img src="img/animals/<?=$image_id?>.jpg" class="img-fluid animal-page-pic my-3">
      </div>
      <p class="h4 my-3 p-3 border-top border-bottom border-light border-2"><?=$description?></p>
    </div>
  </section>
</main>

<?php include('components/footer.php') ?>
