@extends('layout.app')
@section('content')
    <div class="col-lg-8 row m-0 p-0">
        @foreach($posts as $pos)
            <div class="col-sm-12">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="user-post-data">
                            <div class="d-flex justify-content-between">
                                <div class="me-3">
                                    <img class="rounded-circle img-fluid" style="height: 40px;width: 40px" src="{{$pos->user->photo}}" alt="">
                                </div>
                                <div class="w-100">
                                    <div class="d-flex  justify-content-between">
                                        <div class="">
                                            <h5 class="mb-0 d-inline-block">{{$pos->user->name}}</h5>
                                            {{--                                        <span class="mb-0 d-inline-block">Added New Image in a Post</span>--}}
                                            <p class="mb-0 text-primary">{{$pos->created_at->toDateTimeString()}}</p>
                                        </div>
                                        <div class="card-post-toolbar">
                                            <div class="dropdown">
                                    <span class="dropdown-toggle" id="postdata-5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <i class="ri-more-fill"></i>
                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p>{{ $pos->post_text }}</p>
                        </div>
                        <div class="user-post">
                            <a href="javascript:void();"><img src="{{ $pos->post_image }}" alt="post-image" class="img-fluid rounded w-100"></a>
                        </div>
                        <div class="comment-area mt-3">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="like-block position-relative d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="like-data">
                                            <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <img src="../assets/images/icon/01.png" class="img-fluid" alt="">
                                    </span>
                                                <div class="dropdown-menu py-2">
                                                    <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png" class="img-fluid" alt=""></a>
                                                    <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt=""></a>
                                                    <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt=""></a>
                                                    <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt=""></a>
                                                    <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt=""></a>
                                                    <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="../assets/images/icon/06.png" class="img-fluid" alt=""></a>
                                                    <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="total-like-block ms-2 me-3">
                                            <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    140 Likes
                                    </span>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Max Emum</a>
                                                    <a class="dropdown-item" href="#">Bill Yerds</a>
                                                    <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                    <a class="dropdown-item" href="#">Tara Misu</a>
                                                    <a class="dropdown-item" href="#">Midge Itz</a>
                                                    <a class="dropdown-item" href="#">Sal Vidge</a>
                                                    <a class="dropdown-item" href="#">Other</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total-comment-block">
                                        <div class="dropdown">
                                 <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                 20 Comment
                                 </span>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Max Emum</a>
                                                <a class="dropdown-item" href="#">Bill Yerds</a>
                                                <a class="dropdown-item" href="#">Hap E. Birthday</a>
                                                <a class="dropdown-item" href="#">Tara Misu</a>
                                                <a class="dropdown-item" href="#">Midge Itz</a>
                                                <a class="dropdown-item" href="#">Sal Vidge</a>
                                                <a class="dropdown-item" href="#">Other</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">
                                    <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn"><i class="ri-share-line"></i>
                                        <span class="ms-1">99 Share</span></a>
                                </div>
                            </div>
                            <hr>
                            <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
                                <div class="comment-attagement d-flex">
                                    <a href="javascript:void();"><i class="ri-link me-3"></i></a>
                                    <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>
                                    <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
