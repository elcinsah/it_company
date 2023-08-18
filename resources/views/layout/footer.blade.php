<!-- ======= Footer ======= -->
</main>
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row">

                <div id="divs"></div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="usr">Name:</label>
                        <input type="text" class="form-control" id="myInput" name="myInput">
                    </div>



                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Faydali Seifeler</h4>
                    <ul>
                        <li><a class="active " href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                        <li><a href="{{route('team.page')}}">Team</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Categoriyalar</h4>
                    <ul>
                        @if($meny !=null)
                            @foreach($meny as $menys)
                                <li><a href="{{route('category',$menys->id)}}">{{$menys->name}}</a></li>

                            @endforeach
                        @endif
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Bizimle Elaqe</h4>
                    <p>
                        <strong>Address: </strong>{{$contactadrestfooter->address}}<br>
                        <strong>Phone: </strong>{{$contacemailfooter->phone}}<br>
                        <strong>Email: </strong>{{$contacemailfooter->email}}<br>
                    </p>

                </div>

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>Mesular Haqqinda </h3>

                    <p>{{$aboutfooter->description}}</p>
                    <div class="social-links mt-3">
                        @if($sosial !=null)
                            <a href="{{$sosial->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="{{$sosial->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="{{$sosial->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>

</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
    var input = document.getElementById("myInput");
    input.addEventListener("keypress", function (event) {
        if (event.key === "Enter") {

            let val = document.getElementsByName('myInput')[0].value
            $.ajax({
                url: "{{route('search.text')}}",
                method: "GET",
                headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                data: {
                    "result": val,
                },
                success: function (res) {
                    const obj = JSON.parse(res);
                    var html="";

let divs=document.getElementById('divs');
for(let i in obj){

    divs.innerHTML+='mehsul haqqinda : '+obj[i].mehsul_haqqinda +' mehsulun negd qiymeti : '+obj[i].negd_qiymet +' mehsulun kredit qiymeti : '+obj[i].kredit_qiymet +'<br><hr>';

}




                }

            });

        }
    });


</script>


</body>

</html>
