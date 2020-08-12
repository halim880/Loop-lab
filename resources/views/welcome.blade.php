@extends('layouts.app')

@section('content')
<nav class="navbar navbar-dark navbar-expand-md fixed-top">
    <div class="container">
        <h3 class="navbar-brand">LoopLab</h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#home-section">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#explore-main-section">Explore</a></li>
                <li class="nav-item"><a class="nav-link" href="#create-main-section">Create</a></li>
                <li class="nav-item"><a class="nav-link" href="#share-main-section">Share</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HOME SECTION -->
<section id="home-section" style="background-image: url({{asset('image/home.jpg')}})">
    <div class="dark-overlay">
        <div class="home-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h1 class="display-4">Build <strong>social profile</strong> gain revenue and <strong>profits</strong></h1>
                        <div class="d-flex flex-row">
                            <div class="p-4 align-self-start mt-2"><i class="fa fa-check"></i></div>
                            <div class="p-4 align-self-end">
                                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, iure necessitatibus expedita adipisci aspernatur numquam impedit veritatis delectus possimus aliquam voluptates. Repellat maiores sapiente accusantium.</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row">
                            <div class="p-4 align-self-start mt-2"><i class="fa fa-check"></i></div>
                            <div class="p-4 align-self-end">
                                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, iure necessitatibus expedita adipisci aspernatur numquam impedit veritatis delectus possimus aliquam voluptates. Repellat maiores sapiente accusantium.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-4 align-self-start mt-2"><i class="fa fa-check"></i></div>
                            <div class="p-4 align-self-end">
                                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, iure necessitatibus expedita adipisci aspernatur numquam impedit veritatis delectus possimus aliquam voluptates. Repellat maiores sapiente accusantium.</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="card bg-primary text-center form-card">
                            <div class="card-body">
                                <h3>Sign Up Today</h3>
                                <p>Please fillout the form to register</p>
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-lg" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg" placeholder="Enter password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg" placeholder="Confirm password">
                                    
                                    </div>
                                    <button class="btn btn-outline-light btn-block">Sign Up</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EXPLORE SECTION -->
<div id="explore-head-section">
    <div class="container text-center py-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-4">Explore</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, iste vero consectetur maxime ut mollitia, qui blanditiis nemo expedita perferendis tempora hic sint voluptas ab a ex architecto molestias corrupti!</p>
                <a href="find-more" class="btn btn-outline-primary">Find out more</a>

            </div>
        </div>
    </div>
</div>
<!-- EXPLORE MAIN SECTION -->
<section id="explore-main-section" class="bg-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="{{asset('image/home.jpg')}}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-6 col-sm-12">
                <h3>Explore Learn & Connect</h3>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo impedit, vel omnis accusamus excepturi beatae minima, facilis magnam qui tempore quas architecto. Eum perferendis suscipit commodi voluptas nemo fugit repellendus?</p>
                <div class="d-flex flex-row">
                    <div class="p-4 align-self-start mt-2"><i class="fa fa-check"></i></div>
                    <div class="p-4 align-self-end mt-1"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aspernatur voluptatum quidem veniam temporibus vero nemo quae similique beatae quaerat.</p></div>

                </div>
                <div class="d-flex flex-row">
                    <div class="p-4 align-self-start mt-2"><i class="fa fa-check"></i></div>
                    <div class="p-4 align-self-end mt-1"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aspernatur voluptatum quidem veniam temporibus vero nemo quae similique beatae quaerat.</p></div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- CREAATE SECTION -->
<div id="create-head-section" class="bg-primary">
    <div class="container text-center py-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-4">Create</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, iste vero consectetur maxime ut mollitia, qui blanditiis nemo expedita perferendis tempora hic sint voluptas ab a ex architecto molestias corrupti!</p>
                <a href="find-more" class="btn btn-outline-light">Find out more</a>

            </div>
        </div>
    </div>
</div>
<!-- EXPLORE MAIN SECTION -->
<section id="create-main-section" class="bg-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h3>Explore Learn & Connect</h3>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo impedit, vel omnis accusamus excepturi beatae minima, facilis magnam qui tempore quas architecto. Eum perferendis suscipit commodi voluptas nemo fugit repellendus?</p>
                <div class="d-flex flex-row">
                    <div class="p-4 align-self-start mt-2"><i class="fa fa-check"></i></div>
                    <div class="p-4 align-self-end mt-1"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aspernatur voluptatum quidem veniam temporibus vero nemo quae similique beatae quaerat.</p></div>

                </div>
                <div class="d-flex flex-row">
                    <div class="p-4 align-self-start mt-2"><i class="fa fa-check"></i></div>
                    <div class="p-4 align-self-end mt-1"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aspernatur voluptatum quidem veniam temporibus vero nemo quae similique beatae quaerat.</p></div>

                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="{{asset('image/home.jpg')}}" class="img-fluid rounded" alt="">
            </div>
        </div>
    </div>
</section>

   <!-- SHARE SECTION -->
   <div id="share-head-section" class="bg-primary">
    <div class="container text-center py-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-4">Share</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, iste vero consectetur maxime ut mollitia, qui blanditiis nemo expedita perferendis tempora hic sint voluptas ab a ex architecto molestias corrupti!</p>
                <a href="find-more" class="btn btn-outline-light">Find out more</a>

            </div>
        </div>
    </div>
</div>
<!-- SHARE MAIN SECTION -->
<section id="share-main-section" class="bg-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="{{asset('image/home.jpg')}}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-6 col-sm-12">
                <h3>Share What You Create</h3>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo impedit, vel omnis accusamus excepturi beatae minima, facilis magnam qui tempore quas architecto. Eum perferendis suscipit commodi voluptas nemo fugit repellendus?</p>
                <div class="d-flex flex-row">
                    <div class="p-4 align-self-start mt-2"><i class="fa fa-check"></i></div>
                    <div class="p-4 align-self-end mt-1"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aspernatur voluptatum quidem veniam temporibus vero nemo quae similique beatae quaerat.</p></div>

                </div>
                <div class="d-flex flex-row">
                    <div class="p-4 align-self-start mt-2"><i class="fa fa-check"></i></div>
                    <div class="p-4 align-self-end mt-1"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aspernatur voluptatum quidem veniam temporibus vero nemo quae similique beatae quaerat.</p></div>

                </div>
            </div>
            
        </div>
    </div>
</section>
<section id="footer-section" class="text-center text-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>LoopLAB</h2>
                <p>Copyright &copy; 2020</p>
                <h6>Designed by: <a href="" class="ml-2 text-warning">Abdul Halim</a> </h6>
                <button class="btn btn-primary btn-sm"
                data-toggle="modal" data-target="#contactModal">Contact Us</button>
            </div>
        </div>
    </div>
</section>

<div class="modal" id="contactModal">
    <div class="container ">
        <div class="modal-dialog">
            <div class="modal-content bg-primary">
                <div class="modal-header">
                    <h3>Contact Us</h3>
                    <button class="btn btn-warning btn-sm">
                        <span class="close" data-dismiss="modal">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form" action="https://formspree.io/mwkrzqzw" method="post">
                        <div class="form-group">
                            <label for="name">Your name</label>
                            <input id="name" name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="_replyto" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Your name</label>
                            <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-light btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection