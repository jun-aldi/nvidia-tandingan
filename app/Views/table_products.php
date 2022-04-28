<?=$this->extend("layout/layout")?>

<?=$this->section("content")?>

 <section>
   <div>
        <div class="input-group">
              <form method='get' action="/geforce" id="searchForm">
                <input type='text' name='search' value='<?= $search ?>' placeholder="Search here...">
                <input type='button' id='btnsearch' value='Search' onclick='document.getElementById("searchForm").submit();'>
              </form>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Cuda</th>
              <th scope="col">Boost Clock (Mhz)</th>
              <th scope="col">Base Clock (Mhz)</th>
              <th scope="col">Memory Size</th>
              <th scope="col">Memory Type</th>
              <th scope="col">Detail</th>
            </tr>
          </thead>
          <tbody>
              <?php
                    foreach ($products as $item) {
                    ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm" style="color: #76B900;"><?= $item['name']?></h6>   
                          </div>
                        </div>
                      </td>
                      <td>
                      <h6 class="mb-0 text-sm"><?= $item['cuda']?></h6>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?=$date = $item['boost_clock']?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?=$date = $item['base_clock']?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?=$date = $item['memory_size'] ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?=$date = $item['power'] ?> watt</span>
                      </td>
                      <td class="align-middle">
                        <a href="<?= base_url('/geforce/detail/' . $item['name'])?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Detail
                        </a>
                      </td>
                    </tr>
                    <?php } ?>
          </tbody>
      </table>
   </div>
 </section>     
<?=$this->endSection()?>





