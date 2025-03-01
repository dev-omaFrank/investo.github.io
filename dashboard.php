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
                                Total Earnings
                              </p>
                              <h3
                                class="text-light my-2"
                                style="
                                  background-color: rgba(41, 98, 255, 0.12);
                                  border-radius: 6px;
                                  padding: 5px;
                                "
                              >
                                <span class="blink_cyan"></span> $0.00
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

                    <div class="col-md-12">
                      <!-- TradingView Widget BEGIN -->
                      <div
                        class="tradingview-widget-container"
                        style="width: 100%; height: 500px"
                      >
                        <iframe
                          scrolling="no"
                          allowtransparency="true"
                          style="
                            user-select: none;
                            box-sizing: border-box;
                            display: block;
                            height: calc(100% - 32px);
                            width: 100%;
                          "
                          src="https://www.tradingview-widget.com/embed-widget/hotlists/?locale=en#%7B%22colorTheme%22%3A%22dark%22%2C%22dateRange%22%3A%2212M%22%2C%22exchange%22%3A%22US%22%2C%22showChart%22%3Atrue%2C%22width%22%3A%22100%25%22%2C%22height%22%3A500%2C%22largeChartUrl%22%3A%22%22%2C%22isTransparent%22%3Afalse%2C%22showSymbolLogo%22%3Afalse%2C%22showFloatingTooltip%22%3Afalse%2C%22plotLineColorGrowing%22%3A%22rgba(41%2C%2098%2C%20255%2C%201)%22%2C%22plotLineColorFalling%22%3A%22rgba(41%2C%2098%2C%20255%2C%201)%22%2C%22gridLineColor%22%3A%22rgba(240%2C%20243%2C%20250%2C%200)%22%2C%22scaleFontColor%22%3A%22rgba(120%2C%20123%2C%20134%2C%201)%22%2C%22belowLineFillColorGrowing%22%3A%22rgba(41%2C%2098%2C%20255%2C%200.12)%22%2C%22belowLineFillColorFalling%22%3A%22rgba(41%2C%2098%2C%20255%2C%200.12)%22%2C%22belowLineFillColorGrowingBottom%22%3A%22rgba(41%2C%2098%2C%20255%2C%200)%22%2C%22belowLineFillColorFallingBottom%22%3A%22rgba(41%2C%2098%2C%20255%2C%200)%22%2C%22symbolActiveColor%22%3A%22rgba(41%2C%2098%2C%20255%2C%200.12)%22%2C%22utm_source%22%3A%22avalogtrade.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22hotlists%22%2C%22page-uri%22%3A%22avalogtrade.com%2F%3Fa%3Daccount%22%7D"
                          title="hotlists TradingView widget"
                          lang="en"
                          frameborder="0"
                        ></iframe>
                        <div class="tradingview-widget-copyright">
                          <a
                            href="https://www.tradingview.com/markets/stocks-usa/?utm_source=avalogtrade.com&amp;utm_medium=widget_new&amp;utm_campaign=hotlists"
                            rel="noopener"
                            target="_blank"
                            ><span class="blue-text"
                              >Stock Market Today</span
                            ></a
                          >
                          by TradingView
                        </div>

                        <style>
                          .tradingview-widget-copyright {
                            font-size: 13px !important;
                            line-height: 32px !important;
                            text-align: center !important;
                            vertical-align: middle !important;
                            /* @mixin sf-pro-display-font; */
                            font-family: -apple-system, BlinkMacSystemFont,
                              "Trebuchet MS", Roboto, Ubuntu, sans-serif !important;
                            color: #b2b5be !important;
                          }

                          .tradingview-widget-copyright .blue-text {
                            color: #2962ff !important;
                          }

                          .tradingview-widget-copyright a {
                            text-decoration: none !important;
                            color: #b2b5be !important;
                          }

                          .tradingview-widget-copyright a:visited {
                            color: #b2b5be !important;
                          }

                          .tradingview-widget-copyright a:hover .blue-text {
                            color: #1e53e5 !important;
                          }

                          .tradingview-widget-copyright a:active .blue-text {
                            color: #1848cc !important;
                          }

                          .tradingview-widget-copyright a:visited .blue-text {
                            color: #2962ff !important;
                          }
                        </style>
                      </div>
                      <!-- TradingView Widget END -->
                    </div>
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-body">
                          <h1 class="my-4 font-weight-bold">
                            How Referral<span class="text-primary"> Works</span
                            >.
                          </h1>
                          <p class="font-20 font-weight-bold">
                            Invite any active trader and earn <br />
                            instant 5% referral bonus
                          </p>

                          <div class="row">
                            <div class="col-md-12">
                              <p class="mb-3 text-muted">Referral Link</p>
                              <p class="cursor-pointer" id="referral_link_p">
                                <span id=""
                                  ></span
                                >
                                <span id="copy_link_btn" class="cursor-pointer"
                                  ><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-copy icon-dual"
                                  >
                                    <rect
                                      x="9"
                                      y="9"
                                      width="13"
                                      height="13"
                                      rx="2"
                                      ry="2"
                                    ></rect>
                                    <path
                                      d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"
                                    ></path></svg
                                ></span>
                              </p>
                            </div>
                          </div>
                        </div>

                        <!--end row-->
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-body">
                          <!-- TradingView Widget BEGIN -->
                          <div
                            class="tradingview-widget-container"
                            style="width: 100%; height: 350px"
                          >
                            <iframe
                              scrolling="no"
                              allowtransparency="true"
                              style="
                                user-select: none;
                                box-sizing: border-box;
                                display: block;
                                height: calc(100% - 32px);
                                width: 100%;
                              "
                              src="https://www.tradingview-widget.com/embed-widget/timeline/#%7B%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Afalse%2C%22displayMode%22%3A%22regular%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A350%2C%22utm_source%22%3A%22avalogtrade.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22timeline%22%2C%22page-uri%22%3A%22avalogtrade.com%2F%3Fa%3Daccount%22%7D"
                              title="timeline TradingView widget"
                              lang="en"
                              frameborder="0"
                            ></iframe>
                            <div class="tradingview-widget-copyright">
                              <a
                                href="https://www.tradingview.com/?utm_source=avalogtrade.com&amp;utm_medium=widget_new&amp;utm_campaign=timeline"
                                rel="noopener"
                                target="_blank"
                                ><span class="blue-text"> History</span></a
                              >
                              by TradingView
                            </div>

                            <style>
                              .tradingview-widget-copyright {
                                font-size: 13px !important;
                                line-height: 32px !important;
                                text-align: center !important;
                                vertical-align: middle !important;
                                /* @mixin sf-pro-display-font; */
                                font-family: -apple-system, BlinkMacSystemFont,
                                  "Trebuchet MS", Roboto, Ubuntu, sans-serif !important;
                                color: #b2b5be !important;
                              }

                              .tradingview-widget-copyright .blue-text {
                                color: #2962ff !important;
                              }

                              .tradingview-widget-copyright a {
                                text-decoration: none !important;
                                color: #b2b5be !important;
                              }

                              .tradingview-widget-copyright a:visited {
                                color: #b2b5be !important;
                              }

                              .tradingview-widget-copyright a:hover .blue-text {
                                color: #1e53e5 !important;
                              }

                              .tradingview-widget-copyright
                                a:active
                                .blue-text {
                                color: #1848cc !important;
                              }

                              .tradingview-widget-copyright
                                a:visited
                                .blue-text {
                                color: #2962ff !important;
                              }
                            </style>
                          </div>
                          <!-- TradingView Widget END -->
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                      <!-- begin widget-list -->
                      <div class="card">
                        <div
                          class="card-body widget-list widget-list-rounded m-b-30 p-0"
                          style="border-radius: 3px"
                          data-id="widget"
                        >
                          <a
                            href="?a=security"
                            style="
                              background-color: #1e222d;
                              padding-top: 5px;
                              padding-bottom: 2px;
                              border-radius: 3px 3px 0 0;
                            "
                            class="widget-list-item"
                          >
                            <div class="widget-list-media icon">
                              <i
                                class="fa fa-shield-alt bg-red-darker text-white"
                              ></i>
                            </div>
                            <div class="widget-list-content">
                              <h4 class="widget-list-title text-white">
                                2 Factor Authentication
                              </h4>
                            </div>
                            <div
                              class="widget-list-action text-nowrap text-grey-darker text-right"
                            >
                              Off<i
                                class="fa fa-angle-right text-muted t-plus-1 fa-lg m-l-5"
                              ></i>
                            </div>
                          </a>

                          <a
                            style="
                              background-color: #1e222d;
                              padding-top: 2px;
                              padding-bottom: 3px;
                            "
                            class="widget-list-item"
                          >
                            <div class="widget-list-media icon">
                              <i
                                class="fa fa-calendar-alt bg-blue text-white"
                              ></i>
                            </div>
                            <div class="widget-list-content">
                              <h4 class="widget-list-title text-white">
                                Sign Up Date
                              </h4>
                            </div>
                            <div
                              class="widget-list-action text-nowrap text-grey-darker"
                            ></div>
                          </a>
                          <a
                            style="
                              background-color: #1e222d;
                              padding-top: 2px;
                              padding-bottom: 3px;
                            "
                            class="widget-list-item"
                          >
                            <div class="widget-list-media icon">
                              <i
                                class="fa fa-sign-in-alt bg-orange text-white"
                              ></i>
                            </div>
                            <div class="widget-list-content">
                              <h4 class="widget-list-title text-white">
                                Last Login
                              </h4>
                            </div>
                            <div
                              class="widget-list-action text-nowrap text-grey-darker"
                            >
                              n/a
                            </div>
                          </a>

                          <a
                            style="
                              background-color: #1e222d;
                              padding-top: 2px;
                              padding-bottom: 3px;
                            "
                            class="widget-list-item"
                          >
                            <div class="widget-list-media icon">
                              <i class="fas fa-wifi bg-indigo text-white"></i>
                            </div>
                            <div class="widget-list-content">
                              <h4 class="widget-list-title text-white">
                                Your IP
                              </h4>
                            </div>
                            <div
                              class="widget-list-action text-nowrap text-grey-darker"
                            >
                              <script type="application/javascript">
                                function getIP(json) {
                                  document.write(json.ip);
                                }
                              </script>
                              <script
                                type="application/javascript"
                                src="https://api.ipify.org?format=jsonp&amp;callback=getIP"
                              ></script>
                            </div>
                          </a>
                          <a
                            style="
                              background-color: #1e222d;
                              padding-top: 2px;
                              padding-bottom: 3px;
                            "
                            class="widget-list-item"
                          >
                            <div class="widget-list-media icon">
                              <i
                                class="fab fa-windows bg-grey-darker text-inverse"
                              ></i>
                            </div>
                            <div class="widget-list-content">
                              <h4 class="widget-list-title text-white">
                                Operating System
                              </h4>
                            </div>
                            <div
                              class="widget-list-action text-nowrap text-grey-darker text-right"
                            >
                              <span id="os"><b>Windows</b></span>
                            </div>
                          </a>
                          <a
                            style="
                              background-color: #1e222d;
                              padding-top: 2px;
                              padding-bottom: 3px;
                            "
                            class="widget-list-item"
                          >
                            <div class="widget-list-media icon">
                              <i
                                class="fab fa-firefox bg-purple text-white"
                              ></i>
                            </div>
                            <div class="widget-list-content">
                              <h4 class="widget-list-title text-white">
                                Browser
                              </h4>
                            </div>
                            <div
                              class="widget-list-action text-nowrap text-grey-darker text-right"
                            >
                              <span id="browser"><b>Firefox</b></span>
                            </div>
                          </a>
                          <a
                            href="?a=edit_account"
                            style="
                              background-color: #1e222d;
                              padding-top: 2px;
                              padding-bottom: 5px;
                              border-radius: 0 0 3px 3px;
                            "
                            class="widget-list-item"
                          >
                            <div class="widget-list-media icon">
                              <i class="fa fa-cog bg-teal text-white"></i>
                            </div>
                            <div class="widget-list-content">
                              <h4 class="widget-list-title text-white">
                                Edit Account
                              </h4>
                            </div>
                            <div
                              class="widget-list-action text-nowrap text-grey-darker text-right"
                            >
                              <i
                                class="fa fa-angle-right text-muted t-plus-1 fa-lg m-l-5"
                              ></i>
                            </div>
                          </a>
                        </div>
                      </div>
                      <!-- end widget-list -->
                    </div>
                  </div>

                  <div class="card">
                    <!--end card-header-->
                    <div class="card-body">
                      <!-- TradingView Widget BEGIN -->
                      <div
                        class="tradingview-widget-container"
                        style="width: 100%; height: 400px"
                      >
                        <iframe
                          scrolling="no"
                          allowtransparency="true"
                          style="
                            user-select: none;
                            box-sizing: border-box;
                            display: block;
                            height: 100%;
                            width: 100%;
                          "
                          src="https://www.tradingview-widget.com/embed-widget/forex-cross-rates/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A400%2C%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%5D%2C%22colorTheme%22%3A%22light%22%2C%22utm_source%22%3A%22avalogtrade.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22forex-cross-rates%22%2C%22page-uri%22%3A%22avalogtrade.com%2F%3Fa%3Daccount%22%7D"
                          title="forex cross-rates TradingView widget"
                          lang="en"
                          frameborder="0"
                        ></iframe>

                        <style>
                          .tradingview-widget-copyright {
                            font-size: 13px !important;
                            line-height: 32px !important;
                            text-align: center !important;
                            vertical-align: middle !important;
                            /* @mixin sf-pro-display-font; */
                            font-family: -apple-system, BlinkMacSystemFont,
                              "Trebuchet MS", Roboto, Ubuntu, sans-serif !important;
                            color: #b2b5be !important;
                          }

                          .tradingview-widget-copyright .blue-text {
                            color: #2962ff !important;
                          }

                          .tradingview-widget-copyright a {
                            text-decoration: none !important;
                            color: #b2b5be !important;
                          }

                          .tradingview-widget-copyright a:visited {
                            color: #b2b5be !important;
                          }

                          .tradingview-widget-copyright a:hover .blue-text {
                            color: #1e53e5 !important;
                          }

                          .tradingview-widget-copyright a:active .blue-text {
                            color: #1848cc !important;
                          }

                          .tradingview-widget-copyright a:visited .blue-text {
                            color: #2962ff !important;
                          }
                        </style>
                      </div>
                      <!-- TradingView Widget END -->
                    </div>
                  </div>
                </div>
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
            document.querySelector('#referral_link_p').innerHTML = `https://avalogtrade.com/?ref=${name}`
            document.querySelector('.total-deposit').innerHTML = `$${data.total_deposit}`
            document.querySelector('.account-balance').innerHTML = `$${data.total_deposit}`
          }
        } catch (error) {
          console.error("Error encountered: " + error);
        }
      })();
    </script>
  </body>
</html>
