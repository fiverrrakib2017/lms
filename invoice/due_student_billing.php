<?php

include '../include/security_token.php';
include '../include/database_connect.php';

//এইখানে id টা রিসিভ করবেন। তারপর লুপ করবেন। সেইম ভাবে invoice টেবিল লুপ করবেন
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  if ($allStudent = $con->query("SELECT * FROM student WHERE id='$id' ")) {
    while ($rows = $allStudent->fetch_assoc()) {
      $id = $rows['id'];
      $uid = $rows['uid'];
      $name = $rows['name'];
      $email = $rows['email'];
      $mobile = $rows['mobile'];
      $package = $rows['package'];
      $study = $rows['study'];
      $batch = $rows['batch'];
      $address = $rows['address'];
      $nid = $rows['nid'];
      $paid = $rows['paid'];
      $discount = $rows['discount'];
      $due = $rows['due'];
      $total_amount = $rows['total_amount'];
      $teacher_asign = $rows['teacher_asign'];
      $reference = $rows['reference'];
      $reg_date = $rows['reg_date'];
    }
  }
}



if (isset($_GET['id'])) {
  $id = $_GET['id'];
  if ($invoice = $con->query("SELECT * FROM invoice WHERE sid='$id' ")) {
    while ($rows2 = $invoice->fetch_assoc()) {
      $invoice_id = $rows2['id'];
    }
  }
}


?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Laralink">
  <!-- Site Title -->
  <title>Student Billing Invoice</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="margin-top: 10%">
  <div class="tm_container">
    <div class="tm_invoice_wrap">
      <div class="tm_invoice tm_style1" id="tm_download_section">
        <div class="tm_invoice_in">
          <div class="tm_invoice_head tm_mb20">
            <div class="tm_invoice_left">
              <div class="tm_logo"><img src="assets/img/favicon3.png" alt="Logo"><br> </div>
            </div>
            <div class="tm_invoice_right tm_text_right">
              <div class="tm_primary_color tm_f50 tm_text_uppercase">Invoice</div>
            </div>
          </div>
          <div class="tm_invoice_info tm_mb20">
            <div class="tm_invoice_seperator tm_gray_bg"></div>
            <div class="tm_invoice_info_list">
              <p class="tm_invoice_number tm_m0">Invoice No: <b class="tm_primary_color"><?php echo $id; ?> </b></p>
              <p class="tm_invoice_date tm_m0">Date: <b class="tm_primary_color"><?php echo date("d/m/Y") ?></b></p>
            </div>
          </div>
          <div class="tm_invoice_head tm_mb10">
            <div class="tm_invoice_left">
              <p class="tm_mb2 tm_f16"><b class="tm_primary_color tm_text_uppercase">SR ICT Training Center</b></p>
              <p>
                Sarkar Super Market <br>Gouripur Bazar, Daudkandi, Cumilla <br>
                www.srictbd.com <br>
                admin@srictbd.com<br>
                01845182012
              </p>
            </div>
            <div class="tm_invoice_right" style="width:69% !important">
              <div class="tm_grid_row tm_col_2  tm_col_2_sm tm_invoice_table tm_round_border">

                <div>
                  <p class="tm_m0">Student ID:</p>
                  <b class="tm_primary_color"><?php echo $id; ?></b>
                </div>
                <div>
                  <p class="tm_m0">Student Name:</p>
                  <b class="tm_primary_color"><?php echo $name; ?></b>
                </div>
                <div>
                  <p class="tm_m0">Course Name</p>
                  <b class="tm_primary_color">
                    <?php
                    $id = $id;
                    if ($packageList = $con->query("SELECT * FROM package WHERE package_id='$package' ")) {
                      while ($rows = $packageList->fetch_array()) {
                        echo '' . $rows['package_name'] . ' ' . $rows['type'] . ' ';
                      }
                    }

                    ?>
                  </b>
                </div>
                <div>
                  <p class="tm_m0">Batch:</p>
                  <b class="tm_primary_color">
                    <?php

                    if ($allPackag = $con->query("SELECT batch.id, batch.batch_name, package.package_id,package.package_name,package.type FROM batch INNER JOIN package ON package.package_id=batch.package_id WHERE id=$batch")) {
                      while ($rows = $allPackag->fetch_array()) {
                        echo '' . $rows['batch_name'] . '(' . $rows['package_name'] . ' for ' . $rows['type'] . ')';
                      }
                    }



                    ?>
                  </b>


                </div>


                <div>
                  <p class="tm_m0">Package Price:</p>
                  <b class="tm_primary_color"><?php
                                              if ($batch3 = $con->query("SELECT * FROM package WHERE package_id='$package' ")) {
                                                while ($rows4 = $batch3->fetch_array()) {
                                                  echo $pck = $rows4['price']  . '৳';
                                                }
                                              }



                                              ?></b>
                </div>
                <div>
                  <p class="tm_m0">Discounted:</p>
                  <b class="tm_primary_color"><?php echo $discount; ?>%</b>
                </div>
                <div>
                  <p class="tm_m0">Enrolment Date</p>
                  <b class="tm_primary_color">
                    <?php
                    //$id=$id;
                    if ($batch3 = $con->query("SELECT * FROM enrolment WHERE sid='$id' ")) {
                      while ($rows4 = $batch3->fetch_array()) {
                        echo $pck = $rows4['enrollment_date'];
                      }
                    }

                    ?>
                  </b>
                </div>
                <div>
                  <p class="tm_m0">Course End</p>
                  <b class="tm_primary_color">
                    <?php
                    $id = $id;
                    if ($batch3 = $con->query("SELECT * FROM enrolment WHERE sid='$id' ")) {
                      while ($rows4 = $batch3->fetch_array()) {
                        echo $pck = $rows4['complete_date'];
                      }
                    }

                    ?>
                  </b>
                </div>
                <div>
                  <p class="tm_m0">Class Start</p>
                  <b class="tm_primary_color">
                    <?php
                    //$id=$id;
                    if ($batch3 = $con->query("SELECT * FROM enrolment WHERE sid='$id' ")) {
                      while ($rows4 = $batch3->fetch_array()) {
                        echo $pck = $rows4['from'];
                      }
                    }

                    ?>
                  </b>
                </div>
                <div>
                  <p class="tm_m0">Class End</p>
                  <b class="tm_primary_color">
                    <?php
                    //$id=$id;
                    if ($batch3 = $con->query("SELECT * FROM enrolment WHERE sid='$id' ")) {
                      while ($rows4 = $batch3->fetch_array()) {
                        echo $pck = $rows4['to'];
                      }
                    }

                    ?>
                  </b>
                </div>
                <div>
                  <p class="tm_m0">Teacher Assigned</p>
                  <b class="tm_primary_color">
                    <?php
                    $teacherAsign = $teacher_asign;
                    if ($batch3 = $con->query("SELECT * FROM teacher WHERE id='$teacherAsign' ")) {
                      while ($rows4 = $batch3->fetch_array()) {
                        echo $pck = $rows4['teacher_name'];
                      }
                    }
                    ?>
                  </b>
                </div>
                <div>
                  <p class="tm_m0">Address</p>
                  <b class="tm_primary_color">
                    <?php echo $address; ?>
                  </b>
                </div>



              </div>
            </div>
          </div>
          <br>
          <div class="tm_table tm_style1">
            <div class="tm_round_border">
              <div class="tm_table_responsive">
                <table>
                  <thead>
                    <tr>
                      <th class="tm_width_5 tm_semi_bold tm_primary_color">Package Name</th>

                      <th class="tm_width_2 tm_semi_bold tm_primary_color tm_text_right">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="tm_gray_bg">
                      <td class="tm_width_5"><?php
                                              if ($batch55 = $con->query("SELECT * FROM package WHERE package_id='$package' ")) {
                                                while ($rows55 = $batch55->fetch_array()) {
                                                  echo $pck2 = $rows55['package_name'];
                                                }
                                              }



                                              ?></td>

                      <td class="tm_width_2 tm_text_right"><b><?php echo $total_amount . '৳'; ?></b></td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
            <div class="tm_invoice_footer">
              <div class="tm_left_footer">

              </div>
              <div class="tm_right_footer">
                <table>
                  <tbody>
                    <tr class="tm_border_top">
                      <td class="tm_width_3 tm_primary_color tm_border_none tm_bold">Paid</td>
                      <td style="color: green" class="tm_width_3 tm_primary_color tm_text_right tm_border_none tm_bold"><?php echo $paid . '৳'; ?></td>
                    </tr>

                    <tr class="tm_border_top">
                      <td style="background-color: red" class="tm_width_3 tm_border_top_0 tm_bold tm_f18 tm_white_color tm_accent_bg tm_radius_6_0_0_6">Current Due </td>
                      <td style="background-color: red" class="tm_width_3 tm_border_top_0 tm_bold tm_f18 tm_danger_color tm_text_right tm_white_color tm_accent_bg tm_radius_0_6_6_0"><?php echo $due . '৳'; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="tm_note tm_text_center tm_m0_md">
            <p class="tm_m0" align=""><br> <br>Authorization signature and seal. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
              Prepared By:

              <?php
              if ($batch66 = $con->query("SELECT * FROM admin WHERE id='$uid' ")) {
                while ($rows66 = $batch66->fetch_array()) {
                  echo $uid2 = $rows66['name'];
                }
              }



              ?></p>
          </div><!-- .tm_note -->
        </div>
      </div>
      <div class="tm_invoice_btns tm_hide_print">
        <a href="javascript:window.print()" class="tm_invoice_btn tm_color1">
          <span class="tm_btn_icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
              <path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
              <rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
              <path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
              <circle cx="392" cy="184" r="24" fill='currentColor' />
            </svg>
          </span>
          <span class="tm_btn_text">Print</span>
        </a>
        <button id="tm_download_btn" class="tm_invoice_btn tm_color2">
          <span class="tm_btn_icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
              <path d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6C391.11 99.74 329 48 256 48c-69 0-113.44 45.79-128 91.2-60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9 64-63.9M256 224v224.03" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
            </svg>
          </span>
          <span class="tm_btn_text">Download</span>
        </button>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jspdf.min.js"></script>
  <script src="assets/js/html2canvas.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>