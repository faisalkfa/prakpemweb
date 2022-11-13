<?php   
    include_once('connection.php');

    $query = '
        SELECT program_studi
        FROM mahasiswa
        GROUP BY program_studi
        ORDER BY program_studi
    ';
    $res = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table th, table td {
            padding: 0 5px;
        }
    </style>

    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container">
        <div class="input-group">
            <label for="prodiSelect">Prodi </label>
            <select id="prodiSelect">
                <option value="" selected>Pilih Program Studi</option>
                <?php while($prodi = mysqli_fetch_array($res)) { ?>
                    <option value="<?php echo $prodi['program_studi']; ?>"><?php echo $prodi['program_studi']; ?></option>
                <?php } ?>
            </select>
        </div>

        <table id="mhsTable" border="1" style="margin-top: 30px; border-collapse: collapse;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#prodiSelect').change(function () {
                let prodi = $('#prodiSelect').val();

                if (prodi == '') {
                    $('#mhsTable tbody').html('');
                    return;
                }

                $.ajax({
                    url: "service.php", 
                    dataType: "json",
                    data: {
                        "prodi": prodi
                    },
                    success: function(result) {
                        let tableBody = "", count = 1;
                        
                        result.forEach(function (value) {
                            tableBody += "<tr>";
                            tableBody += "<td>" + count + "</td>";
                            tableBody += "<td>" + value['nim'] + "</td>";
                            tableBody += "<td>" + value['nama'] + "</td>";
                            tableBody += "<td>" + value['program_studi'] + "</td>";
                            tableBody += "</tr>";
                            
                            count++;
                        });

                        $('#mhsTable tbody').html(tableBody);
                    }
                });
            }); 
        }); 
    </script>
</body>
</html>
