<?php
    require 'cnx.php';

    function getDB(){

        $sql = "SELECT one.id, one.name, one.lastname, two.poste FROM table1 one CROSS JOIN table2 two On one.id_info = two.id ORDER BY two.poste DESC";
        $result = connect() -> query($sql);
        if(!$result)
            echo "No data to show";
        else
            echo "Data showed";

            return $result;
        
    }

    $DB = getDB();
    print_r($DB);

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Sufee Admin - HTML5 Admin Template</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php require_once('assets/links.php'); ?> 
    </head>

    <body>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table
                                    id="bootstrap-data-table-export"
                                    class="table table-striped table-bordered"
                                >
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>User Name</th>
                                            <th>User Last Name</th>
                                            <th>User Poste</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php 
                                        if($DB){
                                            foreach($DB as $data){ ?>
                                            <tr>
                                                <td><?= $data['id']?></td>
                                                <td><?= $data['name']?></td>
                                                <td><?= $data['lastname']?></td>
                                                <td><?= $data['poste']?></td>
                                            </tr>
                                        <?php }
                                        }else{
                                            echo "<tr> <td> No </td> <td> Data </td> <td> To </td> <td> Show </td> </tr>";
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .animated -->
        </div>
        <!-- .content -->

        <!-- /#right-panel -->

        <!-- Right Panel -->

        <?php// include('assets/script.php'); ?>
    </body>
</html>
