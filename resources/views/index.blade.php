@extends('layouts.app')
    {{-- End Header --}}
    {{-- Start Content Page --}}
@section('content')

{{-- <div class="jumbotron jumbotron-fluid height100p banner" id="home">
    <div class="container h100">
    <div class="contentBox h100">
        <div>
            <h1 data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-offset="200"
            data-aos-delay="1000">Welcome In My Website</h1>
            <p data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-offset="200"
            data-aos-delay="500">you will see some of my experience in web designing</p>
        </div>
    </div>
    </div>
</div>
<section class="sec1" id="explore">
    <div class="container">
        <div class="row">
            <div class="offset-sm-2 col-sm-8">
                <div class="headerText text-center">
                    <h2 data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-offset="200"
                    data-aos-delay="500">About Me</h2>
                    <p data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-offset="200"
                    data-aos-delay="1000">If You Want To Be Successful, You Must Have Those Hobbies.</p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="columns-3xs">
                <div class="placeBox" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-offset="200"
                data-aos-delay="0">
                    <div class="imgBx">
                        <img src="{{ asset('storage/nour01.jpeg') }}" class="w-full aspect-square">
                    </div>
                    <div class="content">
                        <h3>
                        creative<br><span>Web-Design</span></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="placeBox" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-offset="200"
                data-aos-delay="500">
                    <div class="imgBx">
                        <img src="{{ asset('storage/nour02.jpeg') }}" class="img-fluid">
                    </div>
                    <div class="content">
                        <h3>
                        Inspiration<br><span>Web-Design</span></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="placeBox" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-offset="200"
                data-aos-delay="1000">
                    <div class="imgBx">
                        <img src="{{URL('storage/nour03.jpeg')}}" class="img-fluid">
                    </div>
                    <div class="content">
                        <h3>
                        New ideas<br><span>Web-Design</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec2" id="adventure">
    <div class="container h100">
        <div class="contentBox h100">
            <div>
                <h2 data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-offset="200"
                data-aos-delay="500">Adventure is EveryWhere</h2>
                <p data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-offset="200"
                data-aos-delay="0">Life is either an adventure or nothing. That's how life is beautiful when we do the impossible</p>
                <a href="#" class="btn btnD1" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-offset="200"
                data-aos-delay="0">Read More</a>
            </div>
        </div>
    </div>
</section>
<section class="blogpost" id="blog">
    <div class="container">
        <div class="row">
            <div class="offset-sm-2 col-sm-8">
                <div class="headerText text-center">
                    <h2 data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-offset="200"
                    data-aos-delay="500">My Hobbies</h2>
                    <p data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-offset="200"
                    data-aos-delay="700">If You Want To Be Successful, You Must Have Those Hobbies.</p>
                    <p data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-offset="200"
                    data-aos-delay="900">One To Make You Money, One To Keep You Fit</p>
                    <p data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-offset="200"
                    data-aos-delay="1000">And To Be Creative</p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="blogpost" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-offset="200"
                data-aos-delay="0">
                    <div class="imgBx">
                        <img src="img/hob01.jpg" class="img-fluid">
                    </div>
                    <div class="content">
                        <h1>SWIMMING</h1>
                        <p>Swimming is one of my favorite sports. I prefe the sea more than the closing places.</p>
                        <a href="#" class="btn btnD1">Read More</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-offset="200"
            data-aos-delay="500">
                <div class="blogpost">
                    <div class="imgBx">
                        <img src="img/hob02.jpg" class="img-fluid">
                    </div>
                    <div class="content">
                        <h1>Climbing</h1>
                        <p>I love high places where you can think better and find calm and inner peace.</p>
                        <a href="#" class="btn btnD1">Read More</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="blogpost" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-offset="200"
                data-aos-delay="500">
                    <div class="imgBx">
                        <img src="img/hob03.jpg" class="img-fluid">
                    </div>
                    <div class="content">
                        <h1>Galaxy And Stars</h1>
                        <p>Inspiration and creativity come from staring at the stars and galaxy.</p>
                        <a href="#" class="btn btnD1">Read More</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="blogpost" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-offset="200"
                data-aos-delay="1000">
                    <div class="imgBx">
                        <img src="img/hob04.jpg" class="img-fluid">
                    </div>
                    <div class="content">
                        <h1>Cars</h1>
                        <p>I like to drive and listen to music when I feel anxious and need to relax.</p>
                        <a href="#" class="btn btnD1">Read More</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="headerText text-center">
                    <h2 data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-offset="200"
                    data-aos-delay="500">Contact Me</h2>
                </div>
            </div>
        </div>
        <div class="row clrarfix">
            <div class="offset-sm-2 col-sm-8">
                <form>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control textarea" name=""></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btnD1">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> --}}

{{-- index jawad --}}

<div class="container2">

    <div class="mn1">Kies een Datum:

    </div>



    <div class="mo1">
        9:00
    </div>

    <div class="mo2">
        10:00
    </div>

    <div class="mo3">
        11:00
    </div>

    <div class="mo4">
        11:30
    </div>

    <div class="mo5">
        12:30
    </div>

    <div class="mo6">
        13:30
    </div>

</div>


<div class="container4">

    <button>
        Send
    </button>

</div>
</div>




<div class="container10">
<div class="log-bar">
    <h2>Maak een afspraak</h2>
</div>
<div class="main">
    <div class="login">
        <form  method="post" action="#">
            <label for="fname">Kies model</label>
                <div>
                    <select id="#" name="auto_model" style="outline: none; border:0; width: 320px;height: 35px;background-color:#fff;color:black;">
                        <option value="bmw">BMW</option>
                        <option value="mercedez">Mercedez</option>
                        <option value="audi">Audi</option>
                      </select>
                </div>


    </div>
    <div class="login1">
            <label for="fname">U Naam</label>
                <div>
                    <input placeholder="Naam" name="klant_naam" type="text" autofocus style="outline: none; border:0; width: 320px; height: 35px;background-color:#fff;color:black;">
                </div>

    </div>
    <div class="login">
            <label for="fname">Jouw vraag</label>
                <div>
                    <select id="#" name="vraag" style="outline: none; border:0; width: 320px; height :35px; background-color:#fff;color:black;">
                        <option value="apk">Apk</option>
                        <option value="kleine-beurt">Kleine beurt</option>
                        <option value="grote-beurt">Groot beurt</option>
                        <option value="reparatie">Reparatie</option>
                      </select>
                </div>


    </div>
    <div class="login1">
            <label for="fname">U telefoon nummer</label>
                <div>
                    <input placeholder="Telefoon nummer" name="klant_nummer" type="tel" autofocus style="outline: none; border:0; width: 320px;height: 35px;background-color:#fff;color:black;">
                </div>

    </div>
    <div class="login">
            <label for="fname">Kenteken nummer</label>
                <div>
                    <input placeholder="Kenteken" name="klant_kenteken" type="text" autofocus style="outline: none; border:0; width: 320px;height: 35px;background-color:#fff;color:black;">
                </div>

    </div>
    <div class="login1">
            <label for="fname">Email address</label>
                <div>
                    <input placeholder="Email" name="klant_email" type="text" autofocus style="outline: none; border:0; width: 320px; height: 35px; background-color:#fff;color:black;">
                </div>
    </div>
    <div class="login2">
        <label for="fname">message</label>
            <div>
                <textarea name="message" id="#" cols="30" rows="3" placeholder="Message" style="outline: none; width: 320px; border:0;background-color:#fff;color:black;"></textarea>
            </div>
    </form>
</div>

</div>
</div>


@endsection
    {{-- End Content Page --}}
