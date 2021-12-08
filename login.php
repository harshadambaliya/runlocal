<?php
    include('include/header.php');
?>

<!-- Register Section Start -->
<section class="rl-register-section">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-12 col-lg-6 col-xl-5 mx-auto">
                <div class="rl-register-content">
                    <div class="rl-section-heading">
                        <h1 class="rl-section-title"><span>Sign In</span></h1>
                    </div>
                    <div class="rl-register-form">
                        <form class="row g-3">
                            <div class="col-md-12">
                                <div class="rl-input-group">
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="User Name" />
                                    <svg id="person_outline_black_24dp_1_" data-name="person_outline_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_406" data-name="Path 406" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_407" data-name="Path 407" d="M12,5.9A2.1,2.1,0,1,1,9.9,8,2.1,2.1,0,0,1,12,5.9m0,9c2.97,0,6.1,1.46,6.1,2.1v1.1H5.9V17c0-.64,3.13-2.1,6.1-2.1M12,4a4,4,0,1,0,4,4A4,4,0,0,0,12,4Zm0,9c-2.67,0-8,1.34-8,4v3H20V17C20,14.34,14.67,13,12,13Z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="rl-input-group">
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                    <svg id="vpn_key_black_24dp_2_" data-name="vpn_key_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2118" data-name="Path 2118" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2119" data-name="Path 2119" d="M22,19H16V15H13.32a7,7,0,1,1,0-6H24v6H22Zm-4-2h2V13h2V11H11.94l-.23-.67a5,5,0,1,0,0,3.34l.23-.67H18ZM7,15a3,3,0,1,1,3-3A3.009,3.009,0,0,1,7,15Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,7,11Z" fill="#1c1c1c"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-dark">Sign In</button>
                            </div>
                            <div class="col-12 text-center">
                                <p class="rl-form-notes">You have already an account? <a href="register.php">Register here</a></p>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>
<!-- Register Section End -->

<?php
    include('include/footer.php');
?>