<!-- FOOTER -->
<footer>
    <div class="container-full">
        <div class="insta-g">
            <div class="position-center-center">
                <h3>From The @gallery</h3>
            </div>
            <ul>
                <li><img src="/images/insta-post-1.jpg" alt=""></li>
                <li><img src="/images/insta-post-2.jpg" alt=""></li>
                <li><img src="/images/insta-post-6.jpg" alt=""></li>
                <li><img src="/images/insta-post-4.jpg" alt=""></li>
                <li><img src="/images/insta-post-5.jpg" alt=""></li>
                <li><img src="/images/insta-post-3.jpg" alt=""></li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        <div class="row">
            <!-- ABOUT Location -->
            <div class="col-md-4">
                <div class="about-footer"><img class="margin-bottom-30" src="/images/logo-foot.png" alt="">

                    <p><i class="icon-pointer"></i> {{\App\Models\Address::myAddress()->address1}}, <br>
                        {{\App\Models\Address::myAddress()->address2}}</p>
                    <p><i class="icon-call-end"></i> <br>
                        {{\App\Models\Address::myAddress()->tel}}<br>
                        {{\App\Models\Address::myAddress()->tel2}}</p>
                    <p><i class="icon-envelope"></i>{{\App\Models\Address::myAddress()->email}}<br>
                        {{\App\Models\Address::myAddress()->email2}}</p>
                </div>
            </div>

            <!-- HELPFUL LINKS -->
            <div class="col-md-5">
                <h6>Links</h6>
                <ul class="link two-half">
                    <li><a href="#."> Products</a></li>
                    <li><a href="#."> Find a Store</a></li>
                    <li><a href="#."> Features</a></li>
                    <li><a href="#."> Privacy Policy</a></li>
                    <li><a href="#."> Blog</a></li>
                    <li><a href="#."> Press Kit </a></li>
                    <li><a href="#."> Products</a></li>
                    <li><a href="#."> Find a Store</a></li>
                    <li><a href="#."> Features</a></li>
                    <li><a href="#."> Privacy Policy</a></li>
                    <li><a href="#."> Blog</a></li>
                    <li><a href="#."> Press Kit </a></li>
                </ul>
            </div>

            <!-- HELPFUL LINKS -->
            <div class="col-md-3">
                <h6>Account Info</h6>
                <ul class="link">
                    <li><a href="#."> Products</a></li>
                    <li><a href="#."> Find a Store</a></li>
                    <li><a href="#."> Features</a></li>
                    <li><a href="#."> Privacy Policy</a></li>
                    <li><a href="#."> Blog</a></li>
                    <li><a href="#."> Press Kit </a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Rights -->
    <div class="rights">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>© 2021 SandHShop All right reserved. <a href="https://rootsystem.info">root system</a></p>
                </div>
                <div class="col-md-6 text-right"><img src="/images/card-icon.png" alt=""></div>
            </div>
        </div>
    </div>
</footer>
