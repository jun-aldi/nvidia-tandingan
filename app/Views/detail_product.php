<?=$this->extend("layout/layout")?>

<?=$this->section("content")?>

<section>
    <div class="container">
    <div class="row">
        <div class="col-xl-7">
        <div>
                <center>
                <h2 style="color: #76B900;"><?= $item['name'] ?></h2>
                </center>
            </div>
            <div>
            <img src="<?= base_url() ?>/assets/img/geforce/<?= $item['photo'] ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm img-fluid">
            </div>
        </div>
        <div class="col-xl-1"></div>
        <div class="col-xl-4">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col" style="color: #76B900;">GPU Engine :<i class="ri-split-cells-vertical"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">NVDIA Cuda Cores</th>
                    <td><?= $item['cuda'] ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Boost Clock (Mhz)</th>
                    <td><?= $item['boost_clock'] ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Base Clock (Mhz)</th>
                    <td><?= $item['base_clock'] ?></td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                    <th scope="col" style="color: #76B900;">Memory Specs :<i class="ri-split-cells-vertical"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">Memory Config</th>
                    <td><?= $item['memory_size'] ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Memory Bandwith</th>
                    <td><?= $item['memory_bandwith'] ?></td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                    <th scope="col" style="color: #76B900;">Card Information :<i class="ri-split-cells-vertical"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">Length</th>
                    <td><?= $item['length']?> mm</td>
                    </tr>
                    <tr>
                    <th scope="row">Width</th>
                    <td><?= $item['width'] ?> mm</td>
                    </tr>
                    <tr>
                    <th scope="row">Slot</th>
                    <td><?= $item['slot'] ?> mm</td>
                    </tr>
                    <tr>
                    <th scope="row">Power</th>
                    <td><?= $item['power'] ?> mm</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>


</section>

<?=$this->endSection()?>