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
    <div class="rl-dashboard-menu mb-2">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a href="dashboard.php" class="nav-link">Dashboard</a>
                
                <a href="dashboard.php#nav-orders" class="nav-link">Orders</a>

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
                <a href="profile.php" class="user-menu-link">
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

    <div class="rl-dashboard-menu">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-addProducts-tab" data-bs-toggle="tab" data-bs-target="#nav-addProducts" type="button" role="tab" aria-controls="nav-addProducts" aria-selected="true">Add Products</button>

                <button class="nav-link" id="nav-allProducts-tab" data-bs-toggle="tab" data-bs-target="#nav-allProducts" type="button" role="tab" aria-controls="nav-allProducts" aria-selected="false">All Products</button>

            </div>
        </nav>
    </div>
    <div class="rl-dashboard-content">
        <div class="tab-content" id="nav-tabContent">

            <!-- Add Product Content Start -->
            <div class="tab-pane fade show active" id="nav-addProducts" role="tabpanel" aria-labelledby="nav-addProducts-tab">
                <div class="rl-dashboard-content__inner rl-dashboard-addProduct-content">
                    <div class="rl-dashboard-addProduct-form">
                        <div class="rl-product-bulk-btn text-end">
                            <button type="button" class="btn btn-dark">Upload Bulk Products ( Excel file )</button>
                        </div>
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">New Category</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter New Category">
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Select Category</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Select Category</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Category Image</label>
                                <div class="rl-inputfile">
                                    <span>+ Upload Category Image</span>
                                    <input type="file" class="form-control" id="inputCity">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">New Sub Category</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter New Sub Category">
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Select Sub Category</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Select Sub Category</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Sub Category Image</label>
                                <div class="rl-inputfile">
                                    <span>+ Upload Sub Category Image</span>
                                    <input type="file" class="form-control" id="inputCity">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Product name</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Product name">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Product price</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Product price">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Product quantity</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Product quantity">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Product type</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Select Product type</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Product variant</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Select Product variant</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Product variant value</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Select Product variant value</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Product description</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter product description">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Product images</label>
                                <div class="rl-inputfile">
                                    <span>+ Upload Product images</span>
                                    <input type="file" class="form-control" id="inputCity">
                                </div>
                            </div>

                            <div class="col-12 text-center mt-5 mb-3">
                                <button type="submit" class="btn btn-dark">+ Add More Product</button>
                                <button type="submit" class="btn btn-dark">Save as draft</button>
                                <button type="submit" class="btn btn-dark">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Add Product Content End -->

            <!-- All Product Content Start -->
            <div class="tab-pane fade" id="nav-allProducts" role="tabpanel" aria-labelledby="nav-allProducts-tab">
                <div class="rl-dashboard-content__inner rl-dashboard-allProduct-content">
                    <div class="rl-all-product-content">
                        <div class="rl-filter-content">
                            <div class="rl-filter">
                                <select name="" id="" class="form-select">
                                    <option value="" selected="">Select Product Category</option>
                                    <option value="" >Pending</option>
                                    <option value="">Confrim</option>
                                    <option value="">Cancel</option>
                                    <option value="">Complete</option>
                                </select>
                                <select name="" id="" class="form-select">
                                    <option value="" selected="">Select Product Status</option>
                                    <option value="" >Submit</option>
                                    <option value="">Live</option>
                                    <option value="">Out of Stock</option>
                                </select>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Product Name">
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Product Number">
                                <button type="button" class="btn btn-dark">Filter</button>
                            </div>
                            <div class="rl-filter">
                                <input type="text" class="form-control" placeholder="search">
                                <button type="button" class="btn btn-dark">Search</button>
                            </div>
                            <div class="rl-filter-btn">
                                <button type="button" class="btn btn-dark">+ Add New Products</button>
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
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Sub category</th>
                                    <th scope="col">Product name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" class="text-end">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="rl-products-row">
                                        <th>01</th>
                                        <td>Beverages</td>
                                        <td>Cold drinks</td>
                                        <td>Pepsi</td>
                                        <td>22 Sep 2021</td>
                                        <td class="text-end"><button class="btn btn-dark btn-small">Submit</button></td>
                                    </tr>
                                    <tr class="rl-products-details">
                                        <td colspan="6">
                                            <div class="rl-product-details__inner">
                                                <div class="rl-products-img">
                                                    <img src="assets/images/pepsi.jpg" alt="pepsi" class="img-fluid">
                                                </div>
                                                <div class="rl-product-text">
                                                    <ul class="rl-product-details-list">
                                                        <li class="rl-product-details-item"><span>Product Name :</span> Pepsi</li>
                                                        <li class="rl-product-details-item"><span>Product Category :</span> Beverages</li>
                                                        <li class="rl-product-details-item"><span>Product Stock :</span> 50 Pcs.</li>
                                                        <li class="rl-product-details-item"><span>Date :</span> 22 Sep 2021</li>
                                                        <li class="rl-product-details-item"><span>Product Sub Category :</span> Cold Drinks</li>
                                                        <li class="rl-product-details-item"><span>Product sold till now :</span> 89 Pcs.</li>
                                                        <li class="rl-product-details-item"><span>Description :</span> description</li>
                                                        <li class="rl-product-details-item"><span>Product Price :</span> $ 10</li>
                                                    </ul>
                                                    <div class="text-end">
                                                        <button type="button" class="btn btn-dark">
                                                            <svg id="edit_black_24dp_1_" data-name="edit_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                                <path id="Path_2116" data-name="Path 2116" d="M0,0H18V18H0Z" fill="none"/>
                                                                <path id="Path_2117" data-name="Path 2117" d="M11.3,7.515l.69.69L5.19,15H4.5v-.69l6.8-6.8M13.995,3a.751.751,0,0,0-.525.217L12.1,4.59,14.91,7.4,16.282,6.03a.747.747,0,0,0,0-1.057L14.527,3.218A.736.736,0,0,0,13.995,3ZM11.3,5.392,3,13.688V16.5H5.813l8.3-8.3Z" transform="translate(-0.75 -0.75)" fill="#fff"/>
                                                            </svg>
                                                            <span>Edit Product</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="rl-products-row">
                                        <th>02</th>
                                        <td>Beverages</td>
                                        <td>Cold drinks</td>
                                        <td>Pepsi</td>
                                        <td>22 Sep 2021</td>
                                        <td class="text-end"><button class="btn btn-dark btn-small">Live</button></td>
                                    </tr>
                                    <tr class="rl-products-details">
                                        <td colspan="6">
                                            <div class="rl-product-details__inner">
                                                <div class="rl-products-img">
                                                    <img src="assets/images/pepsi.jpg" alt="pepsi" class="img-fluid">
                                                </div>
                                                <div class="rl-product-text">
                                                    <ul class="rl-product-details-list">
                                                        <li class="rl-product-details-item"><span>Product Name :</span> Pepsi</li>
                                                        <li class="rl-product-details-item"><span>Product Category :</span> Beverages</li>
                                                        <li class="rl-product-details-item"><span>Product Stock :</span> 50 Pcs.</li>
                                                        <li class="rl-product-details-item"><span>Date :</span> 22 Sep 2021</li>
                                                        <li class="rl-product-details-item"><span>Product Sub Category :</span> Cold Drinks</li>
                                                        <li class="rl-product-details-item"><span>Product sold till now :</span> 89 Pcs.</li>
                                                        <li class="rl-product-details-item"><span>Description :</span> description</li>
                                                        <li class="rl-product-details-item"><span>Product Price :</span> $ 10</li>
                                                    </ul>
                                                    <div class="text-end">
                                                        <button type="button" class="btn btn-dark">
                                                            <svg id="edit_black_24dp_1_" data-name="edit_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                                <path id="Path_2116" data-name="Path 2116" d="M0,0H18V18H0Z" fill="none"/>
                                                                <path id="Path_2117" data-name="Path 2117" d="M11.3,7.515l.69.69L5.19,15H4.5v-.69l6.8-6.8M13.995,3a.751.751,0,0,0-.525.217L12.1,4.59,14.91,7.4,16.282,6.03a.747.747,0,0,0,0-1.057L14.527,3.218A.736.736,0,0,0,13.995,3ZM11.3,5.392,3,13.688V16.5H5.813l8.3-8.3Z" transform="translate(-0.75 -0.75)" fill="#fff"/>
                                                            </svg>
                                                            <span>Edit Product</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="rl-products-row">
                                        <th>03</th>
                                        <td>Beverages</td>
                                        <td>Cold drinks</td>
                                        <td>Pepsi</td>
                                        <td>22 Sep 2021</td>
                                        <td class="text-end"><button  type="button" data-bs-toggle="modal" data-bs-target="#updateStockModal" class="btn btn-dark btn-small">Out of Stock</button></td>
                                    </tr>
                                    <tr class="rl-products-details">
                                        <td colspan="6">
                                            <div class="rl-product-details__inner">
                                                <div class="rl-products-img">
                                                    <img src="assets/images/pepsi.jpg" alt="pepsi" class="img-fluid">
                                                </div>
                                                <div class="rl-product-text">
                                                    <ul class="rl-product-details-list">
                                                        <li class="rl-product-details-item"><span>Product Name :</span> Pepsi</li>
                                                        <li class="rl-product-details-item"><span>Product Category :</span> Beverages</li>
                                                        <li class="rl-product-details-item"><span>Product Stock :</span> 50 Pcs.</li>
                                                        <li class="rl-product-details-item"><span>Date :</span> 22 Sep 2021</li>
                                                        <li class="rl-product-details-item"><span>Product Sub Category :</span> Cold Drinks</li>
                                                        <li class="rl-product-details-item"><span>Product sold till now :</span> 89 Pcs.</li>
                                                        <li class="rl-product-details-item"><span>Description :</span> description</li>
                                                        <li class="rl-product-details-item"><span>Product Price :</span> $ 10</li>
                                                    </ul>
                                                    <div class="text-end">
                                                        <button type="button" class="btn btn-dark">
                                                            <svg id="edit_black_24dp_1_" data-name="edit_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                                <path id="Path_2116" data-name="Path 2116" d="M0,0H18V18H0Z" fill="none"/>
                                                                <path id="Path_2117" data-name="Path 2117" d="M11.3,7.515l.69.69L5.19,15H4.5v-.69l6.8-6.8M13.995,3a.751.751,0,0,0-.525.217L12.1,4.59,14.91,7.4,16.282,6.03a.747.747,0,0,0,0-1.057L14.527,3.218A.736.736,0,0,0,13.995,3ZM11.3,5.392,3,13.688V16.5H5.813l8.3-8.3Z" transform="translate(-0.75 -0.75)" fill="#fff"/>
                                                            </svg>
                                                            <span>Edit Product</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- All Product Content End -->

        </div>
    </div>
</section>
<!-- Dashboard Section End -->


<!-- Update Stock Modal -->
<div class="modal fade" id="updateStockModal" tabindex="-1" aria-labelledby="updateStockModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateStockModalLabel">Update Product Stocks</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3 mt-2 mb-4">
            <div class="col-8">
                <input type="text" class="form-control" id="inputPassword2" placeholder="Enter product New Stock">
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-dark">Update Stock</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
    include('include/footer.php');
?>