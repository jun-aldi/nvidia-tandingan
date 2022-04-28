<?=$this->extend("layout/layout")?>

<?=$this->section("content")?>

<section>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Technology</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
              <?php
                    foreach ($json as $item) {
                    ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm" ><?= $item['id']?></h6>   
                          </div>
                        </div>
                      </td>
                      <td>
                      <h6 class="mb-0 text-sm" style="color: #76B900;"><?= $item['teknologi']?></h6>
                      </td>
                      <td>
                      <img src="<?= $item['thumbnail']?>" class="img-thumbnail">
                      </td>
                      <td>
                      <h6 class="mb-0 text-sm"><?= $item['deskripsi']?></h6>
                      </td>
                    </tr>
                    <?php } ?>
          </tbody>
        </table>

</section>

<?=$this->endSection()?>



