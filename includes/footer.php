    <!-- footer start-->
    <div class="container bg-secondary">
        <div class="row justify-content-center m-3">
            <div class="col-md-3 p-3 m-3 bg-light">
                <div class="ps-5">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link fw-boler footerLinks text-secondary" aria-current="page"><h4>Pages</h4></a></li>
                        <li class="nav-item"><a class="nav-link fw-bolder footerLinks text-secondary" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link fw-bolder footerLinks text-secondary" aria-current="page" href="#">Player</a></li>
                        <li class="nav-item"><a class="nav-link fw-bolder footerLinks text-secondary" aria-current="page" href="#">Teams</a></li>
                        <li class="nav-item"><a class="nav-link fw-bolder footerLinks text-secondary" aria-current="page" href="#">Rankings</a></li>
                        <li class="nav-item"><a class="nav-link fw-bolder footerLinks text-secondary" aria-current="page" href="#">Schedules</a></li>
                </div>
            </div>
            <div class=" col-md-3 p-3 m-3 bg-light">
                <div class="ps-5">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link fw-bolder footerLinks text-secondary" aria-current="page"><h4>About Us</h4></a></li>
                        <li class="nav-item"><a class="nav-link fw-bolder footerLinks text-secondary" aria-current="page" href="#">Author</a></li>
                        <li class="nav-item"><a class="nav-link fw-bolder footerLinks text-secondary" aria-current="page" href="#">Information</a></li>
                        <li class="nav-item"><a class="nav-link fw-bolder footerLinks text-secondary" aria-current="page" href="#">Instructor Info</a></li>
                    </ul>
                </div>
            </div>
            <div class=" col-md-3 p-3 m-3 bg-light">
                <div class="ps-5">
                    <h4 class="text-secondary">Contract Us</h4>
                    <h6 class="text-secondary">fifa2022@support.com</h6>
                    <h6 class="text-secondary">+09696000123456</h6>
                    <h6 class="text-secondary">Physical Location</h6>
                </div>
            </div>
        </div>
        <footer class="text-light text-center"><i class="fa-regular fa-copyright"></i> <small>FIFA World Cup 2022</small>
        </footer>
    </div>
    <!-- footer start-->
    
    
    <!-- scripts start-->
    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="fontawesome/js/fontawesome.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- scripts end-->


    <!-- own carousel js start -->
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            autoplayTimeout: 2000,
            margin: 10,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                960: {
                    items: 4
                },
                1200: {
                    items: 4
                }
            }
        });
        owl.on('mousewheel', '.owl-stage', function (e) {
            if (e.deltaY > 0) {
                owl.trigger('next.owl');
            } else {
                owl.trigger('prev.owl');
            }
            e.preventDefault();
        });
    </script>
    <!-- own carousel js end -->

</body>
</html>