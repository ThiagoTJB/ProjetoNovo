<div class="col-sm-12">
    <form action="" class="form-control mb-2">
        <table id="tabelaDados" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Data</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>

            <?php
            include_once ('Conexao.php');
            try
            {
                $sql = $conn->query('select * from ParceiroServicos');
                foreach($sql as $row)
                {
                    echo "
                        <tr>
                            <td>$row[0]</td>
                            <td>$row[2]</td>
                            <td>$row[3]</td>
                            <td>$row[1]</td>
                            <td>$row[4]</td>
                        </tr>
                    ";
                }
            }
            catch(PDOException $ex)
            {
                echo $ex->getMessage();
            }
            ?>
            </tbody>
        </table>

    </form>

    <script>
        $(document).ready(function () {
            $('#tabelaDados').DataTable();
        });
    </script>

</div>