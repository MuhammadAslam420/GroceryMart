<div>
    <section class="py-5 mb-5" style="background: url(images/background-pattern.jpg);">
        <div class="container-fluid">
          <div class="d-flex justify-content-between">
            <h1 class="page-title pb-2">Checkout</h1>
            <nav class="breadcrumb fs-6">
              <a class="breadcrumb-item nav-link" href="#">Home</a>
              <a class="breadcrumb-item nav-link" href="#">Pages</a>
              <span class="breadcrumb-item active" aria-current="page">Checkout</span>
            </nav>
          </div>
        </div>
      </section>
      <section class="shopify-cart checkout-wrap padding-large">
        <div class="container-fluid">
          <form class="form-group">
            <div class="row d-flex flex-wrap">
              <div class="col-lg-6">
                <h4 class="text-dark pb-4">Billing Details</h4>
                <div class="billing-details">
                  <label for="fname">First Name*</label>
                  <input type="text" id="fname" name="firstname" class="form-control mt-2 mb-4 ps-3">
                  <label for="lname">Last Name*</label>
                  <input type="text" id="lname" name="lastname" class="form-control mt-2 mb-4 ps-3">
                  <label for="cname">Company Name(optional)*</label>
                  <input type="text" id="cname" name="companyname" class="form-control mt-2 mb-4">
                  <label for="cname">Country / Region*</label>
                  <select class="form-select form-control mt-2 mb-4" aria-label="Default select example">
                    <option selected="" hidden="">United States</option>
                    <option value="1">UK</option>
                    <option value="2">Australia</option>
                    <option value="3">Canada</option>
                  </select>
                  <label for="address">Street Address*</label>
                  <input type="text" id="adr" name="address" placeholder="House number and street name" class="form-control mt-3 ps-3 mb-3">
                  <input type="text" id="adr" name="address" placeholder="Appartments, suite, etc." class="form-control ps-3 mb-4">
                  <label for="city">Town / City *</label>
                  <input type="text" id="city" name="city" class="form-control mt-3 ps-3 mb-4">
                  <label for="state">State *</label>
                  <select class="form-select form-control mt-2 mb-4" aria-label="Default select example">
                    <option selected="" hidden="">Florida</option>
                    <option value="1">New York</option>
                    <option value="2">Chicago</option>
                    <option value="3">Texas</option>
                    <option value="3">San Jose</option>
                    <option value="3">Houston</option>
                  </select>
                  <label for="zip">Zip Code *</label>
                  <input type="text" id="zip" name="zip" class="form-control mt-2 mb-4 ps-3">
                  <label for="email">Phone *</label>
                  <input type="text" id="phone" name="phone" class="form-control mt-2 mb-4 ps-3">
                  <label for="email">Email address *</label>
                  <input type="text" id="email" name="email" class="form-control mt-2 mb-4 ps-3">
                </div>
              </div>
              <div class="col-lg-6">
                <h4 class="text-dark pb-4">Additional Information</h4>
                <div class="billing-details">
                  <label for="fname">Order notes (optional)</label>
                  <textarea class="form-control pt-3 pb-3 ps-3 mt-2" placeholder="Notes about your order. Like special notes for delivery."></textarea>
                </div>
                <div class="your-order mt-5">
                  <h4 class="display-7 text-dark pb-4">Cart Totals</h4>
                  <div class="total-price">
                    <table cellspacing="0" class="table">
                      <tbody>
                        <tr class="subtotal border-top border-bottom pt-2 pb-2 text-uppercase">
                          <th>Subtotal</th>
                          <td data-title="Subtotal">
                            <span class="price-amount amount ps-5">
                              <bdi>
                                <span class="price-currency-symbol">$</span>2,370.00 </bdi>
                            </span>
                          </td>
                        </tr>
                        <tr class="order-total border-bottom pt-2 pb-2 text-uppercase">
                          <th>Total</th>
                          <td data-title="Total">
                            <span class="price-amount amount ps-5">
                              <bdi>
                                <span class="price-currency-symbol">$</span>2,370.00 </bdi>
                            </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="list-group mt-5 mb-3">
                      <label class="list-group-item d-flex gap-2 border-0">
                        <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios1" value="" checked="">
                        <span>
                          <strong class="text-uppercase">Direct bank transfer</strong>
                          <small class="d-block text-body-secondary">Make your payment directly into our bank account. Please use your Order ID. Your order will shipped after funds have cleared in our account.</small>
                        </span>
                      </label>
                      <label class="list-group-item d-flex gap-2 border-0">
                        <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios2" value="">
                        <span>
                          <strong class="text-uppercase">Check payments</strong>
                          <small class="d-block text-body-secondary">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</small>
                        </span>
                      </label>
                      <label class="list-group-item d-flex gap-2 border-0">
                        <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios3" value="">
                        <span>
                          <strong class="text-uppercase">Cash on delivery</strong>
                          <small class="d-block text-body-secondary">Pay with cash upon delivery.</small>
                        </span>
                      </label>
                      <label class="list-group-item d-flex gap-2 border-0">
                        <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios3" value="">
                        <span>
                          <strong class="text-uppercase">Paypal</strong>
                          <small class="d-block text-body-secondary">Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</small>
                        </span>
                      </label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-dark btn-lg text-uppercase btn-rounded-none w-100">Place an order</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </section>
</div>
