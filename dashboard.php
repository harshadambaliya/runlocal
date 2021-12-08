<?php
    include('include/header.php');
?>

<!-- Dashboard Section Start -->
<div class="position-relative marquee-container d-none d-sm-block">
    <div class="marquee d-flex justify-content-around">
        <span>REFER AND EARN!</span>
        <span>REFER AND EARN!</span>
        <span>REFER AND EARN!</span>
        <span>REFER AND EARN!</span>
    </div>
    <div class="marquee marquee2 d-flex justify-content-around">
        <span>REFER AND EARN!</span>
        <span>REFER AND EARN!</span>
        <span>REFER AND EARN!</span>
        <span>REFER AND EARN!</span>
    </div>
</div>
<!-- Dashboard Section Start -->

<!-- Dashboard Section Start -->
<section class="rl-dashboard-section">
    <div class="rl-dashboard-menu">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-dashboard-tab" data-bs-toggle="tab" data-bs-target="#nav-dashboard" type="button" role="tab" aria-controls="nav-dashboard" aria-selected="true">Dashboard</button>

                <button class="nav-link" id="nav-orders-tab" data-bs-toggle="tab" data-bs-target="#nav-orders" type="button" role="tab" aria-controls="nav-orders" aria-selected="false">Orders</button>

                <a href="add-product.php" class="nav-link">Products</a>

                <a href="offers.php" class="nav-link">Offers</a>
            </div>
        </nav>
        <ul class="user-menu-list">
            <li class="user-menu-item">
                <a href="dashboard.php" class="user-menu-link">
                    <svg id="home_black_24dp" xmlns="http://www.w3.org/2000/svg" width="30.113" height="30.113" viewBox="0 0 30.113 30.113">
                        <path id="Path_2118" data-name="Path 2118" d="M0,0H30.113V30.113H0Z" fill="none"/>
                        <path id="Path_2119" data-name="Path 2119" d="M14.547,6.375l6.274,5.646v9.8H18.311V14.292H10.783v7.528H8.274v-9.8l6.274-5.646m0-3.375L2,14.292H5.764V24.33h7.528V16.8H15.8V24.33H23.33V14.292h3.764Z" transform="translate(0.509 0.764)" fill="#fff"/>
                    </svg>
                </a>
            </li>
            <li class="user-menu-item">
                <a href="#" class="user-menu-link">
                    <svg id="language_black_24dp" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                        <path id="Path_2097" data-name="Path 2097" d="M0,0H30V30H0Z" fill="none"/>
                        <path id="Path_2098" data-name="Path 2098" d="M14.987,2A13,13,0,1,0,28,15,12.994,12.994,0,0,0,14.987,2ZM24,9.8H20.161a20.344,20.344,0,0,0-1.794-4.628A10.439,10.439,0,0,1,24,9.8ZM15,4.652A18.313,18.313,0,0,1,17.483,9.8H12.517A18.313,18.313,0,0,1,15,4.652ZM4.938,17.6a10.169,10.169,0,0,1,0-5.2H9.332A21.47,21.47,0,0,0,9.15,15a21.47,21.47,0,0,0,.182,2.6ZM6,20.2H9.839a20.344,20.344,0,0,0,1.794,4.628A10.383,10.383,0,0,1,6,20.2ZM9.839,9.8H6a10.383,10.383,0,0,1,5.629-4.628A20.344,20.344,0,0,0,9.839,9.8ZM15,25.348A18.313,18.313,0,0,1,12.517,20.2h4.966A18.313,18.313,0,0,1,15,25.348ZM18.042,17.6H11.958A19.127,19.127,0,0,1,11.75,15a18.961,18.961,0,0,1,.208-2.6h6.084A18.96,18.96,0,0,1,18.25,15,19.126,19.126,0,0,1,18.042,17.6Zm.325,7.228A20.344,20.344,0,0,0,20.161,20.2H24A10.439,10.439,0,0,1,18.367,24.828Zm2.3-7.228A21.469,21.469,0,0,0,20.85,15a21.469,21.469,0,0,0-.182-2.6h4.394a10.169,10.169,0,0,1,0,5.2Z" transform="translate(0 0)" fill="#fff"/>
                    </svg>
                </a>
            </li>
            <li class="user-menu-item user-notification-item">
                <div class="dropdown">
                    <span class="dropdown-toggle user-menu-link rl-user-profile" type="button" id="dropdownnotification" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg id="notifications_black_24dp_1_" data-name="notifications_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                            <path id="Path_2101" data-name="Path 2101" d="M0,0H30V30H0Z" fill="none"/>
                            <path id="Path_2102" data-name="Path 2102" d="M15,28a2.693,2.693,0,0,0,2.75-2.615h-5.5A2.693,2.693,0,0,0,15,28Zm8.25-7.846V13.615c0-4.015-2.241-7.375-6.188-8.265V4.462a2.065,2.065,0,0,0-4.125,0v.889C9,6.24,6.75,9.588,6.75,13.615v6.538L4,22.769v1.308H26V22.769ZM20.5,21.462H9.5V13.615c0-3.243,2.076-5.885,5.5-5.885s5.5,2.642,5.5,5.885Z" transform="translate(0 0)" fill="#fff"/>
                        </svg>
                    </span>
                    <div class="dropdown-menu" aria-labelledby="dropdownnotification">
                        <div class="rl-dropdown-notification">
                            <div class="rl-notification-content">
                                <div class="rl-notification__inner">
                                    <a href="#" class="rl-notification-text">Lorem ipsum dolor sit, amet consectetur...</a>
                                    <div class="rl-notification-time">
                                        <span>04:23 PM</span>
                                        <span>18 Oct 2021</span>
                                    </div>
                                </div>
                                <div class="rl-notification__inner">
                                    <a href="#" class="rl-notification-text">Lorem ipsum dolor sit, amet consectetur...</a>
                                    <div class="rl-notification-time">
                                        <span>04:23 PM</span>
                                        <span>18 Oct 2021</span>
                                    </div>
                                </div>
                                <div class="rl-notification__inner">
                                    <a href="#" class="rl-notification-text">Lorem ipsum dolor sit, amet consectetur...</a>
                                    <div class="rl-notification-time">
                                        <span>04:23 PM</span>
                                        <span>18 Oct 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="user-menu-item">
                <a href="profile.php#nav-settings" class="user-menu-link">
                    <svg id="settings_black_24dp_1_" data-name="settings_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="29.981" height="29.981" viewBox="0 0 29.981 29.981">
                        <path id="Path_2126" data-name="Path 2126" d="M0,0H29.981V29.981H0Z" fill="none"/>
                        <path id="Path_2127" data-name="Path 2127" d="M23.706,15.716a9.735,9.735,0,0,0,.087-1.224,9.735,9.735,0,0,0-.087-1.224l2.636-2.061a.63.63,0,0,0,.15-.8l-2.5-4.322a.624.624,0,0,0-.55-.312.584.584,0,0,0-.212.037l-3.11,1.249A9.127,9.127,0,0,0,18.01,5.835l-.475-3.31A.609.609,0,0,0,16.923,2h-5a.609.609,0,0,0-.612.525l-.475,3.31A9.6,9.6,0,0,0,8.728,7.059L5.618,5.81a.707.707,0,0,0-.225-.037.619.619,0,0,0-.537.312l-2.5,4.322a.616.616,0,0,0,.15.8l2.636,2.061a9.907,9.907,0,0,0-.087,1.224,9.907,9.907,0,0,0,.087,1.224L2.507,17.777a.63.63,0,0,0-.15.8l2.5,4.322a.624.624,0,0,0,.55.312.584.584,0,0,0,.212-.037l3.11-1.249a9.127,9.127,0,0,0,2.111,1.224l.475,3.31a.609.609,0,0,0,.612.525h5a.609.609,0,0,0,.612-.525l.475-3.31a9.6,9.6,0,0,0,2.111-1.224l3.11,1.249a.707.707,0,0,0,.225.037.619.619,0,0,0,.537-.312l2.5-4.322a.63.63,0,0,0-.15-.8ZM21.233,13.58a6.674,6.674,0,0,1,.062.912c0,.262-.025.537-.062.912l-.175,1.412,1.112.874,1.349,1.049-.874,1.512-1.586-.637-1.3-.525-1.124.849a7.316,7.316,0,0,1-1.561.912l-1.324.537-.2,1.412-.25,1.686H13.55L13.313,22.8l-.2-1.412-1.324-.537a7.088,7.088,0,0,1-1.537-.887l-1.137-.874-1.324.537L6.2,20.263,5.33,18.752,6.68,17.7l1.112-.874-.175-1.412c-.037-.387-.062-.675-.062-.924s.025-.537.062-.912l.175-1.412L6.68,11.294,5.33,10.245,6.2,8.733l1.586.637,1.3.525,1.124-.849a7.316,7.316,0,0,1,1.561-.912L13.1,7.6l.2-1.412L13.55,4.5h1.736l.237,1.686.2,1.412,1.324.537a7.088,7.088,0,0,1,1.537.887l1.137.874,1.324-.537,1.586-.637.874,1.512L22.17,11.294l-1.112.874.175,1.412ZM14.425,9.5a5,5,0,1,0,5,5A5,5,0,0,0,14.425,9.5Zm0,7.5a2.5,2.5,0,1,1,2.5-2.5A2.506,2.506,0,0,1,14.425,16.99Z" transform="translate(0.566 0.498)" fill="#fff"/>
                    </svg>
                </a>
            </li>
            <li class="user-menu-item">
                <div class="dropdown">
                    <span class="dropdown-toggle user-menu-link rl-user-profile" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/profile-img.jpg" alt="profile-img" class="img-fluid">
                    </span>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="profile.php">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="profile.php">Setting</a></li>
                        <li><a class="dropdown-item" href="#">Log Out</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="rl-dashboard-content">
        <div class="tab-content" id="nav-tabContent">

            <!-- Dashboard Content Start -->
            <div class="tab-pane fade show active" id="nav-dashboard" role="tabpanel" aria-labelledby="nav-dashboard-tab">
                <div class="rl-dashboard-content__inner">
                    <div class="row">
                        <div class="order-2 order-md-2 order-lg-1 col col-12 col-md-12 col-lg-6 col-xl-4">
                            <div class="rl-dashboard-card">
                                <label class="rl-dashboard-card-label">Sales</label>
                                <h3 class="rl-dashboard-card-title">₹ 985499</h3>
                                <p class="rl-dashboard-card-description">Last 30 Days</p>
                                <canvas id="salesChart" style=" height: 115px !important;"></canvas>
                            </div>
                        </div>
                        <div class="order-3 order-md-3 order-lg-2 col col-12 col-md-12 col-lg-6 col-xl-4">
                            <div class="rl-dashboard-card">
                                <label class="rl-dashboard-card-label">Views</label>
                                <h3 class="rl-dashboard-card-title">699</h3>
                                <p class="rl-dashboard-card-description">Last 30 Days</p>
                                <canvas id="viewsChart"></canvas>
                            </div>
                        </div>
                        <div class="order-1 order-md-1 order-lg-3 col col-12 col-md-12 col-lg-12 col-xl-4 ">
                            <div class="rl-dashboard-card rl-dashboard-wallet-card">
                                <div class="rl-dashboard-wallet-details">
                                    <div class="rl-dashboard-wallet">
                                        <label class="rl-dashboard-card-label">Wallet Details</label>
                                        <h3 class="rl-dashboard-card-title">₹ 999</h3>
                                    </div>
                                </div>
                                <div class="rl-dashboard-wallet-btn">
                                    <a href="#" class="btn btn-dark">
                                        View History
                                        <svg id="arrow_right_alt_black_24dp" xmlns="http://www.w3.org/2000/svg" width="39.281" height="39.281" viewBox="0 0 29.281 39.281">
                                            <path id="Path_2" data-name="Path 2" d="M23.657,12.91H4v3.273H23.657v4.91l6.531-6.547L23.657,8Z" transform="translate(2.547 5.094)" fill="#fff"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="order-4 order-md-4 order-lg-4 col col-12 col-md-12 col-lg-6 col-xl-4">
                            <div class="rl-dashboard-card">
                                <label class="rl-dashboard-card-label">Loyalty points given</label>
                                <h3 class="rl-dashboard-card-title">599</h3>
                                <p class="rl-dashboard-card-description">Last 30 Days</p>
                                <canvas id="loyaltyPointsChart"></canvas>
                            </div>
                        </div>
                        <div class="order-5 order-md-5 order-lg-5 col col-12 col-md-12 col-lg-6 col-xl-4">
                            <div class="rl-dashboard-card">
                                <label class="rl-dashboard-card-label">Vouchers redeemed</label>
                                <h3 class="rl-dashboard-card-title">9857</h3>
                                <p class="rl-dashboard-card-description">Last 30 Days</p>
                                <canvas id="vouchersRedeemed"></canvas>
                            </div>
                        </div>
                        <div class="order-6 order-md-6 order-lg-6 col col-12 col-md-12 col-lg-12 col-xl-4 ">
                            <div class="rl-dashboard-card rl-dashboard-SellRunlokla-card">
                                <div class="rl-dashboard-wallet-details">
                                    <div class="rl-dashboard-wallet">
                                        <label class="rl-dashboard-card-label">Sell with runlokal</label>
                                    </div>
                                </div>
                                <div class="rl-dashboard-wallet-btn">
                                    <a href="#" class="btn btn-dark w-100">
                                        Regsiter yourself now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 col-md-12 col-lg-6">
                            <div class="rl-dashboard-card">
                                <div class="rl-dashboard-wallet-details mb-2">
                                    <div class="rl-dashboard-wallet">
                                        <label class="rl-dashboard-card-label">Businesss</label>
                                    </div>
                                    <div class="rl-dashboard-wallet rl-dashboard-wallet-btn .btn">
                                        <button type="button" class="btn btn-dark">
                                            <svg id="file_download_black_24dp_4_" data-name="file_download_black_24dp (4)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <g id="Group_1424" data-name="Group 1424">
                                                    <rect id="Rectangle_248" data-name="Rectangle 248" width="24" height="24" fill="none"/>
                                                </g>
                                                <g id="Group_1425" data-name="Group 1425">
                                                    <path id="Path_2080" data-name="Path 2080" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#fff"/>
                                                </g>
                                            </svg>
                                            <span>Export All Data</span>
                                        </button>
                                    </div>
                                </div>
                                <canvas id="businesssChart"></canvas>
                                <input type="date" id="startdate" value="2021-08-25">
                                <input type="date" onchange="filterData()" id="enddate" value="2021-08-31">
                            </div>
                        </div>
                        <div class="col col-12 col-md-12 col-lg-6">
                            <div class="rl-dashboard-card">
                                <label class="rl-dashboard-card-label">Fast moving products</label>
                                <canvas id="fastProductsChart"></canvas>
                            </div>
                        </div>
                        <div class="col col-12 col-md-12 col-lg-6">
                            <div class="rl-dashboard-card">
                                <label class="rl-dashboard-card-label">Repeat vs fresh users</label>
                                <div class="rl-repeat-fresh-user">
                                    <div class="rl-repeat-fresh-user__inner">
                                        <h3 class="rl-dashboard-card-title">599</h3>
                                        <label class="rl-dashboard-card-label">Fresh Users</label>
                                    </div>
                                    <div class="rl-repeat-fresh-user__inner">
                                        <h3 class="rl-dashboard-card-title">599</h3>
                                        <label class="rl-dashboard-card-label">Repeat Users</label>
                                    </div>
                                </div>
                                <canvas id="repeatFreshUserChart" style="height: 300px;"></canvas>
                            </div>
                        </div>
                        <div class="col col-12 col-md-12 col-lg-6">
                            <div class="rl-dashboard-card">
                                <label class="rl-dashboard-card-label">Top leading customers</label>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Total Points</th>
                                            <th scope="col">Contact No.</th>
                                            <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Barnes Bell</td>
                                                <td>800</td>
                                                <td>9876543210</td>
                                                <td>
                                                    <ul class="rl-contact-list">
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="whatsapp_black_24dp_1_" data-name="whatsapp_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <g id="Group_1496" data-name="Group 1496">
                                                                        <rect id="Rectangle_255" data-name="Rectangle 255" width="24" height="24" fill="none"/>
                                                                    </g>
                                                                    <g id="Group_1499" data-name="Group 1499">
                                                                        <g id="Group_1498" data-name="Group 1498">
                                                                        <g id="Group_1497" data-name="Group 1497">
                                                                            <path id="Path_2109" data-name="Path 2109" d="M19.05,4.91A9.816,9.816,0,0,0,12.04,2,9.917,9.917,0,0,0,3.45,16.86L2.05,22,7.3,20.62a9.913,9.913,0,0,0,4.74,1.21h0A9.914,9.914,0,0,0,19.05,4.91ZM12.04,20.15h0A8.262,8.262,0,0,1,7.84,19l-.3-.18-3.12.82.83-3.04-.2-.31A8.241,8.241,0,0,1,12.03,3.67a8.24,8.24,0,0,1,.01,16.48Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81s-.39-.12-.56.12-.64.81-.78.97-.29.19-.54.06A6.663,6.663,0,0,1,11,13.1a7.566,7.566,0,0,1-1.38-1.72c-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43a1.733,1.733,0,0,0,.25-.41.459.459,0,0,0-.02-.43c-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43H8.53a.9.9,0,0,0-.66.31,2.821,2.821,0,0,0-.86,2.07,4.817,4.817,0,0,0,1.01,2.56,10.978,10.978,0,0,0,4.23,3.74,12.1,12.1,0,0,0,1.41.52,3.426,3.426,0,0,0,1.56.1,2.518,2.518,0,0,0,1.67-1.18,1.954,1.954,0,0,0,.14-1.18C16.96,14.16,16.81,14.11,16.56,13.99Z"/>
                                                                        </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="chat_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2110" data-name="Path 2110" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2111" data-name="Path 2111" d="M4,4H20V16H5.17L4,17.17V4M4,2A2,2,0,0,0,2.01,4L2,22l4-4H20a2.006,2.006,0,0,0,2-2V4a2.006,2.006,0,0,0-2-2ZM6,12h8v2H6ZM6,9H18v2H6ZM6,6H18V8H6Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="mail_black_24dp_1_" data-name="mail_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2112" data-name="Path 2112" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2113" data-name="Path 2113" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Barnes Bell</td>
                                                <td>800</td>
                                                <td>9876543210</td>
                                                <td>
                                                    <ul class="rl-contact-list">
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="whatsapp_black_24dp_1_" data-name="whatsapp_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <g id="Group_1496" data-name="Group 1496">
                                                                        <rect id="Rectangle_255" data-name="Rectangle 255" width="24" height="24" fill="none"/>
                                                                    </g>
                                                                    <g id="Group_1499" data-name="Group 1499">
                                                                        <g id="Group_1498" data-name="Group 1498">
                                                                        <g id="Group_1497" data-name="Group 1497">
                                                                            <path id="Path_2109" data-name="Path 2109" d="M19.05,4.91A9.816,9.816,0,0,0,12.04,2,9.917,9.917,0,0,0,3.45,16.86L2.05,22,7.3,20.62a9.913,9.913,0,0,0,4.74,1.21h0A9.914,9.914,0,0,0,19.05,4.91ZM12.04,20.15h0A8.262,8.262,0,0,1,7.84,19l-.3-.18-3.12.82.83-3.04-.2-.31A8.241,8.241,0,0,1,12.03,3.67a8.24,8.24,0,0,1,.01,16.48Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81s-.39-.12-.56.12-.64.81-.78.97-.29.19-.54.06A6.663,6.663,0,0,1,11,13.1a7.566,7.566,0,0,1-1.38-1.72c-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43a1.733,1.733,0,0,0,.25-.41.459.459,0,0,0-.02-.43c-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43H8.53a.9.9,0,0,0-.66.31,2.821,2.821,0,0,0-.86,2.07,4.817,4.817,0,0,0,1.01,2.56,10.978,10.978,0,0,0,4.23,3.74,12.1,12.1,0,0,0,1.41.52,3.426,3.426,0,0,0,1.56.1,2.518,2.518,0,0,0,1.67-1.18,1.954,1.954,0,0,0,.14-1.18C16.96,14.16,16.81,14.11,16.56,13.99Z"/>
                                                                        </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="chat_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2110" data-name="Path 2110" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2111" data-name="Path 2111" d="M4,4H20V16H5.17L4,17.17V4M4,2A2,2,0,0,0,2.01,4L2,22l4-4H20a2.006,2.006,0,0,0,2-2V4a2.006,2.006,0,0,0-2-2ZM6,12h8v2H6ZM6,9H18v2H6ZM6,6H18V8H6Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="mail_black_24dp_1_" data-name="mail_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2112" data-name="Path 2112" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2113" data-name="Path 2113" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Barnes Bell</td>
                                                <td>800</td>
                                                <td>9876543210</td>
                                                <td>
                                                    <ul class="rl-contact-list">
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="whatsapp_black_24dp_1_" data-name="whatsapp_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <g id="Group_1496" data-name="Group 1496">
                                                                        <rect id="Rectangle_255" data-name="Rectangle 255" width="24" height="24" fill="none"/>
                                                                    </g>
                                                                    <g id="Group_1499" data-name="Group 1499">
                                                                        <g id="Group_1498" data-name="Group 1498">
                                                                        <g id="Group_1497" data-name="Group 1497">
                                                                            <path id="Path_2109" data-name="Path 2109" d="M19.05,4.91A9.816,9.816,0,0,0,12.04,2,9.917,9.917,0,0,0,3.45,16.86L2.05,22,7.3,20.62a9.913,9.913,0,0,0,4.74,1.21h0A9.914,9.914,0,0,0,19.05,4.91ZM12.04,20.15h0A8.262,8.262,0,0,1,7.84,19l-.3-.18-3.12.82.83-3.04-.2-.31A8.241,8.241,0,0,1,12.03,3.67a8.24,8.24,0,0,1,.01,16.48Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81s-.39-.12-.56.12-.64.81-.78.97-.29.19-.54.06A6.663,6.663,0,0,1,11,13.1a7.566,7.566,0,0,1-1.38-1.72c-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43a1.733,1.733,0,0,0,.25-.41.459.459,0,0,0-.02-.43c-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43H8.53a.9.9,0,0,0-.66.31,2.821,2.821,0,0,0-.86,2.07,4.817,4.817,0,0,0,1.01,2.56,10.978,10.978,0,0,0,4.23,3.74,12.1,12.1,0,0,0,1.41.52,3.426,3.426,0,0,0,1.56.1,2.518,2.518,0,0,0,1.67-1.18,1.954,1.954,0,0,0,.14-1.18C16.96,14.16,16.81,14.11,16.56,13.99Z"/>
                                                                        </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="chat_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2110" data-name="Path 2110" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2111" data-name="Path 2111" d="M4,4H20V16H5.17L4,17.17V4M4,2A2,2,0,0,0,2.01,4L2,22l4-4H20a2.006,2.006,0,0,0,2-2V4a2.006,2.006,0,0,0-2-2ZM6,12h8v2H6ZM6,9H18v2H6ZM6,6H18V8H6Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="mail_black_24dp_1_" data-name="mail_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2112" data-name="Path 2112" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2113" data-name="Path 2113" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Barnes Bell</td>
                                                <td>800</td>
                                                <td>9876543210</td>
                                                <td>
                                                    <ul class="rl-contact-list">
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="whatsapp_black_24dp_1_" data-name="whatsapp_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <g id="Group_1496" data-name="Group 1496">
                                                                        <rect id="Rectangle_255" data-name="Rectangle 255" width="24" height="24" fill="none"/>
                                                                    </g>
                                                                    <g id="Group_1499" data-name="Group 1499">
                                                                        <g id="Group_1498" data-name="Group 1498">
                                                                        <g id="Group_1497" data-name="Group 1497">
                                                                            <path id="Path_2109" data-name="Path 2109" d="M19.05,4.91A9.816,9.816,0,0,0,12.04,2,9.917,9.917,0,0,0,3.45,16.86L2.05,22,7.3,20.62a9.913,9.913,0,0,0,4.74,1.21h0A9.914,9.914,0,0,0,19.05,4.91ZM12.04,20.15h0A8.262,8.262,0,0,1,7.84,19l-.3-.18-3.12.82.83-3.04-.2-.31A8.241,8.241,0,0,1,12.03,3.67a8.24,8.24,0,0,1,.01,16.48Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81s-.39-.12-.56.12-.64.81-.78.97-.29.19-.54.06A6.663,6.663,0,0,1,11,13.1a7.566,7.566,0,0,1-1.38-1.72c-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43a1.733,1.733,0,0,0,.25-.41.459.459,0,0,0-.02-.43c-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43H8.53a.9.9,0,0,0-.66.31,2.821,2.821,0,0,0-.86,2.07,4.817,4.817,0,0,0,1.01,2.56,10.978,10.978,0,0,0,4.23,3.74,12.1,12.1,0,0,0,1.41.52,3.426,3.426,0,0,0,1.56.1,2.518,2.518,0,0,0,1.67-1.18,1.954,1.954,0,0,0,.14-1.18C16.96,14.16,16.81,14.11,16.56,13.99Z"/>
                                                                        </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="chat_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2110" data-name="Path 2110" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2111" data-name="Path 2111" d="M4,4H20V16H5.17L4,17.17V4M4,2A2,2,0,0,0,2.01,4L2,22l4-4H20a2.006,2.006,0,0,0,2-2V4a2.006,2.006,0,0,0-2-2ZM6,12h8v2H6ZM6,9H18v2H6ZM6,6H18V8H6Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="mail_black_24dp_1_" data-name="mail_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2112" data-name="Path 2112" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2113" data-name="Path 2113" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Barnes Bell</td>
                                                <td>800</td>
                                                <td>9876543210</td>
                                                <td>
                                                    <ul class="rl-contact-list">
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="whatsapp_black_24dp_1_" data-name="whatsapp_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <g id="Group_1496" data-name="Group 1496">
                                                                        <rect id="Rectangle_255" data-name="Rectangle 255" width="24" height="24" fill="none"/>
                                                                    </g>
                                                                    <g id="Group_1499" data-name="Group 1499">
                                                                        <g id="Group_1498" data-name="Group 1498">
                                                                        <g id="Group_1497" data-name="Group 1497">
                                                                            <path id="Path_2109" data-name="Path 2109" d="M19.05,4.91A9.816,9.816,0,0,0,12.04,2,9.917,9.917,0,0,0,3.45,16.86L2.05,22,7.3,20.62a9.913,9.913,0,0,0,4.74,1.21h0A9.914,9.914,0,0,0,19.05,4.91ZM12.04,20.15h0A8.262,8.262,0,0,1,7.84,19l-.3-.18-3.12.82.83-3.04-.2-.31A8.241,8.241,0,0,1,12.03,3.67a8.24,8.24,0,0,1,.01,16.48Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81s-.39-.12-.56.12-.64.81-.78.97-.29.19-.54.06A6.663,6.663,0,0,1,11,13.1a7.566,7.566,0,0,1-1.38-1.72c-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43a1.733,1.733,0,0,0,.25-.41.459.459,0,0,0-.02-.43c-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43H8.53a.9.9,0,0,0-.66.31,2.821,2.821,0,0,0-.86,2.07,4.817,4.817,0,0,0,1.01,2.56,10.978,10.978,0,0,0,4.23,3.74,12.1,12.1,0,0,0,1.41.52,3.426,3.426,0,0,0,1.56.1,2.518,2.518,0,0,0,1.67-1.18,1.954,1.954,0,0,0,.14-1.18C16.96,14.16,16.81,14.11,16.56,13.99Z"/>
                                                                        </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="chat_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2110" data-name="Path 2110" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2111" data-name="Path 2111" d="M4,4H20V16H5.17L4,17.17V4M4,2A2,2,0,0,0,2.01,4L2,22l4-4H20a2.006,2.006,0,0,0,2-2V4a2.006,2.006,0,0,0-2-2ZM6,12h8v2H6ZM6,9H18v2H6ZM6,6H18V8H6Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="mail_black_24dp_1_" data-name="mail_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2112" data-name="Path 2112" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2113" data-name="Path 2113" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Barnes Bell</td>
                                                <td>800</td>
                                                <td>9876543210</td>
                                                <td>
                                                    <ul class="rl-contact-list">
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="whatsapp_black_24dp_1_" data-name="whatsapp_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <g id="Group_1496" data-name="Group 1496">
                                                                        <rect id="Rectangle_255" data-name="Rectangle 255" width="24" height="24" fill="none"/>
                                                                    </g>
                                                                    <g id="Group_1499" data-name="Group 1499">
                                                                        <g id="Group_1498" data-name="Group 1498">
                                                                        <g id="Group_1497" data-name="Group 1497">
                                                                            <path id="Path_2109" data-name="Path 2109" d="M19.05,4.91A9.816,9.816,0,0,0,12.04,2,9.917,9.917,0,0,0,3.45,16.86L2.05,22,7.3,20.62a9.913,9.913,0,0,0,4.74,1.21h0A9.914,9.914,0,0,0,19.05,4.91ZM12.04,20.15h0A8.262,8.262,0,0,1,7.84,19l-.3-.18-3.12.82.83-3.04-.2-.31A8.241,8.241,0,0,1,12.03,3.67a8.24,8.24,0,0,1,.01,16.48Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81s-.39-.12-.56.12-.64.81-.78.97-.29.19-.54.06A6.663,6.663,0,0,1,11,13.1a7.566,7.566,0,0,1-1.38-1.72c-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43a1.733,1.733,0,0,0,.25-.41.459.459,0,0,0-.02-.43c-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43H8.53a.9.9,0,0,0-.66.31,2.821,2.821,0,0,0-.86,2.07,4.817,4.817,0,0,0,1.01,2.56,10.978,10.978,0,0,0,4.23,3.74,12.1,12.1,0,0,0,1.41.52,3.426,3.426,0,0,0,1.56.1,2.518,2.518,0,0,0,1.67-1.18,1.954,1.954,0,0,0,.14-1.18C16.96,14.16,16.81,14.11,16.56,13.99Z"/>
                                                                        </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="chat_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2110" data-name="Path 2110" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2111" data-name="Path 2111" d="M4,4H20V16H5.17L4,17.17V4M4,2A2,2,0,0,0,2.01,4L2,22l4-4H20a2.006,2.006,0,0,0,2-2V4a2.006,2.006,0,0,0-2-2ZM6,12h8v2H6ZM6,9H18v2H6ZM6,6H18V8H6Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="mail_black_24dp_1_" data-name="mail_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2112" data-name="Path 2112" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2113" data-name="Path 2113" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Barnes Bell</td>
                                                <td>800</td>
                                                <td>9876543210</td>
                                                <td>
                                                    <ul class="rl-contact-list">
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="whatsapp_black_24dp_1_" data-name="whatsapp_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <g id="Group_1496" data-name="Group 1496">
                                                                        <rect id="Rectangle_255" data-name="Rectangle 255" width="24" height="24" fill="none"/>
                                                                    </g>
                                                                    <g id="Group_1499" data-name="Group 1499">
                                                                        <g id="Group_1498" data-name="Group 1498">
                                                                        <g id="Group_1497" data-name="Group 1497">
                                                                            <path id="Path_2109" data-name="Path 2109" d="M19.05,4.91A9.816,9.816,0,0,0,12.04,2,9.917,9.917,0,0,0,3.45,16.86L2.05,22,7.3,20.62a9.913,9.913,0,0,0,4.74,1.21h0A9.914,9.914,0,0,0,19.05,4.91ZM12.04,20.15h0A8.262,8.262,0,0,1,7.84,19l-.3-.18-3.12.82.83-3.04-.2-.31A8.241,8.241,0,0,1,12.03,3.67a8.24,8.24,0,0,1,.01,16.48Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81s-.39-.12-.56.12-.64.81-.78.97-.29.19-.54.06A6.663,6.663,0,0,1,11,13.1a7.566,7.566,0,0,1-1.38-1.72c-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43a1.733,1.733,0,0,0,.25-.41.459.459,0,0,0-.02-.43c-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43H8.53a.9.9,0,0,0-.66.31,2.821,2.821,0,0,0-.86,2.07,4.817,4.817,0,0,0,1.01,2.56,10.978,10.978,0,0,0,4.23,3.74,12.1,12.1,0,0,0,1.41.52,3.426,3.426,0,0,0,1.56.1,2.518,2.518,0,0,0,1.67-1.18,1.954,1.954,0,0,0,.14-1.18C16.96,14.16,16.81,14.11,16.56,13.99Z"/>
                                                                        </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="chat_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2110" data-name="Path 2110" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2111" data-name="Path 2111" d="M4,4H20V16H5.17L4,17.17V4M4,2A2,2,0,0,0,2.01,4L2,22l4-4H20a2.006,2.006,0,0,0,2-2V4a2.006,2.006,0,0,0-2-2ZM6,12h8v2H6ZM6,9H18v2H6ZM6,6H18V8H6Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="mail_black_24dp_1_" data-name="mail_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2112" data-name="Path 2112" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2113" data-name="Path 2113" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Barnes Bell</td>
                                                <td>800</td>
                                                <td>9876543210</td>
                                                <td>
                                                    <ul class="rl-contact-list">
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="whatsapp_black_24dp_1_" data-name="whatsapp_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <g id="Group_1496" data-name="Group 1496">
                                                                        <rect id="Rectangle_255" data-name="Rectangle 255" width="24" height="24" fill="none"/>
                                                                    </g>
                                                                    <g id="Group_1499" data-name="Group 1499">
                                                                        <g id="Group_1498" data-name="Group 1498">
                                                                        <g id="Group_1497" data-name="Group 1497">
                                                                            <path id="Path_2109" data-name="Path 2109" d="M19.05,4.91A9.816,9.816,0,0,0,12.04,2,9.917,9.917,0,0,0,3.45,16.86L2.05,22,7.3,20.62a9.913,9.913,0,0,0,4.74,1.21h0A9.914,9.914,0,0,0,19.05,4.91ZM12.04,20.15h0A8.262,8.262,0,0,1,7.84,19l-.3-.18-3.12.82.83-3.04-.2-.31A8.241,8.241,0,0,1,12.03,3.67a8.24,8.24,0,0,1,.01,16.48Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81s-.39-.12-.56.12-.64.81-.78.97-.29.19-.54.06A6.663,6.663,0,0,1,11,13.1a7.566,7.566,0,0,1-1.38-1.72c-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43a1.733,1.733,0,0,0,.25-.41.459.459,0,0,0-.02-.43c-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43H8.53a.9.9,0,0,0-.66.31,2.821,2.821,0,0,0-.86,2.07,4.817,4.817,0,0,0,1.01,2.56,10.978,10.978,0,0,0,4.23,3.74,12.1,12.1,0,0,0,1.41.52,3.426,3.426,0,0,0,1.56.1,2.518,2.518,0,0,0,1.67-1.18,1.954,1.954,0,0,0,.14-1.18C16.96,14.16,16.81,14.11,16.56,13.99Z"/>
                                                                        </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="chat_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2110" data-name="Path 2110" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2111" data-name="Path 2111" d="M4,4H20V16H5.17L4,17.17V4M4,2A2,2,0,0,0,2.01,4L2,22l4-4H20a2.006,2.006,0,0,0,2-2V4a2.006,2.006,0,0,0-2-2ZM6,12h8v2H6ZM6,9H18v2H6ZM6,6H18V8H6Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="mail_black_24dp_1_" data-name="mail_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2112" data-name="Path 2112" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2113" data-name="Path 2113" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Barnes Bell</td>
                                                <td>800</td>
                                                <td>9876543210</td>
                                                <td>
                                                    <ul class="rl-contact-list">
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="whatsapp_black_24dp_1_" data-name="whatsapp_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <g id="Group_1496" data-name="Group 1496">
                                                                        <rect id="Rectangle_255" data-name="Rectangle 255" width="24" height="24" fill="none"/>
                                                                    </g>
                                                                    <g id="Group_1499" data-name="Group 1499">
                                                                        <g id="Group_1498" data-name="Group 1498">
                                                                        <g id="Group_1497" data-name="Group 1497">
                                                                            <path id="Path_2109" data-name="Path 2109" d="M19.05,4.91A9.816,9.816,0,0,0,12.04,2,9.917,9.917,0,0,0,3.45,16.86L2.05,22,7.3,20.62a9.913,9.913,0,0,0,4.74,1.21h0A9.914,9.914,0,0,0,19.05,4.91ZM12.04,20.15h0A8.262,8.262,0,0,1,7.84,19l-.3-.18-3.12.82.83-3.04-.2-.31A8.241,8.241,0,0,1,12.03,3.67a8.24,8.24,0,0,1,.01,16.48Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81s-.39-.12-.56.12-.64.81-.78.97-.29.19-.54.06A6.663,6.663,0,0,1,11,13.1a7.566,7.566,0,0,1-1.38-1.72c-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43a1.733,1.733,0,0,0,.25-.41.459.459,0,0,0-.02-.43c-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43H8.53a.9.9,0,0,0-.66.31,2.821,2.821,0,0,0-.86,2.07,4.817,4.817,0,0,0,1.01,2.56,10.978,10.978,0,0,0,4.23,3.74,12.1,12.1,0,0,0,1.41.52,3.426,3.426,0,0,0,1.56.1,2.518,2.518,0,0,0,1.67-1.18,1.954,1.954,0,0,0,.14-1.18C16.96,14.16,16.81,14.11,16.56,13.99Z"/>
                                                                        </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="chat_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2110" data-name="Path 2110" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2111" data-name="Path 2111" d="M4,4H20V16H5.17L4,17.17V4M4,2A2,2,0,0,0,2.01,4L2,22l4-4H20a2.006,2.006,0,0,0,2-2V4a2.006,2.006,0,0,0-2-2ZM6,12h8v2H6ZM6,9H18v2H6ZM6,6H18V8H6Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="mail_black_24dp_1_" data-name="mail_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2112" data-name="Path 2112" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2113" data-name="Path 2113" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Barnes Bell</td>
                                                <td>800</td>
                                                <td>9876543210</td>
                                                <td>
                                                    <ul class="rl-contact-list">
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="whatsapp_black_24dp_1_" data-name="whatsapp_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <g id="Group_1496" data-name="Group 1496">
                                                                        <rect id="Rectangle_255" data-name="Rectangle 255" width="24" height="24" fill="none"/>
                                                                    </g>
                                                                    <g id="Group_1499" data-name="Group 1499">
                                                                        <g id="Group_1498" data-name="Group 1498">
                                                                        <g id="Group_1497" data-name="Group 1497">
                                                                            <path id="Path_2109" data-name="Path 2109" d="M19.05,4.91A9.816,9.816,0,0,0,12.04,2,9.917,9.917,0,0,0,3.45,16.86L2.05,22,7.3,20.62a9.913,9.913,0,0,0,4.74,1.21h0A9.914,9.914,0,0,0,19.05,4.91ZM12.04,20.15h0A8.262,8.262,0,0,1,7.84,19l-.3-.18-3.12.82.83-3.04-.2-.31A8.241,8.241,0,0,1,12.03,3.67a8.24,8.24,0,0,1,.01,16.48Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81s-.39-.12-.56.12-.64.81-.78.97-.29.19-.54.06A6.663,6.663,0,0,1,11,13.1a7.566,7.566,0,0,1-1.38-1.72c-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43a1.733,1.733,0,0,0,.25-.41.459.459,0,0,0-.02-.43c-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43H8.53a.9.9,0,0,0-.66.31,2.821,2.821,0,0,0-.86,2.07,4.817,4.817,0,0,0,1.01,2.56,10.978,10.978,0,0,0,4.23,3.74,12.1,12.1,0,0,0,1.41.52,3.426,3.426,0,0,0,1.56.1,2.518,2.518,0,0,0,1.67-1.18,1.954,1.954,0,0,0,.14-1.18C16.96,14.16,16.81,14.11,16.56,13.99Z"/>
                                                                        </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="chat_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2110" data-name="Path 2110" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2111" data-name="Path 2111" d="M4,4H20V16H5.17L4,17.17V4M4,2A2,2,0,0,0,2.01,4L2,22l4-4H20a2.006,2.006,0,0,0,2-2V4a2.006,2.006,0,0,0-2-2ZM6,12h8v2H6ZM6,9H18v2H6ZM6,6H18V8H6Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="mail_black_24dp_1_" data-name="mail_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2112" data-name="Path 2112" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2113" data-name="Path 2113" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Barnes Bell</td>
                                                <td>800</td>
                                                <td>9876543210</td>
                                                <td>
                                                    <ul class="rl-contact-list">
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="whatsapp_black_24dp_1_" data-name="whatsapp_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <g id="Group_1496" data-name="Group 1496">
                                                                        <rect id="Rectangle_255" data-name="Rectangle 255" width="24" height="24" fill="none"/>
                                                                    </g>
                                                                    <g id="Group_1499" data-name="Group 1499">
                                                                        <g id="Group_1498" data-name="Group 1498">
                                                                        <g id="Group_1497" data-name="Group 1497">
                                                                            <path id="Path_2109" data-name="Path 2109" d="M19.05,4.91A9.816,9.816,0,0,0,12.04,2,9.917,9.917,0,0,0,3.45,16.86L2.05,22,7.3,20.62a9.913,9.913,0,0,0,4.74,1.21h0A9.914,9.914,0,0,0,19.05,4.91ZM12.04,20.15h0A8.262,8.262,0,0,1,7.84,19l-.3-.18-3.12.82.83-3.04-.2-.31A8.241,8.241,0,0,1,12.03,3.67a8.24,8.24,0,0,1,.01,16.48Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81s-.39-.12-.56.12-.64.81-.78.97-.29.19-.54.06A6.663,6.663,0,0,1,11,13.1a7.566,7.566,0,0,1-1.38-1.72c-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43a1.733,1.733,0,0,0,.25-.41.459.459,0,0,0-.02-.43c-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43H8.53a.9.9,0,0,0-.66.31,2.821,2.821,0,0,0-.86,2.07,4.817,4.817,0,0,0,1.01,2.56,10.978,10.978,0,0,0,4.23,3.74,12.1,12.1,0,0,0,1.41.52,3.426,3.426,0,0,0,1.56.1,2.518,2.518,0,0,0,1.67-1.18,1.954,1.954,0,0,0,.14-1.18C16.96,14.16,16.81,14.11,16.56,13.99Z"/>
                                                                        </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="chat_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2110" data-name="Path 2110" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2111" data-name="Path 2111" d="M4,4H20V16H5.17L4,17.17V4M4,2A2,2,0,0,0,2.01,4L2,22l4-4H20a2.006,2.006,0,0,0,2-2V4a2.006,2.006,0,0,0-2-2ZM6,12h8v2H6ZM6,9H18v2H6ZM6,6H18V8H6Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="mail_black_24dp_1_" data-name="mail_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2112" data-name="Path 2112" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2113" data-name="Path 2113" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Barnes Bell</td>
                                                <td>800</td>
                                                <td>9876543210</td>
                                                <td>
                                                    <ul class="rl-contact-list">
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="whatsapp_black_24dp_1_" data-name="whatsapp_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <g id="Group_1496" data-name="Group 1496">
                                                                        <rect id="Rectangle_255" data-name="Rectangle 255" width="24" height="24" fill="none"/>
                                                                    </g>
                                                                    <g id="Group_1499" data-name="Group 1499">
                                                                        <g id="Group_1498" data-name="Group 1498">
                                                                        <g id="Group_1497" data-name="Group 1497">
                                                                            <path id="Path_2109" data-name="Path 2109" d="M19.05,4.91A9.816,9.816,0,0,0,12.04,2,9.917,9.917,0,0,0,3.45,16.86L2.05,22,7.3,20.62a9.913,9.913,0,0,0,4.74,1.21h0A9.914,9.914,0,0,0,19.05,4.91ZM12.04,20.15h0A8.262,8.262,0,0,1,7.84,19l-.3-.18-3.12.82.83-3.04-.2-.31A8.241,8.241,0,0,1,12.03,3.67a8.24,8.24,0,0,1,.01,16.48Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81s-.39-.12-.56.12-.64.81-.78.97-.29.19-.54.06A6.663,6.663,0,0,1,11,13.1a7.566,7.566,0,0,1-1.38-1.72c-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43a1.733,1.733,0,0,0,.25-.41.459.459,0,0,0-.02-.43c-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43H8.53a.9.9,0,0,0-.66.31,2.821,2.821,0,0,0-.86,2.07,4.817,4.817,0,0,0,1.01,2.56,10.978,10.978,0,0,0,4.23,3.74,12.1,12.1,0,0,0,1.41.52,3.426,3.426,0,0,0,1.56.1,2.518,2.518,0,0,0,1.67-1.18,1.954,1.954,0,0,0,.14-1.18C16.96,14.16,16.81,14.11,16.56,13.99Z"/>
                                                                        </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="chat_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2110" data-name="Path 2110" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2111" data-name="Path 2111" d="M4,4H20V16H5.17L4,17.17V4M4,2A2,2,0,0,0,2.01,4L2,22l4-4H20a2.006,2.006,0,0,0,2-2V4a2.006,2.006,0,0,0-2-2ZM6,12h8v2H6ZM6,9H18v2H6ZM6,6H18V8H6Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="mail_black_24dp_1_" data-name="mail_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2112" data-name="Path 2112" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2113" data-name="Path 2113" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Barnes Bell</td>
                                                <td>800</td>
                                                <td>9876543210</td>
                                                <td>
                                                    <ul class="rl-contact-list">
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="whatsapp_black_24dp_1_" data-name="whatsapp_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <g id="Group_1496" data-name="Group 1496">
                                                                        <rect id="Rectangle_255" data-name="Rectangle 255" width="24" height="24" fill="none"/>
                                                                    </g>
                                                                    <g id="Group_1499" data-name="Group 1499">
                                                                        <g id="Group_1498" data-name="Group 1498">
                                                                        <g id="Group_1497" data-name="Group 1497">
                                                                            <path id="Path_2109" data-name="Path 2109" d="M19.05,4.91A9.816,9.816,0,0,0,12.04,2,9.917,9.917,0,0,0,3.45,16.86L2.05,22,7.3,20.62a9.913,9.913,0,0,0,4.74,1.21h0A9.914,9.914,0,0,0,19.05,4.91ZM12.04,20.15h0A8.262,8.262,0,0,1,7.84,19l-.3-.18-3.12.82.83-3.04-.2-.31A8.241,8.241,0,0,1,12.03,3.67a8.24,8.24,0,0,1,.01,16.48Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81s-.39-.12-.56.12-.64.81-.78.97-.29.19-.54.06A6.663,6.663,0,0,1,11,13.1a7.566,7.566,0,0,1-1.38-1.72c-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43a1.733,1.733,0,0,0,.25-.41.459.459,0,0,0-.02-.43c-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43H8.53a.9.9,0,0,0-.66.31,2.821,2.821,0,0,0-.86,2.07,4.817,4.817,0,0,0,1.01,2.56,10.978,10.978,0,0,0,4.23,3.74,12.1,12.1,0,0,0,1.41.52,3.426,3.426,0,0,0,1.56.1,2.518,2.518,0,0,0,1.67-1.18,1.954,1.954,0,0,0,.14-1.18C16.96,14.16,16.81,14.11,16.56,13.99Z"/>
                                                                        </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="chat_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2110" data-name="Path 2110" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2111" data-name="Path 2111" d="M4,4H20V16H5.17L4,17.17V4M4,2A2,2,0,0,0,2.01,4L2,22l4-4H20a2.006,2.006,0,0,0,2-2V4a2.006,2.006,0,0,0-2-2ZM6,12h8v2H6ZM6,9H18v2H6ZM6,6H18V8H6Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="mail_black_24dp_1_" data-name="mail_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2112" data-name="Path 2112" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2113" data-name="Path 2113" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Barnes Bell</td>
                                                <td>800</td>
                                                <td>9876543210</td>
                                                <td>
                                                    <ul class="rl-contact-list">
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="whatsapp_black_24dp_1_" data-name="whatsapp_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <g id="Group_1496" data-name="Group 1496">
                                                                        <rect id="Rectangle_255" data-name="Rectangle 255" width="24" height="24" fill="none"/>
                                                                    </g>
                                                                    <g id="Group_1499" data-name="Group 1499">
                                                                        <g id="Group_1498" data-name="Group 1498">
                                                                        <g id="Group_1497" data-name="Group 1497">
                                                                            <path id="Path_2109" data-name="Path 2109" d="M19.05,4.91A9.816,9.816,0,0,0,12.04,2,9.917,9.917,0,0,0,3.45,16.86L2.05,22,7.3,20.62a9.913,9.913,0,0,0,4.74,1.21h0A9.914,9.914,0,0,0,19.05,4.91ZM12.04,20.15h0A8.262,8.262,0,0,1,7.84,19l-.3-.18-3.12.82.83-3.04-.2-.31A8.241,8.241,0,0,1,12.03,3.67a8.24,8.24,0,0,1,.01,16.48Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81s-.39-.12-.56.12-.64.81-.78.97-.29.19-.54.06A6.663,6.663,0,0,1,11,13.1a7.566,7.566,0,0,1-1.38-1.72c-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43a1.733,1.733,0,0,0,.25-.41.459.459,0,0,0-.02-.43c-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43H8.53a.9.9,0,0,0-.66.31,2.821,2.821,0,0,0-.86,2.07,4.817,4.817,0,0,0,1.01,2.56,10.978,10.978,0,0,0,4.23,3.74,12.1,12.1,0,0,0,1.41.52,3.426,3.426,0,0,0,1.56.1,2.518,2.518,0,0,0,1.67-1.18,1.954,1.954,0,0,0,.14-1.18C16.96,14.16,16.81,14.11,16.56,13.99Z"/>
                                                                        </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="chat_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2110" data-name="Path 2110" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2111" data-name="Path 2111" d="M4,4H20V16H5.17L4,17.17V4M4,2A2,2,0,0,0,2.01,4L2,22l4-4H20a2.006,2.006,0,0,0,2-2V4a2.006,2.006,0,0,0-2-2ZM6,12h8v2H6ZM6,9H18v2H6ZM6,6H18V8H6Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="mail_black_24dp_1_" data-name="mail_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2112" data-name="Path 2112" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2113" data-name="Path 2113" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Barnes Bell</td>
                                                <td>800</td>
                                                <td>9876543210</td>
                                                <td>
                                                    <ul class="rl-contact-list">
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="whatsapp_black_24dp_1_" data-name="whatsapp_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <g id="Group_1496" data-name="Group 1496">
                                                                        <rect id="Rectangle_255" data-name="Rectangle 255" width="24" height="24" fill="none"/>
                                                                    </g>
                                                                    <g id="Group_1499" data-name="Group 1499">
                                                                        <g id="Group_1498" data-name="Group 1498">
                                                                        <g id="Group_1497" data-name="Group 1497">
                                                                            <path id="Path_2109" data-name="Path 2109" d="M19.05,4.91A9.816,9.816,0,0,0,12.04,2,9.917,9.917,0,0,0,3.45,16.86L2.05,22,7.3,20.62a9.913,9.913,0,0,0,4.74,1.21h0A9.914,9.914,0,0,0,19.05,4.91ZM12.04,20.15h0A8.262,8.262,0,0,1,7.84,19l-.3-.18-3.12.82.83-3.04-.2-.31A8.241,8.241,0,0,1,12.03,3.67a8.24,8.24,0,0,1,.01,16.48Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81s-.39-.12-.56.12-.64.81-.78.97-.29.19-.54.06A6.663,6.663,0,0,1,11,13.1a7.566,7.566,0,0,1-1.38-1.72c-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43a1.733,1.733,0,0,0,.25-.41.459.459,0,0,0-.02-.43c-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43H8.53a.9.9,0,0,0-.66.31,2.821,2.821,0,0,0-.86,2.07,4.817,4.817,0,0,0,1.01,2.56,10.978,10.978,0,0,0,4.23,3.74,12.1,12.1,0,0,0,1.41.52,3.426,3.426,0,0,0,1.56.1,2.518,2.518,0,0,0,1.67-1.18,1.954,1.954,0,0,0,.14-1.18C16.96,14.16,16.81,14.11,16.56,13.99Z"/>
                                                                        </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="chat_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2110" data-name="Path 2110" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2111" data-name="Path 2111" d="M4,4H20V16H5.17L4,17.17V4M4,2A2,2,0,0,0,2.01,4L2,22l4-4H20a2.006,2.006,0,0,0,2-2V4a2.006,2.006,0,0,0-2-2ZM6,12h8v2H6ZM6,9H18v2H6ZM6,6H18V8H6Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="mail_black_24dp_1_" data-name="mail_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2112" data-name="Path 2112" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2113" data-name="Path 2113" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Barnes Bell</td>
                                                <td>800</td>
                                                <td>9876543210</td>
                                                <td>
                                                    <ul class="rl-contact-list">
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="whatsapp_black_24dp_1_" data-name="whatsapp_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <g id="Group_1496" data-name="Group 1496">
                                                                        <rect id="Rectangle_255" data-name="Rectangle 255" width="24" height="24" fill="none"/>
                                                                    </g>
                                                                    <g id="Group_1499" data-name="Group 1499">
                                                                        <g id="Group_1498" data-name="Group 1498">
                                                                        <g id="Group_1497" data-name="Group 1497">
                                                                            <path id="Path_2109" data-name="Path 2109" d="M19.05,4.91A9.816,9.816,0,0,0,12.04,2,9.917,9.917,0,0,0,3.45,16.86L2.05,22,7.3,20.62a9.913,9.913,0,0,0,4.74,1.21h0A9.914,9.914,0,0,0,19.05,4.91ZM12.04,20.15h0A8.262,8.262,0,0,1,7.84,19l-.3-.18-3.12.82.83-3.04-.2-.31A8.241,8.241,0,0,1,12.03,3.67a8.24,8.24,0,0,1,.01,16.48Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81s-.39-.12-.56.12-.64.81-.78.97-.29.19-.54.06A6.663,6.663,0,0,1,11,13.1a7.566,7.566,0,0,1-1.38-1.72c-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43a1.733,1.733,0,0,0,.25-.41.459.459,0,0,0-.02-.43c-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43H8.53a.9.9,0,0,0-.66.31,2.821,2.821,0,0,0-.86,2.07,4.817,4.817,0,0,0,1.01,2.56,10.978,10.978,0,0,0,4.23,3.74,12.1,12.1,0,0,0,1.41.52,3.426,3.426,0,0,0,1.56.1,2.518,2.518,0,0,0,1.67-1.18,1.954,1.954,0,0,0,.14-1.18C16.96,14.16,16.81,14.11,16.56,13.99Z"/>
                                                                        </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="chat_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2110" data-name="Path 2110" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2111" data-name="Path 2111" d="M4,4H20V16H5.17L4,17.17V4M4,2A2,2,0,0,0,2.01,4L2,22l4-4H20a2.006,2.006,0,0,0,2-2V4a2.006,2.006,0,0,0-2-2ZM6,12h8v2H6ZM6,9H18v2H6ZM6,6H18V8H6Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="rl-contact-item">
                                                            <a href="#" class="rl-contact-link">
                                                                <svg id="mail_black_24dp_1_" data-name="mail_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path id="Path_2112" data-name="Path 2112" d="M0,0H24V24H0Z" fill="none"/>
                                                                    <path id="Path_2113" data-name="Path 2113" d="M22,6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2ZM20,6l-8,4.99L4,6Zm0,12H4V8l8,5,8-5Z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard Content End -->

            <!-- Order Content Start -->
            <div class="tab-pane fade" id="nav-orders" role="tabpanel" aria-labelledby="nav-orders-tab">
                <div class="rl-dashboard-content__inner rl-dashboard-order-content">
                    <div class="row">
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="rl-dashboard-order-card">
                                <div class="rl-dashboard-order-icon">
                                    <svg id="noun_sales_2913678" xmlns="http://www.w3.org/2000/svg" width="100.567" height="87.347" viewBox="0 0 100.567 87.347">
                                        <path id="Path_2081" data-name="Path 2081" d="M14.8,285.637H37.392a4.81,4.81,0,0,0,4.805-4.805v-.279a4.794,4.794,0,0,0-1.6-3.577,4.917,4.917,0,0,0,.94-1.176,13.852,13.852,0,0,0,1.544.089c.222,0,.443-.007.664-.017l.068,0q.338-.018.672-.051h0l.136-.014a4.908,4.908,0,0,0,1.041,1.27,4.8,4.8,0,0,0-1.7,3.665v.279a4.811,4.811,0,0,0,4.805,4.805H71.356a4.811,4.811,0,0,0,4.805-4.805v-.279a4.8,4.8,0,0,0-1.71-3.672,4.935,4.935,0,0,0,.01-7.462,4.935,4.935,0,0,0,0-7.454,4.934,4.934,0,0,0,0-7.453,4.935,4.935,0,0,0,.054-7.407,4.794,4.794,0,0,0,1.647-3.617V243.4a4.81,4.81,0,0,0-4.805-4.806H48.768a4.81,4.81,0,0,0-4.805,4.806v.279a4.794,4.794,0,0,0,1.647,3.617,4.929,4.929,0,0,0-.943,1.141,13.75,13.75,0,0,0-15.308,12.5H14.943a4.941,4.941,0,0,0-3.244,8.671,4.935,4.935,0,0,0-.1,7.368,4.794,4.794,0,0,0-1.6,3.579v.279a4.811,4.811,0,0,0,4.805,4.805Zm56.414-29.7a2.492,2.492,0,1,1,0,4.983H56.8a13.664,13.664,0,0,0-1.415-4.983Zm-14.427,7.51.006-.057H71.217a2.492,2.492,0,1,1,0,4.984H55.356a13.6,13.6,0,0,0,1.42-4.786c.005-.047.011-.094.014-.141Zm-3.052,7.4H71.217a2.492,2.492,0,1,1,0,4.984H48.908a2.486,2.486,0,0,1-1.61-.586,13.652,13.652,0,0,0,6.44-4.4Zm19.97,10.177a2.355,2.355,0,0,1-2.352,2.352H48.768a2.355,2.355,0,0,1-2.352-2.352v-.279a2.355,2.355,0,0,1,2.352-2.352H71.356a2.355,2.355,0,0,1,2.352,2.352Zm-24.94-34.991a2.355,2.355,0,0,1-2.352-2.352V243.4a2.355,2.355,0,0,1,2.352-2.352H71.356a2.355,2.355,0,0,1,2.352,2.352v.279a2.355,2.355,0,0,1-2.352,2.352H48.768Zm.139,2.453h22.31a2.492,2.492,0,1,1,0,4.984H53.79a13.82,13.82,0,0,0-6.432-4.442A2.49,2.49,0,0,1,48.908,248.479Zm-5.828,2.311A11.335,11.335,0,0,1,54.4,262.113c0,.18-.005.359-.014.536,0,.046-.005.091-.008.137-.008.141-.019.281-.032.421,0,.038-.007.075-.011.113a11.348,11.348,0,0,1-8.949,9.878l-.058.012c-.152.031-.307.058-.46.082l-.194.028c-.124.018-.248.034-.373.047-.108.011-.217.02-.325.028-.091.007-.182.016-.274.02-.207.011-.414.018-.623.018a11.323,11.323,0,0,1,0-22.645Zm-28.137,12.6H29.366a13.663,13.663,0,0,0,1.448,4.984H14.943a2.492,2.492,0,1,1,0-4.984Zm-2.492,9.945a2.494,2.494,0,0,1,2.492-2.492H32.43a13.819,13.819,0,0,0,6.442,4.389,2.477,2.477,0,0,1-1.086.536c-.13-.01-.261-.017-.394-.017H14.8c-.132,0-.263.007-.393.017a2.5,2.5,0,0,1-1.959-2.433Zm2.492,4.944H37.252a4.994,4.994,0,0,0,.565-.036,2.355,2.355,0,0,1,1.927,2.312v.279a2.355,2.355,0,0,1-2.352,2.352H14.8a2.355,2.355,0,0,1-2.352-2.352v-.279a2.355,2.355,0,0,1,1.919-2.311A4.945,4.945,0,0,0,14.943,278.276Z" transform="translate(-9.998 -198.476)" fill="#5c9eba"/>
                                        <path id="Path_2082" data-name="Path 2082" d="M153.283,319.164h-.051a2.324,2.324,0,0,1-2.3-2.32,1.226,1.226,0,0,0-2.453,0,4.783,4.783,0,0,0,3.548,4.614V322.5a1.226,1.226,0,1,0,2.453,0v-1.045a4.774,4.774,0,0,0-1.226-9.389,2.322,2.322,0,1,1,2.321-2.321,1.226,1.226,0,0,0,2.453,0,4.783,4.783,0,0,0-3.548-4.614v-.883a1.226,1.226,0,1,0-2.453,0v.883a4.774,4.774,0,0,0,1.226,9.389,2.321,2.321,0,1,1,.026,4.642Z" transform="translate(-120.175 -249.738)" fill="#5c9eba"/>
                                        <path id="Path_2083" data-name="Path 2083" d="M376.675,171.822v-.279a4.811,4.811,0,0,0-4.805-4.805H349.282a4.811,4.811,0,0,0-4.805,4.805v.279a4.794,4.794,0,0,0,1.6,3.577,4.793,4.793,0,0,0-1.6,3.577v.279a4.793,4.793,0,0,0,1.6,3.577,4.794,4.794,0,0,0-1.6,3.577v.279a4.793,4.793,0,0,0,1.6,3.577,4.793,4.793,0,0,0-1.6,3.577v.278a4.793,4.793,0,0,0,1.6,3.577,4.794,4.794,0,0,0-1.6,3.577v.279a4.793,4.793,0,0,0,1.6,3.577,4.793,4.793,0,0,0-1.6,3.577v.279a4.794,4.794,0,0,0,1.6,3.577,4.793,4.793,0,0,0-1.6,3.577v.279a4.793,4.793,0,0,0,1.6,3.577,4.794,4.794,0,0,0-1.6,3.577v.279a4.811,4.811,0,0,0,4.805,4.805H371.87a4.811,4.811,0,0,0,4.805-4.806v-.279a4.8,4.8,0,0,0-1.6-3.578,4.793,4.793,0,0,0,1.6-3.576v-.279a4.794,4.794,0,0,0-1.6-3.577,4.794,4.794,0,0,0,1.6-3.577v-.279a4.793,4.793,0,0,0-1.6-3.577,4.793,4.793,0,0,0,1.6-3.577v-.279a4.8,4.8,0,0,0-1.6-3.578,4.794,4.794,0,0,0,1.6-3.576v-.279a4.794,4.794,0,0,0-1.6-3.577,4.794,4.794,0,0,0,1.6-3.577v-.279a4.794,4.794,0,0,0-1.6-3.577,4.794,4.794,0,0,0,1.6-3.577v-.278a4.794,4.794,0,0,0-1.6-3.577A4.794,4.794,0,0,0,376.675,171.822Zm-2.453,51.751v.279a2.355,2.355,0,0,1-2.352,2.353H349.282a2.355,2.355,0,0,1-2.352-2.352v-.279a2.354,2.354,0,0,1,2.308-2.351h22.677A2.354,2.354,0,0,1,374.222,223.573Zm0-7.433v.279a2.354,2.354,0,0,1-2.308,2.351H349.238a2.354,2.354,0,0,1-2.308-2.351v-.279a2.354,2.354,0,0,1,2.305-2.351h22.682A2.354,2.354,0,0,1,374.222,216.141Zm0-7.433v.279a2.354,2.354,0,0,1-2.305,2.351H349.235a2.354,2.354,0,0,1-2.305-2.351v-.279a2.353,2.353,0,0,1,2.308-2.351h22.677A2.354,2.354,0,0,1,374.222,208.707Zm0-7.433v.279a2.354,2.354,0,0,1-2.308,2.351H349.238a2.354,2.354,0,0,1-2.308-2.351v-.279a2.354,2.354,0,0,1,2.305-2.351h22.683a2.354,2.354,0,0,1,2.305,2.351Zm0-7.433v.278a2.354,2.354,0,0,1-2.305,2.351H349.235a2.354,2.354,0,0,1-2.305-2.351v-.279a2.354,2.354,0,0,1,2.305-2.351h22.682A2.354,2.354,0,0,1,374.222,193.842Zm0-7.433v.279a2.354,2.354,0,0,1-2.305,2.351H349.235a2.354,2.354,0,0,1-2.305-2.351v-.279a2.354,2.354,0,0,1,2.305-2.351h22.682A2.354,2.354,0,0,1,374.222,186.409Zm0-7.433v.279a2.354,2.354,0,0,1-2.305,2.351H349.235a2.354,2.354,0,0,1-2.305-2.351v-.279a2.354,2.354,0,0,1,2.306-2.351h22.68A2.354,2.354,0,0,1,374.222,178.976Zm-2.352-4.806H349.236a2.354,2.354,0,0,1-2.306-2.351v-.279a2.355,2.355,0,0,1,2.352-2.352H371.87a2.355,2.355,0,0,1,2.352,2.353v.279a2.354,2.354,0,0,1-2.306,2.351Z" transform="translate(-276.108 -141.31)" fill="#5c9eba"/>
                                        <path id="Path_2084" data-name="Path 2084" d="M91.148,56.861a1.226,1.226,0,0,0-1.652-.2L53.768,82.314A1.226,1.226,0,0,0,55.2,84.306l34.808-25,11.533,13.65a1.226,1.226,0,0,0,1.686.18L131.935,51l3.913,4.5A1.226,1.226,0,0,0,138,54.78l.725-10.4a1.226,1.226,0,0,0-1.138-1.308l-10.4-.725a1.226,1.226,0,0,0-1.011,2.028l4.153,4.775L102.656,70.481ZM136.19,45.428l-.434,6.227-5.793-6.661Z" transform="translate(-44.414 -42.339)" fill="#5c9eba"/>
                                    </svg>
                                </div>
                                <div class="rl-dashboard-order-details text-end">
                                    <label class="rl-dashboard-card-label">Sales</label>
                                    <h3 class="rl-dashboard-card-title">₹ 985499</h3>
                                    <p class="rl-dashboard-card-description">Last 30 Days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="rl-dashboard-order-card">
                                <div class="rl-dashboard-order-icon">
                                    <svg id="noun_basket_3168787" xmlns="http://www.w3.org/2000/svg" width="100.494" height="97.653" viewBox="0 0 100.494 97.653">
                                        <g id="Group_1440" data-name="Group 1440" transform="translate(0 0)">
                                            <g id="Group_1439" data-name="Group 1439">
                                            <path id="Path_2085" data-name="Path 2085" d="M121.755,85.925H110.129L102.89,66.057a7.646,7.646,0,0,0-14.369,5.235l5.331,14.634H66.641l5.331-14.634A7.646,7.646,0,1,0,57.6,66.057L50.365,85.925H38.739a8.739,8.739,0,1,0,0,17.477h.2L47.5,144.917a10.748,10.748,0,0,0,10.323,8.733h44.842a10.748,10.748,0,0,0,10.323-8.733l8.562-41.514h.2a8.738,8.738,0,1,0,0-17.477ZM95.705,63.211a5.48,5.48,0,0,1,5.132,3.594l7.478,20.527a5.47,5.47,0,0,1-5.13,7.333h0a5.48,5.48,0,0,1-5.132-3.594L90.574,70.544A5.47,5.47,0,0,1,95.705,63.211ZM59.656,66.8A5.462,5.462,0,1,1,69.92,70.544L62.442,91.071a5.462,5.462,0,0,1-10.264-3.739Zm51.2,77.671a8.558,8.558,0,0,1-8.184,6.99H57.826a8.557,8.557,0,0,1-8.183-6.99L41.172,103.4h78.151Zm10.9-43.257H38.739a6.554,6.554,0,1,1,0-13.108h11a7.646,7.646,0,0,0,14.753,3.708l1.351-3.708h28.8L96,91.818a7.673,7.673,0,0,0,7.185,5.031h0a7.658,7.658,0,0,0,7.567-8.739h11a6.554,6.554,0,1,1,0,13.108Z" transform="translate(-30 -55.996)" fill="#26b577"/>
                                            <path id="Path_2086" data-name="Path 2086" d="M143.277,181.555A3.277,3.277,0,1,0,140,178.278,3.281,3.281,0,0,0,143.277,181.555Zm0-4.369a1.092,1.092,0,1,1-1.092,1.092A1.094,1.094,0,0,1,143.277,177.186Z" transform="translate(-115.969 -145.072)" fill="#26b577"/>
                                            <path id="Path_2087" data-name="Path 2087" d="M353.277,181.555A3.277,3.277,0,1,0,350,178.278,3.281,3.281,0,0,0,353.277,181.555Zm0-4.369a1.092,1.092,0,1,1-1.092,1.092A1.094,1.094,0,0,1,353.277,177.186Z" transform="translate(-280.091 -145.072)" fill="#26b577"/>
                                            <path id="Path_2088" data-name="Path 2088" d="M145.462,318.233a5.468,5.468,0,0,0,5.462-5.462v-1.092H154.2v1.092a5.462,5.462,0,1,0,10.923,0v-1.092H168.4v1.092a5.462,5.462,0,0,0,10.923,0v-1.092H182.6v1.092a5.462,5.462,0,0,0,10.923,0V285.464a5.462,5.462,0,0,0-10.923,0v18.569h-3.277V285.464a5.462,5.462,0,0,0-10.923,0v18.569h-3.277V285.464a5.462,5.462,0,1,0-10.923,0v18.569h-3.277V285.464a5.462,5.462,0,1,0-10.923,0v27.308A5.468,5.468,0,0,0,145.462,318.233Zm39.324-32.77a3.277,3.277,0,1,1,6.554,0v27.308a3.277,3.277,0,1,1-6.554,0ZM182.6,306.218v3.277h-3.277v-3.277Zm-12.016-20.754a3.277,3.277,0,1,1,6.554,0v27.308a3.277,3.277,0,1,1-6.554,0ZM168.4,306.218v3.277h-3.277v-3.277Zm-12.016-20.754a3.277,3.277,0,1,1,6.554,0v27.308a3.277,3.277,0,1,1-6.554,0ZM154.2,306.218v3.277h-3.277v-3.277Zm-12.016-20.754a3.277,3.277,0,0,1,6.554,0v27.308a3.277,3.277,0,1,1-6.554,0Z" transform="translate(-115.969 -227.134)" fill="#26b577"/>
                                            <path id="Path_2089" data-name="Path 2089" d="M59.369,98.74A4.369,4.369,0,1,0,55,94.37,4.374,4.374,0,0,0,59.369,98.74Zm0-6.554a2.185,2.185,0,1,1-2.185,2.185A2.187,2.187,0,0,1,59.369,92.186Z" transform="translate(-49.538 -78.641)" fill="#26b577"/>
                                            <path id="Path_2090" data-name="Path 2090" d="M406.554,68.11A6.554,6.554,0,1,0,400,61.556,6.561,6.561,0,0,0,406.554,68.11Zm0-10.923a4.369,4.369,0,1,1-4.369,4.369A4.374,4.374,0,0,1,406.554,57.187Z" transform="translate(-319.168 -51.288)" fill="#26b577"/>
                                            <circle id="Ellipse_131" data-name="Ellipse 131" cx="1" cy="1" r="1" transform="translate(20.035 2)" fill="#26b577"/>
                                            <ellipse id="Ellipse_132" data-name="Ellipse 132" cx="1" cy="1.5" rx="1" ry="1.5" transform="translate(48.035)" fill="#26b577"/>
                                            <circle id="Ellipse_133" data-name="Ellipse 133" cx="1" cy="1" r="1" transform="translate(48.035 22)" fill="#26b577"/>
                                            <ellipse id="Ellipse_134" data-name="Ellipse 134" cx="2" cy="1" rx="2" ry="1" transform="translate(94.035 22)" fill="#26b577"/>
                                            <ellipse id="Ellipse_135" data-name="Ellipse 135" cx="2" cy="1.5" rx="2" ry="1.5" transform="translate(5.035 73)" fill="#26b577"/>
                                            <circle id="Ellipse_136" data-name="Ellipse 136" cx="2" cy="2" r="2" transform="translate(94.035 68)" fill="#26b577"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div class="rl-dashboard-order-details text-end">
                                    <label class="rl-dashboard-card-label">Total order</label>
                                    <h3 class="rl-dashboard-card-title">8997</h3>
                                    <p class="rl-dashboard-card-description">Last 30 Days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="rl-dashboard-order-card">
                                <div class="rl-dashboard-order-icon">
                                    <svg id="noun_return_3995700" xmlns="http://www.w3.org/2000/svg" width="100.079" height="97.183" viewBox="0 0 100.079 97.183">
                                        <g id="Group_1441" data-name="Group 1441">
                                            <path id="Path_2091" data-name="Path 2091" d="M116.6,24.692a1.338,1.338,0,0,0-.052-.256,1.455,1.455,0,0,0-.248-.452,1.333,1.333,0,0,0-.2-.192,1.243,1.243,0,0,0-.106-.1c-.031-.019-.067-.02-.1-.037a1.692,1.692,0,0,0-.523-.152c-.037,0-.068-.021-.105-.021H30.56a1.363,1.363,0,0,0-1.11.573l-12.642,17.7c-.017.023-.011.055-.026.079a1.327,1.327,0,0,0-.231.714V119.3a1.368,1.368,0,0,0,1.366,1.366h86.23a1.456,1.456,0,0,0,1.075-.563c.023-.031.061-.044.081-.077l11.116-17.7a1.365,1.365,0,0,0,.21-.726V24.846A1.359,1.359,0,0,0,116.6,24.692ZM83.648,26.212l-9.89,14.968h-22.4L61.787,26.212Zm-10.522,17.7V65.8L62.569,56.935a1.373,1.373,0,0,0-1.706-.037L50.1,65.166V43.913Zm-41.862-17.7h27.2L48.023,41.181H20.572Zm71.518,91.718h-83.5V43.913H47.368V67.935a1.366,1.366,0,0,0,2.2,1.083l12.092-9.287L73.615,69.774a1.359,1.359,0,0,0,.876.32,1.345,1.345,0,0,0,.576-.13,1.366,1.366,0,0,0,.79-1.236V43.913h26.924Zm.612-76.75H77.031l9.891-14.968h25.872ZM113.9,101.2l-8.384,13.352V42.939l8.384-13.35Z" transform="translate(-16.552 -23.48)" fill="#ca8abf"/>
                                            <path id="Path_2092" data-name="Path 2092" d="M156.8,270.843a1.269,1.269,0,0,0-.97.406l-4.142,4.182a1.364,1.364,0,0,0,.01,1.929,12.647,12.647,0,1,1-19.53,2.256l2.509,2.486A1.364,1.364,0,0,0,137,281.19l.507-11.9a1.36,1.36,0,0,0-.4-1.026,1.473,1.473,0,0,0-1.03-.393l-11.892.62a1.364,1.364,0,0,0-.89,2.333l2.636,2.612A21.24,21.24,0,0,0,142.793,307.6a.993.993,0,0,0,.1,0,21.251,21.251,0,0,0,14.865-36.357A1.36,1.36,0,0,0,156.8,270.843Zm-.836,28.547A18.522,18.522,0,0,1,128.8,274.232a1.365,1.365,0,0,0-.073-1.863l-1.323-1.313,7.314-.383-.313,7.318-1.446-1.433a1.363,1.363,0,0,0-2.016.107,15.343,15.343,0,1,0,23.6-.24l2.226-2.249A18.561,18.561,0,0,1,155.961,299.39Z" transform="translate(-99.618 -216.799)" fill="#ca8abf"/>
                                        </g>
                                    </svg>
                                </div>
                                <div class="rl-dashboard-order-details text-end">
                                    <label class="rl-dashboard-card-label">Returned</label>
                                    <h3 class="rl-dashboard-card-title">89</h3>
                                    <p class="rl-dashboard-card-description">Last 30 Days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="rl-dashboard-order-card">
                                <div class="rl-dashboard-order-icon">
                                    <svg id="noun_Cancel_Order_3339580" data-name="noun_Cancel Order_3339580" xmlns="http://www.w3.org/2000/svg" width="100.515" height="102.354" viewBox="0 0 100.515 102.354">
                                        <path id="Path_2093" data-name="Path 2093" d="M103,65.95V31.472a5.049,5.049,0,0,0-.829-2.764c-.008-.01-.015-.022-.022-.031A5.047,5.047,0,0,0,100.3,27L58.867,5.164a5.058,5.058,0,0,0-4.716,0L12.721,27a5.045,5.045,0,0,0-2.7,4.478V80.041a5.045,5.045,0,0,0,2.7,4.478l41.43,21.833a5.06,5.06,0,0,0,4.716,0L84.4,92.89A16.379,16.379,0,1,0,103,65.95Zm-.046,3.149-8.807,8.807-8.809-8.8a13.78,13.78,0,0,1,17.616,0ZM81.735,20.136,40.532,40.99A5.034,5.034,0,0,0,37.759,45.5V64.986a.592.592,0,0,1-1.019.409L33.012,61.5a3.2,3.2,0,0,0-2.96-.907l-2.431.523a.591.591,0,0,1-.716-.578V38.7a2.461,2.461,0,0,1,1.356-2.207l43.11-21.821ZM55.356,7.451a2.468,2.468,0,0,1,2.306,0l10.9,5.747L27.1,34.189a5.1,5.1,0,0,0-1.261.912L14.129,29.176Zm-.139,96.532L13.925,82.225a2.466,2.466,0,0,1-1.32-2.184s.018-48.67.022-48.725l11.885,6.015a5.065,5.065,0,0,0-.189,1.378V60.541a3.175,3.175,0,0,0,3.843,3.1l2.432-.524a.593.593,0,0,1,.55.172l3.728,3.893a3.175,3.175,0,0,0,5.468-2.2V45.505c0-.053.017-.1.021-.152l13.866,7.016a5.017,5.017,0,0,0,.99.37Zm.172-53.923L41.862,43.213l42.676-21.6,14.352,7.563L57.629,50.062a2.49,2.49,0,0,1-2.239,0ZM57.8,103.983V52.74a5.015,5.015,0,0,0,.994-.371l41.6-21.054c0,.054.022,33.273.022,33.273a16.38,16.38,0,0,0-18.1,26.478ZM83.509,88.537a13.78,13.78,0,0,1,0-17.615l8.808,8.807Zm10.634,5.008a13.753,13.753,0,0,1-8.808-3.181l8.809-8.805,8.808,8.808a13.751,13.751,0,0,1-8.808,3.181Zm10.634-5.008L95.97,79.732l8.808-8.807a13.78,13.78,0,0,1,0,17.615Z" transform="translate(-10.021 -4.581)" fill="#bf8383"/>
                                    </svg>
                                </div>
                                <div class="rl-dashboard-order-details text-end">
                                    <label class="rl-dashboard-card-label">Cancelled</label>
                                    <h3 class="rl-dashboard-card-title">112</h3>
                                    <p class="rl-dashboard-card-description">Last 30 Days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rl-all-order">
                        <div class="rl-filter-content">
                            <div class="rl-filter">
                                <select name="" id="" class="form-select">
                                    <option value="" selected="">Select Order Status</option>
                                    <option value="" >Pending</option>
                                    <option value="">Confrim</option>
                                    <option value="">Cancel</option>
                                    <option value="">Complete</option>
                                </select>
                                <select name="" id="" class="form-select">
                                    <option value="" selected="">Select Order Id</option>
                                    <option value="" >0987569</option>
                                    <option value="">0987569</option>
                                    <option value="">0987569</option>
                                    <option value="">0987569</option>
                                </select>
                                <button type="button" class="btn btn-dark">Filter</button>
                            </div>
                            <div class="rl-filter">
                                <input type="text" class="form-control" placeholder="search">
                                <button type="button" class="btn btn-dark">Search</button>
                            </div>
                            <button type="button" class="btn btn-dark">
                                <svg id="file_download_black_24dp_4_" data-name="file_download_black_24dp (4)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g id="Group_1424" data-name="Group 1424">
                                        <rect id="Rectangle_248" data-name="Rectangle 248" width="24" height="24" fill="none"/>
                                    </g>
                                    <g id="Group_1425" data-name="Group 1425">
                                        <path id="Path_2080" data-name="Path 2080" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#fff"/>
                                    </g>
                                </svg>
                                <span>Export All Data</span>
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table rl-order-table">
                                <thead>
                                    <tr>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Order Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Ammount</th>
                                    <th scope="col" class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="rl-customer-order-details">
                                        <td>0987569</td>
                                        <td>
                                            <span>Barnes Bell</span>
                                            <span class="rl-customer-info-btn">
                                                <svg id="info_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path id="Path_2114" data-name="Path 2114" d="M0,0H24V24H0Z" fill="none"/>
                                                    <path id="Path_2115" data-name="Path 2115" d="M11,7h2V9H11Zm0,4h2v6H11Zm1-9A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.011,8.011,0,0,1,12,20Z" fill="#1c1c1c"/>
                                                </svg>
                                            </span>
                                        </td>
                                        <td>05 Oct 2021</td>
                                        <td>
                                            <select name="" id="" class="form-select">
                                                <option value="" selected>Pending</option>
                                                <option value="">Confrim</option>
                                                <option value="">Cancel</option>
                                                <option value="">Complete</option>
                                            </select>
                                        </td>
                                        <td>$399</td>
                                        <td class="text-end"><button type="button" class="btn btn-dark">Update</button></td>
                                    </tr>
                                    <tr class="rl-customer-details">
                                        <td colspan="6">
                                            <div class="rl-customer-details__inner">
                                                <ul class="rl-customer-detail-list">
                                                    <li class="rl-customer-detail-item">
                                                        <span>Mobile Number:</span> <a class="rl-customer-detail-link" href="tel:+919876543210">9876543210</a>
                                                    </li>
                                                    <li class="rl-customer-detail-item">
                                                        <span>Email :</span> <a class="rl-customer-detail-link" href="mailto:customeremail@email.com">customeremail@email.com</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="rl-customer-order-details">
                                        <td>0987569</td>
                                        <td>
                                            <span>Barnes Bell</span>
                                            <span class="rl-customer-info-btn">
                                                <svg id="info_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path id="Path_2114" data-name="Path 2114" d="M0,0H24V24H0Z" fill="none"/>
                                                    <path id="Path_2115" data-name="Path 2115" d="M11,7h2V9H11Zm0,4h2v6H11Zm1-9A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.011,8.011,0,0,1,12,20Z" fill="#1c1c1c"/>
                                                </svg>
                                            </span>
                                        </td>
                                        <td>05 Oct 2021</td>
                                        <td>
                                            <select name="" id="" class="form-select">
                                                <option value="" selected>Pending</option>
                                                <option value="">Confrim</option>
                                                <option value="">Cancel</option>
                                                <option value="">Complete</option>
                                            </select>
                                        </td>
                                        <td>$399</td>
                                        <td class="text-end"><button type="button" class="btn btn-dark">Update</button></td>
                                    </tr>
                                    <tr class="rl-customer-details">
                                        <td colspan="6">
                                            <div class="rl-customer-details__inner">
                                                <ul class="rl-customer-detail-list">
                                                    <li class="rl-customer-detail-item">
                                                        <span>Mobile Number:</span> <a class="rl-customer-detail-link" href="tel:+919876543210">9876543210</a>
                                                    </li>
                                                    <li class="rl-customer-detail-item">
                                                        <span>Email :</span> <a class="rl-customer-detail-link" href="mailto:customeremail@email.com">customeremail@email.com</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="rl-customer-order-details">
                                        <td>0987569</td>
                                        <td>
                                            <span>Barnes Bell</span>
                                            <span class="rl-customer-info-btn">
                                                <svg id="info_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path id="Path_2114" data-name="Path 2114" d="M0,0H24V24H0Z" fill="none"/>
                                                    <path id="Path_2115" data-name="Path 2115" d="M11,7h2V9H11Zm0,4h2v6H11Zm1-9A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.011,8.011,0,0,1,12,20Z" fill="#1c1c1c"/>
                                                </svg>
                                            </span>
                                        </td>
                                        <td>05 Oct 2021</td>
                                        <td>
                                            <select name="" id="" class="form-select">
                                                <option value="" selected>Pending</option>
                                                <option value="">Confrim</option>
                                                <option value="">Cancel</option>
                                                <option value="">Complete</option>
                                            </select>
                                        </td>
                                        <td>$399</td>
                                        <td class="text-end"><button type="button" class="btn btn-dark">Update</button></td>
                                    </tr>
                                    <tr class="rl-customer-details">
                                        <td colspan="6">
                                            <div class="rl-customer-details__inner">
                                                <ul class="rl-customer-detail-list">
                                                    <li class="rl-customer-detail-item">
                                                        <span>Mobile Number:</span> <a class="rl-customer-detail-link" href="tel:+919876543210">9876543210</a>
                                                    </li>
                                                    <li class="rl-customer-detail-item">
                                                        <span>Email :</span> <a class="rl-customer-detail-link" href="mailto:customeremail@email.com">customeremail@email.com</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="rl-customer-order-details">
                                        <td>0987569</td>
                                        <td>
                                            <span>Barnes Bell</span>
                                            <span class="rl-customer-info-btn">
                                                <svg id="info_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path id="Path_2114" data-name="Path 2114" d="M0,0H24V24H0Z" fill="none"/>
                                                    <path id="Path_2115" data-name="Path 2115" d="M11,7h2V9H11Zm0,4h2v6H11Zm1-9A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.011,8.011,0,0,1,12,20Z" fill="#1c1c1c"/>
                                                </svg>
                                            </span>
                                        </td>
                                        <td>05 Oct 2021</td>
                                        <td>
                                            <select name="" id="" class="form-select">
                                                <option value="" selected>Pending</option>
                                                <option value="">Confrim</option>
                                                <option value="">Cancel</option>
                                                <option value="">Complete</option>
                                            </select>
                                        </td>
                                        <td>$399</td>
                                        <td class="text-end"><button type="button" class="btn btn-dark">Update</button></td>
                                    </tr>
                                    <tr class="rl-customer-details">
                                        <td colspan="6">
                                            <div class="rl-customer-details__inner">
                                                <ul class="rl-customer-detail-list">
                                                    <li class="rl-customer-detail-item">
                                                        <span>Mobile Number:</span> <a class="rl-customer-detail-link" href="tel:+919876543210">9876543210</a>
                                                    </li>
                                                    <li class="rl-customer-detail-item">
                                                        <span>Email :</span> <a class="rl-customer-detail-link" href="mailto:customeremail@email.com">customeremail@email.com</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="rl-customer-order-details">
                                        <td>0987569</td>
                                        <td>
                                            <span>Barnes Bell</span>
                                            <span class="rl-customer-info-btn">
                                                <svg id="info_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path id="Path_2114" data-name="Path 2114" d="M0,0H24V24H0Z" fill="none"/>
                                                    <path id="Path_2115" data-name="Path 2115" d="M11,7h2V9H11Zm0,4h2v6H11Zm1-9A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.011,8.011,0,0,1,12,20Z" fill="#1c1c1c"/>
                                                </svg>
                                            </span>
                                        </td>
                                        <td>05 Oct 2021</td>
                                        <td>
                                            <select name="" id="" class="form-select">
                                                <option value="" selected>Pending</option>
                                                <option value="">Confrim</option>
                                                <option value="">Cancel</option>
                                                <option value="">Complete</option>
                                            </select>
                                        </td>
                                        <td>$399</td>
                                        <td class="text-end"><button type="button" class="btn btn-dark">Update</button></td>
                                    </tr>
                                    <tr class="rl-customer-details">
                                        <td colspan="6">
                                            <div class="rl-customer-details__inner">
                                                <ul class="rl-customer-detail-list">
                                                    <li class="rl-customer-detail-item">
                                                        <span>Mobile Number:</span> <a class="rl-customer-detail-link" href="tel:+919876543210">9876543210</a>
                                                    </li>
                                                    <li class="rl-customer-detail-item">
                                                        <span>Email :</span> <a class="rl-customer-detail-link" href="mailto:customeremail@email.com">customeremail@email.com</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Order Content End -->

        </div>
    </div>
</section>
<!-- Dashboard Section End -->

<?php
    include('include/footer.php');
?>