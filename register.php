<?php include("head1.php"); ?>
<?php include('server.php')?>
<?php include('errors.php')?>

<!-- ======== @Region: body ======== -->
<head>
  <title>
    Register
  </title>
</head>
<body class="fullscreen-centered page-register">
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div id="background-wrapper" class="benches" data-stellar-background-ratio="0.8">
    <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="header">
        <div class="header-inner">
           <h1 align="center">
               Online Gas Booking
              </h1>
          </a>
        </div>
      </div>
      <div>
      <?php include('errors.php')?>
    </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                  Sign Up
                </h3>
            </div>
            <div class="panel-body">


              <form accept-charset="UTF-8" role="form" method="POST" action="server.php">
                <fieldset>
                  <div class="table-responsive">
                  <table>
                    <tr>

                        <td> <label>Name</label> </td>

            <td>
              <input type="text" class="form-control" name="name" placeholder="Enter Your Full name" id="ip">
            </td>
            </tr>
        <tr>
           <td>
             <label>Date Of Birth</label>
             </td>

            <td>
              <input type="date"  class="form-control" name="dob" id="ip">

            </td>
           </tr>
               <tr>
               <td> <label>Address</label>
               </td>
               <td>
                  <textarea rows="5"  class="form-control" name="add" id="ip"></textarea>
                </td>
                </tr>
                    <tr>
               <td>
                  <label>Mobile Number</label>
                </td>
               <td>
                  <input type="number"  class="form-control" name="mono" placeholder="Enter your 10 digit mobile number" id="ip">
                </td>
                <tr>

                <tr>
               <td>
                 <label>Card Number</label>
               </td>

               <td>
                  <input type="text" class="form-control" name="CardNo" placeholder="Enter Your Card Number" id="ip">
                </td>
            </tr>
                <tr>
                <td>
                  <label>Email Id</label>
                </td>

                <td>
                  <input type="email" class="form-control" name="email" placeholder="Enter Your EmailId" id="ip">
                </td>
                </tr>
                    <tr>
                        <td> <label>Addhar Card Number</label></td>

               <td>
                  <input type="number" class="form-control" name="AddharNo" placeholder="Enter Your Addhar Card No" id="ip">
                </td>
                </tr>
                
                <td>
                  <label>Bank Info</label>
                </td>

                </tr>
                <tr>
                <td>
                  <label>Account Number</label>
                </td>

                <td>
                  <input type="number" class="form-control" name="AccNo" placeholder="Enter Account Number" id="ip">
                </td>
                <td>
                  <label> IFSC</label>
                </td>
                <td>
                  <input type="text" class="form-control" name="IFSC" placeholder="Enter Your IFSC Code" id="ip">
                </td>
                </tr>

                <tr>
                    <td>
                      <label>Password</label></td>
                    <td>
                      <input type="password" class="form-control" name="pass" id="ip">
                    </td>
                </tr>
                
             </table>
             </div>
                  <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign Me Up" name="register">
                </fieldset>
              </form>

              <p class="m-b-0 m-t">Already signed up? <a href="index.php">Login here</a>.</p>
              
            </div>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
  </div>
<?php include("foot1.php"); ?>