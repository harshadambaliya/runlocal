<?php
    include('include/header.php');
?>

<!-- Product Details section Start -->
<section class="rl-checkout-section rl-slider-section">
    <div class="container">
        <div class="rl-checkout-section__inner">
            <div class="row">
                <div class="col col-12 col-md-12 col-lg-6">
                    <div class="rl-checkout-billing-content">
                        <div class="rl-product-detail-content">
                            <div class="rl-section-heading">
                                <h2 class="rl-section-title"><span>Billing Address</span></h2>
                            </div>
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Name">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Email id">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Mobile Number">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Address">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">City</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter City">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">State</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter State">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Pincode</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Pincode">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Order Notes</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Order Notes">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-12 col-lg-6">
                    <div class="rl-order-detail-content">
                        <div class="rl-section-heading">
                            <h2 class="rl-section-title"><span>Order Details</span></h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Qty.</th>
                                        <th scope="col">Price</th>
                                        <th scope="col" class="text-end">Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Product Name</td>
                                        <td>03</td>
                                        <td>$07</td>
                                        <td class="text-end">$21</td>
                                    </tr>
                                    <tr>
                                        <td>Product Name</td>
                                        <td>03</td>
                                        <td>$07</td>
                                        <td class="text-end">$21</td>
                                    </tr>
                                    <tr>
                                        <td>Product Name</td>
                                        <td>03</td>
                                        <td>$07</td>
                                        <td class="text-end">$21</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <th>Total</th>
                                        <td class="text-end">$63</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="rl-section-heading rl-order-subtitle">
                            <h2 class="rl-section-title"><span>Apply Coupon Code</span></h2>
                        </div>
                        <div class="rl-apply-coupon-codeinput">
                            <div class="input-group">
                                <input type="text" class="form-control" id="inputAmount" placeholder="Enter coupon code">
                                <button class="input-group-text btn btn-dark" id="basic-addon2">Apply Code</button>
                            </div>
                        </div>
                        <div class="rl-section-heading rl-order-subtitle">
                            <h2 class="rl-section-title"><span>Select Payment Type</span></h2>
                        </div>
                        <div class="rl-apply-coupon-codeinput">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Debit/Credit Caed
                                </label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-dark" type="submit">Proceed to Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details section End -->

<?php
    include('include/footer.php');
?>