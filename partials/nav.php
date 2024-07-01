<?php echo '<nav id="top_nav">
            <div id="logo">
                <a href="index.php">CES <span>PLLC</span></a>
            </div>
            <div id="mnu_opn_btn">
                <a href="javascript:void(0)"><i class="fa fa-bars"></i></a>
            </div>
            <ul id="menu_bar">
                <div id="mnu_cls_btn">
                    <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
                </div>
                <li>
                    <a href="index.php">
                        <h3>CES-PLLC</h3>
                    </a>
                </li>
                <li>
                    <div id="srvcs_cvrn_dv">
                        <h3>Services<i class="fa fa-chevron-up" id="srvcs_cvrn"></i></h3>
                        <a href="residential.php">Residential</a>
                        <a href="inspections.php">Inspections</a>
                    </div>
                </li>
                <li>
                    <div id="prjts_cvrn_dv">
                        <h3>Projects<i class="fa fa-chevron-up" id="prjts_cvrn"></i></h3>
                        <a href="home_design.phps">Home Design</a>
                        <a href="garage_barn_design.php">Garage & Barn Design</a>
                        <a href="deck_sunroom_design.php">Deck & Sunroom Design</a>
                        <a href="addition_renovations.php">Additions & Renovations</a>
                    </div>
                </li>
                <li>
                    <div id="aws_cvrn_dv">
                        <h3>Areas We Serve<i class="fa fa-chevron-up" id="aws_cvrn"></i></h3>';
$sql = "SELECT city_id, city, state FROM areas_we_serve";

$query = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($query)) {
    echo '<a href="served_area.php?ct_id=' . $row[0] . '&city_name=' . $row[1] . '">' . $row[1] . ", " . $row[2] . '</a>';
}
echo '</div>
                </li>
                <li>
                    <a href="about.php">
                        <h3>About</h3>
                    </a>
                </li>
                <li>
                    <a href="contact.php">
                        <h3>Contact</h3>
                    </a>
                </li>
                <li>
                    <a href="testimonial.php">
                        <h3>Testimonial</h3>
                    </a>
                </li>
                <li>
                    <a href="blog.php">
                        <h3>Blog</h3>
                    </a>
                </li>
                <li class="telephone_btn">
                    <a href="tel:15187966349">
                        <h3><i class="fa fa-phone"></i>15187966349</h3>
                    </a>
                </li>
            </ul>
        </nav>';
