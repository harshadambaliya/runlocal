$(document).ready(function() {
    $('.rl-our-service-slider').slick({
        infinite: true,
        slidesToShow: 1,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToScroll: 1
    });

    $('.rl-testimonial-slider').slick({
        infinite: true,
        slidesToShow: 3,
        dots: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.rl-product-slider').slick({
        infinite: true,
        slidesToShow: 5,
        dots: true,
        arrows: true,
        autoplay: true,
        centerMode: true,
        autoplaySpeed: 2000,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1440,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.rl-product-detail-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.rl-product-detail-nav-slider'
    });
    $('.rl-product-detail-nav-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.rl-product-detail-slider',
        arrows: false,
        dots: false,
        focusOnSelect: true
    });

    // hash && $('ul.nav a[href="' + hash + '"]').tab('show');

    // $('.nav-tabs a').click(function(e) {
    //     var scrollmem = $('body').scrollTop();
    //     window.location.hash = this.hash;
    //     $('html,body').scrollTop(scrollmem);
    // });


    $('.rl-customer-info-btn').on('click', function() {
        $(this).parents('.rl-customer-order-details').next('.rl-customer-details').toggleClass('show');
    });

    $('.rl-products-row').on('click', function() {
        $(this).next('.rl-products-details').toggleClass('show');
    });

    $('.navbar-toggler').on('click', function() {
        $('body').toggleClass('rl-menu-show');
    });

    var placeholder = "Select Location";
    $("#inputDeliverylocations").select2({
        placeholder: placeholder,
        allowClear: false,
        minimumResultsForSearch: 5
    });


    // Sales Cart
    var ctx = document.getElementById('salesChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        // The data for our dataset
        data: {
            labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", ],
            // Information about the dataset
            datasets: [{
                label: "Sales",
                backgroundColor: 'lightblue',
                borderColor: 'royalblue',
                data: [26.4, 39.8, 66.8, 66.4, 40.6, 55.2, 77.4, 69.8, 57.8, 76, 26.4, 39.8, 66.8, 66.4, 40.6, 55.2, 77.4, 69.8, 57.8, 76, 26.4, 39.8, 66.8, 66.4, 40.6, 55.2, 77.4, 69.8, 57.8, 76, ],
            }]
        }

    });

    // Views Cart
    var ctx = document.getElementById('viewsChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        // The data for our dataset
        data: {
            labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", ],
            // Information about the dataset
            datasets: [{
                label: "Views",
                backgroundColor: 'lightblue',
                borderColor: 'royalblue',
                data: [26.4, 39.8, 66.8, 66.4, 40.6, 55.2, 77.4, 69.8, 57.8, 76, 26.4, 39.8, 66.8, 66.4, 40.6, 55.2, 77.4, 69.8, 57.8, 76, 26.4, 39.8, 66.8, 66.4, 40.6, 55.2, 77.4, 69.8, 57.8, 76, ],
            }]
        }

    });

    // Loyalty Points
    var ctx = document.getElementById('loyaltyPointsChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        // The data for our dataset
        data: {
            labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", ],
            // Information about the dataset
            datasets: [{
                label: "Loyalty points",
                backgroundColor: 'lightblue',
                borderColor: 'royalblue',
                data: [26.4, 39.8, 66.8, 66.4, 40.6, 55.2, 77.4, 69.8, 57.8, 76, 26.4, 39.8, 66.8, 66.4, 40.6, 55.2, 77.4, 69.8, 57.8, 76, 26.4, 39.8, 66.8, 66.4, 40.6, 55.2, 77.4, 69.8, 57.8, 76, ],
            }]
        }

    });


    // Vouchers Redeemed
    var ctx = document.getElementById('vouchersRedeemed').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        // The data for our dataset
        data: {
            labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", ],
            // Information about the dataset
            datasets: [{
                label: "Vouchers Redeemed",
                backgroundColor: 'lightblue',
                borderColor: 'royalblue',
                data: [26.4, 39.8, 66.8, 66.4, 40.6, 55.2, 77.4, 69.8, 57.8, 76, 26.4, 39.8, 66.8, 66.4, 40.6, 55.2, 77.4, 69.8, 57.8, 76, 26.4, 39.8, 66.8, 66.4, 40.6, 55.2, 77.4, 69.8, 57.8, 76, ],
            }]
        }

    });


    // Business
    var businesssChart = document.getElementById("businesssChart").getContext('2d');
    var labels = ["2021-08-25", "2021-08-26", "2021-08-27", "2021-08-28", "2021-08-29", "2021-08-30", "2021-08-31"];
    // var labels = ["<  1", "1 - 2", "3 - 4", "5 - 9", "10 - 14", "15 - 19", "20 - 24", "25 - 29", "> - 29"];
    var datapoints = [12, 59, 5, 56, 58, 12, 59, 87, 45];
    var myChart = new Chart(businesssChart, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Business',
                backgroundColor: "#36A2EB",
                data: datapoints,
            }, {
                label: 'Business',
                backgroundColor: "#FF6384",
                data: [12, 59, 5, 56, 58, 12, 59, 85, 23],
            }],
        }
    });
    $("#startdate").on('change', function() {
        var dates2 = [labels];
        console.log(dates2);
        var startdate = document.getElementById('startdate');
        var enddate = document.getElementById('enddate');

        var indexstartdate = dates2.indexof(startdate.value);
        var indexenddate = dates2.indexof(enddate.value);

        var filterDate = dates2.slice(indexstartdate, indexenddate);

        businesssChart.config.data.labels = filterDate;
        businesssChart.update();

    });
    // function filterData() {
    //     var dates2 = [labels];
    //     console.log(dates2);
    //     var startdate = getElementById('startdate');
    //     var enddate = getElementById('enddate');

    //     var indexstartdate = dates2.indexof(startdate.value);
    //     var indexenddate = dates2.indexof(enddate.value);

    //     var filterDate = dates2.slice(indexstartdate, indexenddate);

    //     businesssChart.config.data.labels = filterDate;
    //     businesssChart.update();
    // }

    // 
    var fastProductsChart = document.getElementById("fastProductsChart");
    var myChart = new Chart(fastProductsChart, {
        type: 'bar',
        data: {
            labels: ["Coca-Cola", "Dairy Milk", "Oil", "Jeans", "Laptop", "Mobile", "TV", "Bags", "Watch", "Fan", "Photo Frame", "Belts"],
            datasets: [{
                label: '# of Tomatoes',
                data: [12, 19, 3, 5, 2, 3, 20, 3, 5, 6, 2, 1],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        }
    });


    // Repeat VS Fresh User 
    var repeatFreshUserChart = document.getElementById("repeatFreshUserChart");

    var repeatFreshUserChartData = {
        labels: [
            "Fresh User",
            "Repeat User"
        ],
        datasets: [{
            data: [133.3, 86.2],
            backgroundColor: [
                "#FF6384",
                "#63FF84"
            ]
        }]
    };

    var pieChart = new Chart(repeatFreshUserChart, {
        type: 'pie',
        data: repeatFreshUserChartData
    });


});


$(window).resize(function() {});

$(window).on('load', function() {

    $('#welcomeRunLokal').modal('show');
    setTimeout(function() {
        var divWidth = $('.rl-welcome-item__inner label').width();
        $('.rl-welcome-item__inner label').height(divWidth);
    }, 500);

    setTimeout(function() {
        var hash = window.location.hash.substr(1)
        $('button[data-bs-target="#' + hash + '"]').tab('show');
    }, 500);

});