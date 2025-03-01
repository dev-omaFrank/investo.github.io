<script src="dash/assets/js/jquery.min.js"></script>
    <script src="dash/assets/js/bootstrap.bundle.min.js"></script>
    <script src="dash/js/toaster.js"></script>
    <script src="dash/js/custom.js"></script>
    <script src="dash/assets/js/metismenu.min.js"></script>
    <script src="dash/assets/js/waves.js"></script>
    <script src="dash/assets/js/feather.min.js"></script>
    <script src="dash/assets/js/simplebar.min.js"></script>
    <script src="dash/assets/js/jquery-ui.min.js"></script>
    <script src="dash/assets/js/moment.js"></script>

    <script src="dash/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="dash/plugins/clipboard/clipboard.min.js"></script>
    <script src="dash/plugins/select2/select2.min.js"></script>
    <script src="dash/plugins/dropify/js/dropify.min.js"></script>
    <script src="dash/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="dash/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="dash/plugins/jquery-steps/jquery.steps.min.js"></script>
    <script src="dash/assets/pages/jquery.form-wizard.init.js"></script>
    <script src="dash/assets/pages/jquery.analytics_dashboard.init.js"></script>
    <div class="jvectormap-tip"></div>
    <script src="dash/assets/pages/jquery.form-upload.init.js"></script>
    <script src="dash/assets/pages/jquery.forms-advanced.js"></script>
    <script src="dash/assets/js/app.js"></script>
    <script src="dash/assets/js/demo-nomodule.js"></script>
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script src="dash/assets/pages/jquery.sweet-alert.init.js"></script>

    <script>
      $(document).ready(function () {
        $("#depositHistory").DataTable();
        $("#investmentHistory").DataTable();
        $("#withdrawalHistory").DataTable();
      });
    </script>
    <script>
      new ClipboardJS(".btn-clipboard");
    </script>
    <script>
      feather.replace();
    </script>
    <script>
      var tmonth = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ];

      function GetClock() {
        var tzOffset = 1; //set this to the number of hours offset from UTC

        var d = new Date();
        var dx = d.toGMTString();
        dx = dx.substr(0, dx.length - 3);
        d.setTime(Date.parse(dx));
        d.setHours(d.getHours() + tzOffset);
        var nmonth = d.getMonth(),
          ndate = d.getDate(),
          nyear = d.getFullYear();

        var nhour = d.getHours(),
          nmin = d.getMinutes(),
          nsec = d.getSeconds(),
          ap;

        if (nhour == 0) {
          ap = " AM";
          nhour = 12;
        } else if (nhour < 12) {
          ap = " AM";
        } else if (nhour == 12) {
          ap = " PM";
        } else if (nhour > 12) {
          ap = " PM";
          nhour -= 12;
        }

        if (nmin <= 9) nmin = "0" + nmin;
        if (nsec <= 9) nsec = "0" + nsec;

        var clocktext =
          "" +
          tmonth[nmonth] +
          "-" +
          ndate +
          "-" +
          nyear +
          ", " +
          nhour +
          ":" +
          nmin +
          ":" +
          nsec +
          ap +
          "";
        document.getElementById("clockbox").innerHTML = clocktext;
      }

      GetClock();
      setInterval(GetClock, 1000);
    </script>
    <script>
      (function () {
        var BrowserDetect = {
          init: function () {
            this.browser =
              this.searchString(this.dataBrowser) || "An unknown browser";
            this.version =
              this.searchVersion(navigator.userAgent) ||
              this.searchVersion(navigator.appVersion) ||
              "an unknown version";
            this.OS = this.searchString(this.dataOS) || "an unknown OS";
          },
          searchString: function (data) {
            for (var i = 0; i < data.length; i++) {
              var dataString = data[i].string;
              var dataProp = data[i].prop;
              this.versionSearchString =
                data[i].versionSearch || data[i].identity;
              if (dataString) {
                if (dataString.indexOf(data[i].subString) != -1)
                  return data[i].identity;
              } else if (dataProp) return data[i].identity;
            }
          },
          searchVersion: function (dataString) {
            var index = dataString.indexOf(this.versionSearchString);
            if (index == -1) return;
            return parseFloat(
              dataString.substring(index + this.versionSearchString.length + 1)
            );
          },
          dataBrowser: [
            {
              string: navigator.userAgent,
              subString: "Chrome",
              identity: "Chrome",
            },
            {
              string: navigator.userAgent,
              subString: "OmniWeb",
              versionSearch: "OmniWeb/",
              identity: "OmniWeb",
            },
            {
              string: navigator.vendor,
              subString: "Apple",
              identity: "Safari",
              versionSearch: "Version",
            },
            {
              prop: window.opera,
              identity: "Opera",
            },
            {
              string: navigator.vendor,
              subString: "iCab",
              identity: "iCab",
            },
            {
              string: navigator.vendor,
              subString: "KDE",
              identity: "Konqueror",
            },
            {
              string: navigator.userAgent,
              subString: "Firefox",
              identity: "Firefox",
            },
            {
              string: navigator.vendor,
              subString: "Camino",
              identity: "Camino",
            },
            {
              // for newer Netscapes (6+)
              string: navigator.userAgent,
              subString: "Netscape",
              identity: "Netscape",
            },
            {
              string: navigator.userAgent,
              subString: "MSIE",
              identity: "Explorer",
              versionSearch: "MSIE",
            },
            {
              string: navigator.userAgent,
              subString: "Gecko",
              identity: "Mozilla",
              versionSearch: "rv",
            },
            {
              // for older Netscapes (4-)
              string: navigator.userAgent,
              subString: "Mozilla",
              identity: "Netscape",
              versionSearch: "Mozilla",
            },
          ],
          dataOS: [
            {
              string: navigator.platform,
              subString: "Win",
              identity: "Windows",
            },
            {
              string: navigator.platform,
              subString: "Mac",
              identity: "Mac OS",
            },
            {
              string: navigator.userAgent,
              subString: "iPhone",
              identity: "iPhone/iPod",
            },
            {
              string: navigator.platform,
              subString: "Linux",
              identity: "Linux",
            },
          ],
        };

        BrowserDetect.init();

        window.$.client = {
          os: BrowserDetect.OS,
          browser: BrowserDetect.browser,
        };
      })();

      $("#os").html("<b>" + $.client.os + "</b>");
      $("#browser").html("<b>" + $.client.browser + "</b>");
    </script>