@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Post" aria-label="Search Post">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card my-5">
                <div class="card-body">
                    <h3><b>Lecture Reschedule</b></h3>
                    <div class="personal-info row">
                        <div class="col profile-info">
                            <img src="https://clinicablasi.com/wp-content/uploads/2018/01/sonrisa-bonita.jpg" class="img-fluid" alt="Responsive image">
                            <div class="name-hours">
                                <b>Elizabeth May</b>
                                <p class="text-muted">6 hours ago</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-row-reverse">
                                <button class="btn btn-outline-primary category-show">Accounting</button>
                            </div>
                        </div>
                    </div>
                    <div class="post-excerpt">
                        <p>Hi Mates</p>
                        <p class="the-excerpt">
                            orem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quos corporis ea exercitationem, error eius iste aspernatur, dolorum ipsa eum dolore eveniet debitis iure esse numquam ipsam accusamus, in quis! orem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quos corporis ea exercitationem, error eius iste aspernatur, dolorum ipsa eum dolore eveniet debitis iure esse numquam ipsam accusamus, in quis! orem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quos corporis ea exercitationem, error eius iste aspernatur, dolorum ipsa eum dolore eveniet debitis iure esse numquam ipsam accusamus, in quis!
                        </p>
                    </div>
                    <div class="post-footer mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <button class="btn btn-outline-secondary bookmark-button"><i class="fa-regular fa-bookmark"></i></button>
                                <button class="btn btn-outline-secondary mx-3 add-comment-button">
                                    <p class="m-0">
                                        <i class="fa-regular fa-comment"></i>
                                        Add Response
                                    </p>
                                </button>
                            </div>
                            <div>
                                <div class="container">
                                    <div class="image-stack">
                                        <div class="img-stack-item image-stack-top">
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/110238/texture-waves2.jpeg" alt="">
                                        </div>
                                        <div class="img-stack-item image-stack-button">
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/110238/portrait-1-cropped.jpg" alt="">
                                        </div>
                                        <div class="img-stack-item image-stack-top-2">
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/110238/portrait-1-cropped.jpg" alt="">
                                        </div>
                                        <div class="img-stack-item image-stack-button-2">
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/110238/texture-waves2.jpeg" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card my-5">
                <div class="card-body">
                    <h3><b>Daily reading about life</b></h3>
                    <div class="personal-info row">
                        <div class="col profile-info">
                            <img src="https://media.istockphoto.com/photos/choose-positivity-every-morning-picture-id640307210?k=20&m=640307210&s=612x612&w=0&h=ofW4LHzSJEmSe0ijneQllUu7ghRqCr_DRHNMomMp0YA=" class="img-fluid" alt="Responsive image">
                            <div class="name-hours">
                                <b>Melina Mequila</b>
                                <p class="text-muted">2 Days ago</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-row-reverse">
                                <button class="btn btn-outline-primary category-show mx-1">Accounting</button>
                                <button class="btn btn-outline-warning category-show mx-1">Wellness</button>
                            </div>
                        </div>
                    </div>
                    <div class="post-excerpt">
                        <p>Hi Mates</p>
                        <p class="the-excerpt">
                            orem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quos corporis ea exercitationem, error eius iste aspernatur, dolorum ipsa eum dolore eveniet debitis iure esse numquam ipsam accusamus, in quis! orem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quos corporis ea exercitationem, error eius iste aspernatur, dolorum ipsa eum dolore eveniet debitis iure esse numquam ipsam accusamus, in quis! orem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quos corporis ea exercitationem, error eius iste aspernatur, dolorum ipsa eum dolore eveniet debitis iure esse numquam ipsam accusamus, in quis!
                        </p>
                    </div>
                    <div class="post-footer mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <button class="btn btn-outline-secondary bookmark-button"><i class="fa-regular fa-bookmark"></i></button>
                                <button class="btn btn-outline-secondary mx-3 add-comment-button">
                                    <p class="m-0">
                                        <i class="fa-regular fa-comment"></i>
                                        Add Response
                                    </p>
                                </button>
                            </div>
                            <div>
                                <div class="container">
                                    <div class="image-stack">
                                        <div class="img-stack-item image-stack-top">
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/110238/texture-waves2.jpeg" alt="">
                                        </div>
                                        <div class="img-stack-item image-stack-button">
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/110238/portrait-1-cropped.jpg" alt="">
                                        </div>
                                        <div class="img-stack-item image-stack-top-2">
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/110238/portrait-1-cropped.jpg" alt="">
                                        </div>
                                        <div class="img-stack-item image-stack-button-2">
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/110238/texture-waves2.jpeg" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card my-5">
                <div class="card-body">
                    <h3><b>Lecture Reschedule</b></h3>
                    <div class="personal-info row">
                        <div class="col profile-info">
                            <img src="https://clinicablasi.com/wp-content/uploads/2018/01/sonrisa-bonita.jpg" class="img-fluid" alt="Responsive image">
                            <div class="name-hours">
                                <b>Elizabeth May</b>
                                <p class="text-muted">6 hours ago</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-row-reverse">
                                <button class="btn btn-outline-primary category-show">Accounting</button>
                            </div>
                        </div>
                    </div>
                    <div class="post-excerpt">
                        <p>Hi Mates</p>
                        <p class="the-excerpt">
                            orem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quos corporis ea exercitationem, error eius iste aspernatur, dolorum ipsa eum dolore eveniet debitis iure esse numquam ipsam accusamus, in quis! orem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quos corporis ea exercitationem, error eius iste aspernatur, dolorum ipsa eum dolore eveniet debitis iure esse numquam ipsam accusamus, in quis! orem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quos corporis ea exercitationem, error eius iste aspernatur, dolorum ipsa eum dolore eveniet debitis iure esse numquam ipsam accusamus, in quis!
                        </p>
                    </div>
                    <div class="post-footer mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <button class="btn btn-outline-secondary bookmark-button"><i class="fa-regular fa-bookmark"></i></button>
                                <button class="btn btn-outline-secondary mx-3 add-comment-button">
                                    <p class="m-0">
                                        <i class="fa-regular fa-comment"></i>
                                        Add Response
                                    </p>
                                </button>
                            </div>
                            <div>
                                <div class="container">
                                    <div class="image-stack">
                                        <div class="img-stack-item image-stack-top">
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/110238/texture-waves2.jpeg" alt="">
                                        </div>
                                        <div class="img-stack-item image-stack-button">
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/110238/portrait-1-cropped.jpg" alt="">
                                        </div>
                                        <div class="img-stack-item image-stack-top-2">
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/110238/portrait-1-cropped.jpg" alt="">
                                        </div>
                                        <div class="img-stack-item image-stack-button-2">
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/110238/texture-waves2.jpeg" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">

        </div>
    </div>
</div>
@endsection
