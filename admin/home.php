<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Bảng thống kê</h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name cate</th>
                                <th>Số lượng</th>
                                <th>Giá cao nhát</th>
                                <th>Giá thấp nhất</th>
                                <th>Giá trung bình</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt = 1;
                            foreach ($listTKe as $data) : extract($data) ?>
                                <tr>
                                    <td><?= $stt++ ?></td>
                                    <td><?= $nameCate ?></td>
                                    <td><?= $countPro?></td>
                                    <td><?= $maxPrice ?></td>
                                    <td><?= $minPrice ?></td>
                                    <td><?=$avgPrice?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex">
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        <canvas id="myChartavg" style="width:100%;max-width:600px"></canvas>
    </div>
<script>
    const xValues = [
        <?php
            $tongDm = count($listTKe);
            $i = 1;
            foreach($listTKe as $data){
                extract($data);
                if($i == $tongDm) $dauphay= ""; else $dauphay = ",";
                echo "'$nameCate'".$dauphay;
                $i+= 1;
            }
        ?>
    ];
    const yValues = [
        <?php
            $tongDm = count($listTKe);
            $i = 1;
            foreach($listTKe as $data){
                extract($data);
                if($i == $tongDm) $dauphay= ""; else $dauphay = ",";
                echo "$countPro".$dauphay;
                $i+= 1;
            }
        ?>
    ];
    const pieColors = ["red", "green","blue","orange","brown"];
    new Chart("myChart", {
    type: "pie",
    data: {
        labels: xValues,
        datasets: [{
        backgroundColor: pieColors,
        data: yValues
        }]
    },
    options: {
        title: {
        display: true,
        text: "Biểu đồ thống kê số lượng sản phẩm theo danh mục"
        }
    }
    });
</script>

<script>
    const xAvg = [
        <?php
            $tongDm = count($listTKe);
            $i = 1;
            foreach($listTKe as $data){
                extract($data);
                if($i == $tongDm) $dauphay= ""; else $dauphay = ",";
                echo "'$nameCate'".$dauphay;
                $i+= 1;
            }
        ?>
    ];
    const yAvg = [
        <?php
            $tongDm = count($listTKe);
            $i = 1;
            foreach($listTKe as $data){
                extract($data);
                if($i == $tongDm) $dauphay= ""; else $dauphay = ",";
                echo "$avgPrice".$dauphay;
                $i+= 1;
            }
        ?>
    ];
    const barColors = ["red", "green","blue","orange","brown"];
    new Chart("myChartavg", {
    type: "bar",
    data: {
        labels: xAvg,
        datasets: [{
        backgroundColor: barColors,
        data: yAvg
        }]
    },
    options: {
        legend: {display: false},
        title: {
        display: true,
        text: "Biểu đồ thống kê giá trung bình của sản phẩm theo danh mục"
        }
    }
    });
</script>
</body>
</html>