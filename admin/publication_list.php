<?php
    include 'check_session.php';
    include('header.php');
?>
<!-- END SIDEBAR-->
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->

    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Publication List</div>
            </div>
            <div class="ibox-body">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Image</th>
                            <th>PDF</th>
                            <th>Title</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            include('../db_con.php');
                            $fetch_query = "SELECT * FROM add_publication";
                            $result = mysqli_query($con, $fetch_query);
                            $i = 1;
                             while ($row = mysqli_fetch_array($result)) {
                        ?>

                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><img src="publication_upoads/<?php echo $row['image_path']; ?>" alt="Image" class="img-thumbnail" style="max-width: 40px; height:50;"></td>
                            <td><?php echo $row['pdf_path']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td class="text-center">
                                <a type="submit" class="btn btn-primary shadow btn-xs sharp me-1"
                                    href="publication_edit.php?user_id=<?php echo $row['id']; ?>" style="color:white;">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form method="POST" action="publication_delete.php" style="display:inline;">
                                    <input type="hidden" name="user_id" value="<?php echo $row['id'];?>">
                                    <button type="submit" class="btn btn-danger shadow btn-xs sharp" name="delete"
                                        onclick="return confirm('Are you sure?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php
                            $i++;
                             }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <style>
    .dataTables_length {
        display: none;
    }

    .dataTables_filter {
        display: none;
    }
    </style>
    <?php
                include('footer.php');
           ?>