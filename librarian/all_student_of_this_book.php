<?php
    session_start();
    if(!isset($_SESSION["librarian"])){

        ?>
        <script type="text/javascript">
            window.location="/Library/index.html";
        </script>
        <?php

    }
    include "connection.php";
    include "header.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                   <!-- <div class="title_left">
                        <h3></h3>-->
                    </div>
<!--
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>
-->
                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Student List With This Book</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            <?php
                                    $res=mysqli_query($db,"SELECT * FROM `issue_books` WHERE `books_name`='$_GET[books_name]'and `return_status`= 'no' ");
                                    echo "<table class='table table-bordered'>";
                                    echo "<tr>";
                                    echo "<th>"; echo "Student Name"; echo "</th>";
                                    
                                    
                                    echo "<th>"; echo "USN"; echo "</th>";
                                    echo "<th>"; echo "Book Name"; echo "</th>";
                                    echo "<th>"; echo "Issue Date"; echo "</th>";
                                    
                                    echo "</tr>";
                                    while ($row=mysqli_fetch_array($res)){
                                        echo "<tr>";
                                        echo "<td>"; echo $row["student_name"]; echo "</td>";
                                        
                                        echo "<td>"; echo $row["usn"]; echo "</td>";
                                        echo "<td>"; echo $row["books_name"]; echo "</td>";                                        
                                        echo "<td>"; echo $row["issue_date"]; echo "</td>";
                                        
                                        echo "</tr>";
                                    }
                                    
                                    echo "</table>";



                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


<?php
    include "footer.php";
?>