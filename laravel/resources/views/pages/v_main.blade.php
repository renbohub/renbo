@extends('layouts.landing')
@section('content')
<style>
        #video-container {
            width: 100%; /* Set the desired width for the cropped video */
            height: 75vh; /* Set the desired height for the cropped video */
            position: relative;
            overflow: hidden;
        }

        #cropped-video {
            width: 100%;
            height: 100%;
            object-fit: cover!important; /* Adjust this property based on your cropping needs */
        }

        #overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); /* Adjust the alpha value for the desired overlay opacity */
        }

        #text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }
        #map {
            height: 600px;
            width: 100%;
            opacity: 1;
            z-index: 1;
        }
        .leaflet-container {
            background: none !important;
        }
        

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }
        .services{
            @media (min-width:960px) {padding-right: 100px!important;}
        }
        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            /* position: absolute; */
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            /* position: absolute; */
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 7px;
            width: 40px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 10%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            /* background-color: #00754e; */
        }

        /* Fading animation */
        .fade {
        animation-name: fade;
        animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }
        .n-btn {
            width: 70px!important;
            background-color: white;
            border-radius: 50%;
            height: 70px;
        }
        .n-btn:hover{
            background-color: aquamarine;
        }
</style>
    <div id="video-container">
        <div id="overlay"></div>
        <video id="cropped-video" autoplay loop muted>
            <source src="{{asset('renbo/sites/videos/hero.mp4')}}" type="video/mp4" >
        </video>
        <div id="text-overlay">
            <h1 class="mb-3"><b>Takes you to advanced automation and digital transformation.</b></h1>
            <div style="font-size: 15px; text-align: center;">Explore streamlined processes and advanced digitization for enhanced efficiency and innovation</div>
            <br>
            <p>&diams; PLC &nbsp;	&diams; SCADA  &nbsp;	&diams; IIoT  &nbsp;	&diams;  Web Developer</p>
            <br>
            <button class=" btn btn-secondary px-5 rounded-pill py-2">Get a Quote</button>
        </div>
    </div>
    <section id="features" class="gray-section my-0">
        <div class="container pb-3 pt-0">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1><span class="navy"> Join with Our Client</span> </h1>
                    <p>Transforming Connectivity with IoT and Automation Excellence </p>
                </div>
                <div class="owl-carousel">
                    <div class="img-corousel">
                        <img src="{{asset('renbo/sites/img/logo-1.png')}}" alt="">
                    </div>
                    <div class="img-corousel">
                        <img src="{{asset('renbo/sites/img/logo-2.png')}}" alt="">
                    </div>
                    <div class="img-corousel">
                        <img src="{{asset('renbo/sites/img/logo-3.png')}}" alt="">
                    </div>
                    <div class="img-corousel">
                        <img src="{{asset('renbo/sites/img/logo-4.png')}}" alt="">
                    </div>
                    <div class="img-corousel">
                        <img src="{{asset('renbo/sites/img/logo-5.png')}}" alt="">
                    </div>
                    <div class="img-corousel">
                        <img src="{{asset('renbo/sites/img/logo-6.png')}}" alt="">
                    </div>
                    <div class="img-corousel">
                        <img src="{{asset('renbo/sites/img/logo-7.png')}}" alt="">
                    </div>
                    <div class="img-corousel">
                        <img src="{{asset('renbo/sites/img/logo-8.png')}}" alt="">
                    </div>
                    <div class="img-corousel">
                        <img src="{{asset('renbo/sites/img/logo-9.png')}}" alt="">
                    </div>
                    <div class="img-corousel">
                        <img src="{{asset('renbo/sites/img/logo-10.png')}}" alt="">
                    </div>
                    <div class="img-corousel">
                        <img src="{{asset('renbo/sites/img/logo-11.png')}}" alt="">
                    </div>
                    <div class="img-corousel">
                        <img src="{{asset('renbo/sites/img/logo-12.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class=" team py-5">
        <div class="container-fluid">
            <div class="row m-b-lg">
                
            </div>
            <div class="row">
                
                <div class="col-12 px-5">
                    <div class="card" style="border-radius: 20px;overflow:hidden;">
                        <div class="card-body" style=" padding-left: 10%;padding-right: 10%; background: rgb(165,242,247);
                        background: linear-gradient(324deg, rgba(165,242,247,1) 0%, rgba(213,255,222,1) 100%);">
                            <div class="row">
                                <div class="col-lg-12 text-start text-dark py-4">
                                    <div style="font-size: 30px"><b>SERVICE</b><br>CAN WE<br>BUILD<b> FOR YOU</b><br></div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3">
                                    <div class="card" style="border-radius: 25px; overflow: hidden">
                                        <div class="card-body p-0" style="background-color: rgb(219, 250, 245)">
                                            <img src="{{asset('renbo/sites/img/system-1.png')}}" alt="" width="100%">
                                            <div class="px-5 mb-4">
                                                <h3><b>Electrical System</b></h3>
                                                <p>Powering Your World: Experience the Future with Our Advanced Electrical System</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3">
                                    <div class="card" style="border-radius: 25px; overflow: hidden">
                                        <div class="card-body p-0" style="background-color: rgb(219, 250, 245)">
                                            <img src="{{asset('renbo/sites/img/system-2.png')}}" alt="" width="100%">
                                            <div class="px-5 mb-4">
                                                <h3><b>PLC & SCADA System</b></h3>
                                                <p>Elevate Your Operations: Unlock Efficiency with Our PLC and SCADA System</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3">
                                    <div class="card" style="border-radius: 25px; overflow: hidden">
                                        <div class="card-body p-0" style="background-color: rgb(219, 250, 245)">
                                            <img src="{{asset('renbo/sites/img/system-3.png')}}" alt="" width="100%">
                                            <div class="px-5 mb-4">
                                                <h3><b>Web Development</b></h3>
                                                <p>Elevate Your Online Presence: Unleash Innovation with Our Web Development Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3">
                                    <div class="card" style="border-radius: 25px; overflow: hidden">
                                        <div class="card-body p-0" style="background-color: rgb(219, 250, 245)">
                                            <img src="{{asset('renbo/sites/img/system-4.png')}}" alt="" width="100%">
                                            <div class="px-5 mb-4">
                                                <h3><b>IIoT System</b></h3>
                                                <p>Empower Your Industry: Harness the Potential of IIoT with Our Innovative Services</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
               
            </div>
           
        </div>
    </section>
    <section  class="features">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Lets Start<br/> <span class="navy">Digital Transformation With Us</span> </h1>
                <p>Transform Your Operations: Unleash Efficiency with Our Digitization Solution </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-8 col-lg-7 col-md-12">
                <div id="map"></div>
            </div>
            <div class="col-12 col-xl-4 col-lg-5 col-md-12 pt-5">
                <h2><b>Make it Centralized</b></h2>
                <div class="text-start">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <button class="ms-4 n-btn" onclick="plusSlides(1)"><i class="fa fa-arrow-right"></i></button>
                </div>
                <div class="slideshow-container pt-4 px-4">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides pe-5">
                        <p style="text-align: justify;">A <b>Production Monitoring Dashboard </b>is a visual representation of key performance indicators (KPIs) and real-time data related to the production processes of a business or manufacturing facility. The dashboard provides a centralized and easily understandable view of the production activities, allowing stakeholders to make informed decisions, identify trends, and respond quickly to issues. 
                        </p>
                        <br>
                        <img src="{{asset('renbo/sites/img/ss-oee.png')}}" style="width:80% ; border-radius: 10px;">
                        <hr>
                    </div>
                    <div class="mySlides pe-5">
                        <p style="text-align: justify;">A <b>Smart Office Dashboard</b>  is a centralized display system that integrates various technologies to provide real-time information and insights into different aspects of office operations. It leverages IoT (Internet of Things), sensors, and other smart technologies to enhance the efficiency, productivity, and overall experience within the office environment. 
                        </p>
                        <br>
                        <img src="{{asset('renbo/sites/img/ss-office.png')}}" style="width:80% ; border-radius: 10px;">
                        <hr>
                    </div>
                    <div class="mySlides pe-5">
                        <p style="text-align: justify;">
                            A <b>Smart Utility Dashboard</b>  is a centralized platform that integrates data from various utility systems to provide real-time insights, monitoring, and control over utility-related operations. This dashboard is particularly relevant for industries such as energy, water, and waste management, where efficient resource utilization and sustainability are critical.
                        </p>
                        <br>
                        <img src="{{asset('renbo/sites/img/ss-utility.png')}}" style="width:80% ; border-radius: 10px;">
                        <hr>
                    </div>

                   

                    <!-- Next and previous buttons -->
                    
                    <br>

                    <!-- The dots/circles -->
                   
                </div>
            </div>
        </div>    
    </section>
    <section  style="background-image: url('{{asset('renbo/sites/img/image 7.png')}}') ;background-color: #00000;opacity:1;    background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="" style="background-color: #00000018">
            <div class="container pb-4 px-1" >      
                <div class="row">
                    <div class="col-lg-12 text-center text-white">
                        <div class="navy-line"></div>
                        <h1><b>Factory Automation Solution</b></h1>
                        <p class="text-white">Revolutionize Your Factory Operations: Experience Efficiency with Our Automation Solution</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg col-md-2 col-sm-6 col-6 mb-3">
                        <div class="card" style="background-color: rgba(255, 255, 255, 0.445)">
                            <div class="card-body text-center" >
                                <img src="{{asset('renbo/sites/img/card-1.png')}}" alt="" height="70px">
                            </div>
                        </div>
                        <div class="text-center text-white pt-2">
                            <b>PLC <br> Programming</b>
                        </div>
                    </div>
                    <div class="col-lg col-md-2 col-sm-6 col-6 mb-3">
                        <div class="card" style="background-color: rgba(255, 255, 255, 0.445)">
                            <div class="card-body text-center" >
                                <img src="{{asset('renbo/sites/img/card-2.png')}}" alt="" height="70px">
                            </div>
                        </div>
                        <div class="text-center text-white pt-2">
                            <b>SCADA <br> System</b>
                        </div>
                    </div>
                    <div class="col-lg col-md-2 col-sm-6 col-6 mb-3">
                        <div class="card" style="background-color: rgba(255, 255, 255, 0.445)">
                            <div class="card-body text-center" >
                                <img src="{{asset('renbo/sites/img/card-3.png')}}" alt="" height="70px">
                            </div>
                            
                        </div>
                        <div class="text-center text-white pt-2">
                            <b>HMI<br> Design</b>
                        </div>
                    </div>
                    <div class="col-lg col-md-2 col-sm-6 col-6 mb-3">
                        <div class="card" style="background-color: rgba(255, 255, 255, 0.445)">
                            <div class="card-body text-center" >
                                <img src="{{asset('renbo/sites/img/card-4.png')}}" alt="" height="70px">
                            </div>
                        </div>
                        <div class="text-center text-white pt-2">
                            <b>Nut <br> Runner</b>
                        </div>
                    </div>
                    <div class="col-lg col-md-2 col-sm-6 col-6 mb-3">
                        <div class="card" style="background-color: rgba(255, 255, 255, 0.445)">
                            <div class="card-body text-center" >
                                <img src="{{asset('renbo/sites/img/card-5.png')}}" alt="" height="70px">
                            </div>
                        </div>
                        <div class="text-center text-white pt-2">
                            <b>Servo<br> Programming</b>
                        </div>
                    </div>
                    <div class="col-lg col-md-2 col-sm-6 col-6 mb-3">
                        <div class="card" style="background-color: rgba(255, 255, 255, 0.445)">
                            <div class="card-body text-center" >
                                <img src="{{asset('renbo/sites/img/card-6.png')}}" alt="" height="70px">
                            </div>
                        </div>
                        <div class="text-center text-white pt-2">
                            <b>Robot<br> Programming</b>
                        </div>
                    </div>
                    <div class="col-lg col-md-2 col-sm-6 col-6 mb-3">
                        <div class="card" style="background-color: rgba(255, 255, 255, 0.445)">
                            <div class="card-body text-center" >
                                <img src="{{asset('renbo/sites/img/card-7.png')}}" alt="" height="70px">
                            </div>
                        </div>
                        <div class="text-center text-white pt-2">
                            <b>Inverter<br> Setup</b>
                        </div>
                    </div>
                    <div class="col-lg col-md-2 col-sm-6 col-6 mb-3">
                        <div class="card" style="background-color: rgba(255, 255, 255, 0.445)">
                            <div class="card-body text-center" >
                                <img src="{{asset('renbo/sites/img/card-8.png')}}" alt="" height="70px">
                            </div>
                        </div>
                        <div class="text-center text-white pt-2">
                            <b>Camera<br> Inspection</b>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>
    
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Why Chose Us</h1>
                    
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-lg-offset-2 features-text">
                    <small>renbo.co.id</small>
                    <h2>Innovative Solutions </h2>
                    <i class="fa fa-lightbulb-o big-icon float-right"></i>
                    <p class="pr-5" style="text-align: justify">We specialize in pioneering IoT, automation, and electrical solutions, leveraging cutting-edge technologies to drive innovation in your industry.</p>
                </div>
                <div class="col-lg-5 features-text">
                    <small>renbo.co.id</small>
                    <h2> Dedicated Support </h2>
                    <i class="fa fa-shield big-icon float-right"></i>
                    <p>At PT Renbo, we prioritize customer satisfaction. Our dedicated team provides comprehensive support throughout the implementation process and beyond, ensuring your success every step of the way.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-lg-offset-2 features-text">
                    <small>renbo.co.id</small>
                    <h2>Efficiency Optimization</h2>
                    <i class="fa fa-clock-o big-icon float-right"></i>
                    <p class="pr-2">Our solutions are designed to optimize efficiency, streamline processes, and maximize productivity, helping you stay ahead of the curve in today's competitive landscape.</p>
                </div>
                <div class="col-lg-5 features-text">
                    <small>renbo.co.id</small>
                    <h2>Perfectly GEMBA </h2>
                    <i class="fa fa-users big-icon float-right"></i>
                    <p class="pr-5" style="text-align: justify">Highly Knowledge and many experience to create solutions in Automation and IoT case.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="gray-section contact">
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <img src="{{asset('renbo/sites/img/renbo-1.png')}}" alt="" width="200px">
                    
                </div>
            </div>
            <div class="row m-b-lg justify-content-center">
                <div class="col-lg-3 ">
                    <address>
                        <strong><span class="navy">PT. Renbo Revolution Technologys</span></strong><br/>
                        Jalan Kedasih III Blok C-1 No.25<br/>
                        Mekarmukti , Cikarang Utara<br/><br>
                        <abbr title="Email">Email:</abbr> sales@renbo.co.id
                    </address>
                </div>
                <div class="col-lg-4">
                    <p class="text-color" style="text-align: justify">
                        PT Renbo, established in 2023, is a leading provider of IoT, automation, and electrical solutions. Our cutting-edge technologies empower businesses to optimize efficiency and embrace digital transformation. At PT Renbo, innovation and reliability drive our commitment to delivering solutions that redefine possibilities.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="mailto:sales@renbo.co.id" class="btn btn-primary">Send us mail</a>
                    <p class="m-t-sm">
                        Or follow us on social platform
                    </p>
                    <ul class="list-inline social-icon">
                        <li class="list-inline-item"><a href="https://instagram.com/renbo.co.id"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center m-t-lg m-b-lg">
                    <p><strong>&copy; 2023 Renbo Revolution Technology</strong><br/> .</p>
                </div>
            </div>
        </div>
    </section>
    
@endsection
@section('script')
    <script>
        var owl = $('.owl-carousel');
            owl.owlCarousel({
                items:7,
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:2000,
                autoplayHoverPause:true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:3,
                        
                    },
                    600:{
                        items:6,
                       
                    },
                    1000:{
                        items:8,
                        
                    }
                }
        });
    </script>
    <script>
        
        var map = L.map('map',{
            scrollWheelZoom: false
        }).setView([0, 0], 2);
        
        // Add a base map (you can replace this with your own tile layer or use other providers)
        L.tileLayer('', {
            maxZoom: 19,
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);
        
        // Add your georeferenced image as an overlay
        var imageUrl = '{{asset("renbo/sites/img/map2.png")}}'; // replace with the actual path
        var imageBounds = [[-180, -180], [180, 180]]; // replace with the actual bounds
        
        L.imageOverlay(imageUrl, imageBounds).addTo(map);
                    var marker = L.marker([-40,-150]).addTo(map)
                        .bindTooltip("<b>Main Gate</b><br>Total Vehicle in  : 100 <br> Parking Space :")
                        .openTooltip();
        
                    // Add a click event listener to the marker
                    marker.on('click', function() {
                        // Redirect to a new page or perform any other action
                        window.location.href = 'index.php?page=guest'; // Change 'new_page.php' to the desired page
                    });
                    var marker = L.marker([40,-110]).addTo(map)
                        .bindTooltip("<b>Warehouse</b><br> Safety Stock : 20 part <br>  :", {
                            direction: 'left',
                            offset: [-30,0]
                    })
                        .openTooltip();
        
                    // Add a click event listener to the marker
                    marker.on('click', function() {
                        // Redirect to a new page or perform any other action
                        window.location.href = 'index.php?page=warehouse'; // Change 'new_page.php' to the desired page
                    });
                    var marker = L.marker([40,20]).addTo(map)
                        .bindTooltip("<b>Production</b><br> Ach Rate : 20% <br>  OEE Rate : 20% <br>  :")
                        .openTooltip();
        
                    // Add a click event listener to the marker
                    marker.on('click', function() {
                        // Redirect to a new page or perform any other action
                        window.location.href = 'index.php?page=oee'; // Change 'new_page.php' to the desired page
                    });
                    var marker = L.marker([20,110]).addTo(map)
                        .bindTooltip("<b>Water Quality</b><br> PH : 20% <br>  Temp : 20% <br> COD : 20%  <br>  :", {
                            direction: 'right',
                            offset: [0,0]
                        })
                        .openTooltip();
        
                    // Add a click event listener to the marker
                    marker.on('click', function() {
                        // Redirect to a new page or perform any other action
                        window.location.href = 'index.php?page=water'; // Change 'new_page.php' to the desired page
                    });
                    var marker = L.marker([0,30]).addTo(map)
                        .bindTooltip("<b>Utiliy</b><br> Pressure : 20% <br>  Power Out : 20% <br> Current : 20%  <br> Temp : 20%   ", {
                            direction: 'right',
                            offset: [0,0]
                        })
                        .openTooltip();
        
                    // Add a click event listener to the marker
                    marker.on('click', function() {
                        // Redirect to a new page or perform any other action
                        window.location.href = 'index.php?page=dashboard'; // Change 'new_page.php' to the desired page
                    });
        
                   
                    var marker = L.marker([0,-30]).addTo(map)
                        .bindTooltip("<b>Smart Office</b><br> Power usage : 20 kw <br>  :", {
                            direction: 'left',
                            offset: [-30,0]
                    })
                        .openTooltip();
                        marker.on('click', function() {
                        // Redirect to a new page or perform any other action
                        window.location.href = 'index.php?page=office'; // Change 'new_page.php' to the desired page
                    });
                 var marker = L.marker([-30,100]).addTo(map)
                        .bindTooltip("<b>Environment</b><br> CO : 20 ppm <br>  O2 : 20 ppm <br>Temp : 30 C <br>", {
                            direction: 'right',
                            offset: [0,0]
                    })
                        .openTooltip();
                        marker.on('click', function() {
                        // Redirect to a new page or perform any other action
                        window.location.href = 'index.php?page=env'; // Change 'new_page.php' to the desired page
                    });
                    document.getElementsByClassName( 'leaflet-control-attribution' )[0].style.display = 'none';
    </script>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
    </script>
@endsection