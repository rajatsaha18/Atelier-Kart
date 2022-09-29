@extends('website.master')

@section('title')
    Contact Us
@endsection

@section('body')
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
                <li>Mail Us</li>
            </ul>
        </div>
    </div>
    <!-- //products-breadcrumb -->
    <!-- banner -->
    <div class="banner">
        <div class="w3l_banner_nav_left">
            <nav class="navbar navbar-expand-lg navbar-light p-lg-0">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa icon-expand fa-bars"></span>
                    <span class="fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">

                </div>
            </nav>
        </div>
        <div class="w3l_banner_nav_right">
            <!-- mail -->
            <div class="mail">
                <h3>Mail Us</h3>
                <div class="row agileinfo_mail_grids">
                    <div class="col-md-4 agileinfo_mail_grid_left">
                        <ul>
                            <li><i class="fa fa-home" aria-hidden="true"></i></li>
                            <li>address<span>868 1st Avenue NYC.</span></li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
                            <li>email<span><a href="mailto:info@example.com">info@example.com</a></span></li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                            <li>call to us<span>(+123) 233 2362 826</span></li>
                        </ul>
                    </div>
                    <div class="col-md-8 agileinfo_mail_grid_right">
                        <form action="#" method="post">
                            <div class="row mail-row-in">
                                <div class="col-md-6 wthree_contact_left_grid">
                                    <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Name" required="">
                                    <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email" required="">
                                </div>
                                <div class="col-md-6 wthree_contact_left_grid">
                                    <input type="text" class="form-control" name="w3lSubject" id="w3lSubject" placeholder="Subject" required="">
                                    <input type="text" class="form-control" name="w3lPone" id="w3lPhone" placeholder="Phone" required="">
                                </div>
                            </div>
                            <textarea name="Message" required="" placeholder="Write your comments here"></textarea>
                            <button class="btn btn-primary btn-style" type="submit">Submit</button>
                            <button class="reset btn btn-primary btn-style" type="reset">Clear</button>


                        </form>
                    </div>

                </div>
            </div>
            <!-- //mail -->
        </div>
    </div>
    <!-- //banner -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>
    <!-- map -->
    <div class="map map-ifram">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
            width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
    </div>
    <!-- //map -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>

@endsection
