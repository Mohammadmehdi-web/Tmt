        
        <?php include 'check_session.php' ?>
        <?php
        include('../db_con.php');
        include('header.php');
        // Get total count of projects
        $total_blog = $con->query("SELECT COUNT(*) AS total FROM blogs")->fetch_assoc()['total'];
        $total_query = $con->query("SELECT COUNT(*) AS total FROM contact")->fetch_assoc()['total'];
        $total_donation = $con->query("SELECT COUNT(*) AS total FROM add_donation")->fetch_assoc()['total'];
        $total_partner = $con->query("SELECT COUNT(*) AS total FROM add_partner")->fetch_assoc()['total'];
        ?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php echo $total_blog; ?></h2>
                                <div class="m-b-5">Total Blogs</div><i class=" widget-stat-icon"><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/FFFFFF/google-blog-search.png" alt="google-blog-search"/></i>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php echo $total_query; ?></h2>
                                <div class="m-b-5">Total Query</div><i class="widget-stat-icon"><img width="50" height="50" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/quiz.png" alt="quiz"/></i>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php echo $total_donation; ?></h2>
                                <div class="m-b-5">Total Donation</div><i class="widget-stat-icon"><img width="50" height="50" src="https://img.icons8.com/external-smashingstocks-mixed-smashing-stocks/68/FFFFFF/external-donation-finance-trading-and-banking-smashingstocks-mixed-smashing-stocks.png" alt="external-donation-finance-trading-and-banking-smashingstocks-mixed-smashing-stocks"/></i>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?php echo $total_partner; ?></h2>
                                <div class="m-b-5">Total Partner</div><i class="widget-stat-icon"><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/FFFFFF/ask-question.png" alt="ask-question"/></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        include('footer.php');
        ?>