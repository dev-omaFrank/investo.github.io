<!DOCTYPE html>
<html lang="en">
  <?php include 'includes/header.php'?>

  <body class="dark-sidenav">
    <!-- Left Sidenav -->
    <?php include 'includes/left-sidebar.php'?>
    <!-- end left-sidenav-->

    <div class="page-wrapper">
      <!-- Top Bar Start -->
      <?php include 'includes/topbar.php'?>
      <!-- Top Bar End -->
      <div class="page-content">
        <div>
          <script src="dash/plugins/apex-charts/apexcharts.min.js"></script>
          <div>
            <div class="container-fluid">
              <!-- Page-Title -->
              <div class="row">
                <div class="col-sm-12">
                  <div class="page-title-box">
                    <div class="row">
                      <div class="col">
                        <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                            <a href="javascript:void(0);">OceanicFx</a>
                          </li>
                        </ol>
                      </div>
                      <div class="col-auto align-self-center">
                        <a
                          href="#"
                          class="btn btn-sm btn-outline-primary"
                          id="clockbox"
                          ></a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>

             

              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card report-card">
                        <div class="card-body">
                          <div class="row d-flex justify-content-center">
                            <div class="col-6 col-md-8 overflow-hidden">
                              <p class="text-light mb-1 font-weight-semibold">
                                Account Balance
                              </p>
                              <h3
                                class="text-light my-2 account-balance"
                                style="
                                  background-color: rgba(41, 98, 255, 0.12);
                                  border-radius: 6px;
                                  padding: 5px;
                                "
                              >
                                <span class="blink_cyan"></span> 
                              </h3>
                              <hr />
                              <div class="d-flex text-light">
                                <div class="mr-3">
                                  <h3 class="text-light text-truncate">
                                  </h3>
                                </div>
                              </div>
                            </div>
                            <div
                              class="col-6 col-md-4 align-self-center overflow-hidden"
                            >
                              <img
                                src="dash/images/trade-icc.gif"
                                style="width: 150px; height: 150px"
                                alt="gif"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="card report-card">
                        <div class="card-body">
                          <div class="row d-flex justify-content-center">
                            <div class="col">
                              <p class="text-light mb-1 font-weight-semibold">
                                Total Deposit
                              </p>
                              <h3
                                class="text-light my-2 total-deposit"
                                style="
                                  background-color: rgba(41, 98, 255, 0.12);
                                  border-radius: 6px;
                                  padding: 5px;
                                "
                              >
                                <span class="blink_cyan "></span> 
                              </h3>
                            </div>
                            <div class="col-auto align-self-center">
                              <div class="report-main-icon pur-col-bg">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  class="feather feather-dollar-sign align-self-center text-light icon-md"
                                >
                                  <line x1="12" y1="1" x2="12" y2="23"></line>
                                  <path
                                    d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"
                                  ></path>
                                </svg>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card report-card">
                        <div class="card-body">
                          <div class="row d-flex justify-content-center">
                            <div class="col">
                              <p class="text-light mb-1 font-weight-semibold">
                               Wallet Address
                              </p>
                              <h3
                                class="text-light my-2 wallet-address"
                                style="
                                  background-color: rgba(41, 98, 255, 0.12);
                                  border-radius: 6px;
                                  padding: 5px;
                                "
                              >
                                <span class="blink_cyan"></span> 
                              </h3>
                            </div>
                            <div class="col-auto align-self-center">
                              <div class="report-main-icon pur-col-bg">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  class="feather feather-activity align-self-center text-light icon-md"
                                >
                                  <polyline
                                    points="22 12 18 12 15 21 9 3 6 12 2 12"
                                  ></polyline>
                                </svg>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                <form>
                  <div class="form-group">
                    <label for="wallet-address">Wallet address</label>
                    <input type="wallet-address" class="form-control" id="wallet-address" aria-describedby="wallet-address" placeholder="">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your details with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="amount-to-withdraw">Amount to withdraw</label>
                    <input type="number" class="form-control" id="amount-to-withdraw" min="50" placeholder="amount to withdraw">
                  </div>
                  <button type="button" class="btn btn-primary">Withdraw</button>
                </form>
              </div>
            </div>
          </div>
          <!-- .page-content -->
        </div>
        <footer class="footer text-center text-sm-left">
          © 2022 OceanicFx
        </footer>
        <!--end footer-->
      </div>
      <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- jQuery  -->
    <?php include 'includes/jsfiles.php'?>
    <script>
      (async function () {
        try {
          const response = await fetch("./api/route/session_isset.php");
          if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
          }
          const data = await response.json();
          if(data.status == true){
            name = data.name[0].toUpperCase() + data.name.slice(1);
            document.querySelector('.text-truncate').innerHTML = `Welcome ${name}!!`
            document.querySelector('.nav-user-name').innerHTML = `${name}`
            document.querySelector('.total-deposit').innerHTML = `$${data.total_deposit}`
            document.querySelector('.account-balance').innerHTML = `$${data.total_deposit}`
          }
        } catch (error) {
          console.error("Error encountered: " + error);
        }
      })();
      (async function () {
        try {
          const response = await fetch("./api/route/history.php");
          if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
          }
          const data = await response.json();
          if(data.status == true){
            document.querySelector('.wallet-address').innerHTML += `${data.value.depositors_payer_acc}`;
            document.querySelector('#wallet-address').placeholder =`${data.value.depositors_payer_acc}`;

          }
        } catch (error) {
          console.error("Error encountered: " + error);
        }
      })();
    </script>
  </body>
</html>