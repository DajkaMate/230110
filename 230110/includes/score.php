<?php
    $result = Score();
    $length = mysqli_num_rows($result);
?>
<div class="container py-3">
        <h1 class="text-center display-5">Keresés eredménye</h1>
        <?php if($length == 0) { ?>
            <p>A keresésnek nincs eredménye</p>
        <?php } else { ?>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Név</th>
                    <th>Feltét</th>
                    <th>24 cm</th>
                    <th>32 cm</th>
                    <th>45 cm</th>
                </tr>
                <?php while($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row["nev"]; ?></td>
                        <td><?php echo $row["feltet"]; ?></td>
                        <td><?php if( $row["akcios"] == 0){ echo $row["ar"]; }
                                  else { echo $row["ar"]*0.9; } ?> Ft</td>
                        <td><?php if( $row["akcios"] == 0){ echo $row["ar"]*1.25; }
                                else { echo ($row["ar"]*1.25)*0.9; } ?> Ft</td>
                        <td><?php if( $row["akcios"] == 0){ echo $row["ar"]*1.5; }
                                else { echo ($row["ar"]*1.5)*0.9; } ?> Ft</td>
                    </tr>
                <?php } ?>
            </table>
        <?php } ?>
</div>