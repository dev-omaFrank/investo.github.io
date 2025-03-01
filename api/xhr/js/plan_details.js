(async function() {
    try {
        const response = await fetch('./api/route/deposit.php');
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        const data = await response.json();

        if (data.status !== false) {
            let paymentAddress;
            switch (data.form_type) {
                case 'process_1000':
                    paymentAddress = 'btc address';
                    break;
                case 'process_1001':
                    paymentAddress = 'eth address';
                    break;
                case 'process_1003':
                    paymentAddress = 'usdt address';
                    break;
                default:
                    console.error(`Unknown form type: ${data.form_type}`);
                    break;
            }

            document.querySelector(".card-body").innerHTML = `
          Kindly make your payment with this address, COPY
          ${paymentAddress}<br><br>
          <div class="table-responsive">
            <table class="table table-striped table-bordered" cellspacing="0" cellpadding="2">
              <tbody>
                <tr>
                  <th>Plan:</th>
                  <td>${data.plan_duration}</td>
                </tr>

                <tr>
                  <th>Profit:</th>
                  <td>$${data.interest} after ${data.plan_duration}</td>
                </tr>

                <tr>
                  <th>Principal Return:</th>
                  <td>$${data.roi}</td>
                </tr>

                <tr>
                  <th>Principal Withdraw:</th>
                  <td>$${data.roi}</td>
                </tr>

                <tr>
                  <th>Credit Amount:</th>
                  <td>$${data.amount}</td>
                </tr>

                <tr>
                  <th>Deposit Fee:</th>
                  <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>

                <tr>
                  <th>Debit Amount:</th>
                  <td>$${data.amount}</td>
                </tr>

              </tbody>

            </table>

            <br><br>
                      <form id="depositForm" name="spend">
                        <input type="hidden" name="form_id" value="17278890722269">
                        <input type="hidden" name="form_token" value="76be0fbaae836447544a4784d07e0958">
                        <input type="hidden" name="a" value="deposit">
                        <input type="hidden" name="action" value="confirm">
                        <input type="hidden" name="type" value="process_1000">
                        <input type="hidden" name="h_id" value="2">
                        <input type="hidden" name="compound" value="0">
                        <input type="hidden" name="amount" value="1123.00">
                        <table cellspacing="0" cellpadding="2" border="0">
                          <tbody>
                            <tr>
                              <td colspan="2"><b>Required Information:</b></td>
                            </tr>
                            <tr>
                              <td>Sender Address</td>
                              <td><input type="text" name="payer_acc" value="" class="inpts"></td>
                            </tr>
                            <tr>
                              <td>Transaction ID</td>
                              <td><input type="text" name="trans_id" value="" class="inpts"></td>
                            </tr>
                          </tbody>
                        </table>
                        <br><button type="button" class="btn btn-primary px-4" name="deposit" value="Deposit">Deposit <i class="fas fa-sign-in-alt ml-1"></i></button> &nbsp; <input type="button" class="btn btn-primary px-4" value="Cancel" onclick="history.back()">
                      </form>
                    </div>
            `;

            const depositButton = document.querySelector('.btn.btn-primary');
            if (depositButton) {
                depositButton.addEventListener('click', (event) => {
                    const spend = new SendData('#depositForm', 'api/route/deposit.php', 'POST');
                    spend.submitMethod(event);
                });
            }
        }
    } catch (error) {
        console.error('Error encountered: ' + error);
    }
})();

class SendData {
    constructor(form, url, method) {
        this.form = document.querySelector(form);
        this.url = url;
        this.method = method;
        if (!this.form) {
            console.error('Form not found:', form);
            return;
        }
    }

    submitMethod(e) {
        e.preventDefault();
        var isValid = true;
        if (isValid) {
            (async() => {
                try {
                    const formData = new FormData(this.form);
                    const response = await fetch(this.url, {
                        method: this.method,
                        body: formData
                    });
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }

                    const data = await response.json();
                    if (data.status === false) {
                        Swal.fire({
                            title: "Error",
                            text: data.message,
                            icon: "error"
                        });
                    }
                    if (data.status === true) {
                        Swal.fire({
                            title: "Success",
                            text: data.message,
                            icon: "success"
                        });
                    }

                    if (data.url) {
                        window.location.href = data.url;
                    }
                } catch (error) {
                    console.error('Fetch Error:', error);
                }
            })();
        }
    }
}