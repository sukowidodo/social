@extends('layout.app')
@section('content')
    <div class="col-lg-8 row m-0 p-0">
        <div class="col-sm-12">
            <div id="post-modal-data" class="card card-block card-stretch card-height">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Create Post</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="user-img">
                            <img src="{{ auth()->user()->photo }}" alt="userimg" class="avatar-60 rounded-circle">
                        </div>
                        <form class="post-text ms-3 w-100 "  data-bs-toggle="modal" data-bs-target="#post-modal" action="javascript:void();">
                            <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                        </form>
                    </div>
                    <hr>
                    <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
                        <li class="me-3 mb-md-0 mb-2">
                            <a href="#" class="btn btn-soft-primary">
                                <img src="../assets/images/small/07.png" alt="icon" class="img-fluid me-2"> Photo/Video
                            </a>
                        </li>
                        <li class="me-3 mb-md-0 mb-2">
                            <a href="#" class="btn btn-soft-primary">
                                <img src="../assets/images/small/08.png" alt="icon" class="img-fluid me-2"> Tag Friend
                            </a>
                        </li>
                        <li class="me-3">
                            <a href="#" class="btn btn-soft-primary">
                                <img src="../assets/images/small/09.png" alt="icon" class="img-fluid me-2"> Feeling/Activity
                            </a>
                        </li>
                        <li>
                            <button class="btn btn-soft-primary">
                                <div class="card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle" id="post-option"   data-bs-toggle="dropdown">
                                            <i class="ri-more-fill"></i>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="post-option" style="">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Check in</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Live Video</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Gif</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Watch Party</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Play with Friend</a>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="modal fade" id="post-modal" tabindex="-1"  aria-labelledby="post-modalLabel" aria-hidden="true" >
                    <div class="modal-dialog   modal-fullscreen-sm-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                            </div>
                            <div class="modal-body">
                                <div class="d-flex align-items-center">
                                    <div class="user-img">
                                        <img src="{{ auth()->user()->photo }}" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                                    </div>
                                    <form class="post-text ms-3 w-100" action="javascript:void();">
                                        <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                                    </form>
                                </div>
                                <hr>
                                <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                    <li class="col-md-6 mb-3">
                                        <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/07.png" alt="icon" class="img-fluid"> Photo/Video</div>
                                    </li>
                                    <li class="col-md-6 mb-3">
                                        <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/08.png" alt="icon" class="img-fluid"> Tag Friend</div>
                                    </li>
                                    <li class="col-md-6 mb-3">
                                        <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/09.png" alt="icon" class="img-fluid"> Feeling/Activity</div>
                                    </li>
                                    <li class="col-md-6 mb-3">
                                        <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/10.png" alt="icon" class="img-fluid"> Check in</div>
                                    </li>
                                    <li class="col-md-6 mb-3">
                                        <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/11.png" alt="icon" class="img-fluid"> Live Video</div>
                                    </li>
                                    <li class="col-md-6 mb-3">
                                        <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/12.png" alt="icon" class="img-fluid"> Gif</div>
                                    </li>
                                    <li class="col-md-6 mb-3">
                                        <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/13.png" alt="icon" class="img-fluid"> Watch Party</div>
                                    </li>
                                    <li class="col-md-6 mb-3">
                                        <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="../assets/images/small/14.png" alt="icon" class="img-fluid"> Play with Friends</div>
                                    </li>
                                </ul>
                                <hr>
                                <div class="other-option">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="user-img me-3">
                                                <img src="{{ auth()->user()->photo }}" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                                            </div>
                                            <h6>Your Story</h6>
                                        </div>
                                        <div class="card-post-toolbar">
                                            <div class="dropdown">
                                       <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                       <span class="btn btn-primary">Friend</span>
                                       </span>
                                                <div class="dropdown-menu m-0 p-0">
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <i class="ri-save-line h4"></i>
                                                            <div class="data ms-2">
                                                                <h6>Public</h6>
                                                                <p class="mb-0">Anyone on or off Facebook</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <i class="ri-close-circle-line h4"></i>
                                                            <div class="data ms-2">
                                                                <h6>Friends</h6>
                                                                <p class="mb-0">Your Friend on facebook</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <i class="ri-user-unfollow-line h4"></i>
                                                            <div class="data ms-2">
                                                                <h6>Friends except</h6>
                                                                <p class="mb-0">Don't show to some friends</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <i class="ri-notification-line h4"></i>
                                                            <div class="data ms-2">
                                                                <h6>Only Me</h6>
                                                                <p class="mb-0">Only me</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($post as $row)
            <div class="col-sm-12">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="user-post-data">
                            <div class="d-flex justify-content-between">
                                <div class="me-3">
                                    <img class="rounded-circle img-fluid" src="{{$row->user->photo}}" style="width: 40px;height: 40px" alt="">
                                </div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <h5 class="mb-0 d-inline-block">{{$row->user->name}}</h5>
                                            <span class="mb-0 d-inline-block">Add New Post</span>
                                            <p class="mb-0 text-primary">{{$row->created_at->toDateTimeString()}}</p>
                                        </div>
                                        <div class="card-post-toolbar">
                                            <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <i class="ri-more-fill"></i>
                                    </span>
                                                <div class="dropdown-menu m-0 p-0">
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <div class="h4">
                                                                <i class="ri-save-line"></i>
                                                            </div>
                                                            <div class="data ms-2">
                                                                <h6>Save Post</h6>
                                                                <p class="mb-0">Add this to your saved items</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <i class="ri-close-circle-line h4"></i>
                                                            <div class="data ms-2">
                                                                <h6>Hide Post</h6>
                                                                <p class="mb-0">See fewer posts like this.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <i class="ri-user-unfollow-line h4"></i>
                                                            <div class="data ms-2">
                                                                <h6>Unfollow User</h6>
                                                                <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item p-3" href="#">
                                                        <div class="d-flex align-items-top">
                                                            <i class="ri-notification-line h4"></i>
                                                            <div class="data ms-2">
                                                                <h6>Notifications</h6>
                                                                <p class="mb-0">Turn on notifications for this post</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p>{{ $row->post_text }}</p>
                        </div>
{{--                        <div class="user-post">--}}
{{--                            <div class=" d-grid grid-rows-2 grid-flow-col gap-3">--}}
{{--                                <div class="row-span-2 row-span-md-1">--}}
{{--                                    <img src="../assets/images/page-img/p2.jpg" alt="post-image" class="img-fluid rounded w-100">--}}
{{--                                </div>--}}
{{--                                <div class="row-span-1">--}}
{{--                                    <img src="../assets/images/page-img/p1.jpg" alt="post-image" class="img-fluid rounded w-100">--}}
{{--                                </div>--}}
{{--                                <div class="row-span-1 ">--}}
{{--                                    <img src="../assets/images/page-img/p3.jpg" alt="post-image" class="img-fluid rounded w-100">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="comment-area mt-3">--}}
{{--                            <div class="d-flex justify-content-between align-items-center flex-wrap">--}}
{{--                                <div class="like-block position-relative d-flex align-items-center">--}}
{{--                                    <div class="d-flex align-items-center">--}}
{{--                                        <div class="like-data">--}}
{{--                                            <div class="dropdown">--}}
{{--                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">--}}
{{--                                    <img src="../assets/images/icon/01.png" class="img-fluid" alt="">--}}
{{--                                    </span>--}}
{{--                                                <div class="dropdown-menu py-2">--}}
{{--                                                    <a class="ms-2 me-2" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png" class="img-fluid" alt=""></a>--}}
{{--                                                    <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt=""></a>--}}
{{--                                                    <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt=""></a>--}}
{{--                                                    <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt=""></a>--}}
{{--                                                    <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt=""></a>--}}
{{--                                                    <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Sade" ><img src="../assets/images/icon/06.png" class="img-fluid" alt=""></a>--}}
{{--                                                    <a class="me-2" href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt=""></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="total-like-block ms-2 me-3">--}}
{{--                                            <div class="dropdown">--}}
{{--                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">--}}
{{--                                    140 Likes--}}
{{--                                    </span>--}}
{{--                                                <div class="dropdown-menu">--}}
{{--                                                    <a class="dropdown-item" href="#">Max Emum</a>--}}
{{--                                                    <a class="dropdown-item" href="#">Bill Yerds</a>--}}
{{--                                                    <a class="dropdown-item" href="#">Hap E. Birthday</a>--}}
{{--                                                    <a class="dropdown-item" href="#">Tara Misu</a>--}}
{{--                                                    <a class="dropdown-item" href="#">Midge Itz</a>--}}
{{--                                                    <a class="dropdown-item" href="#">Sal Vidge</a>--}}
{{--                                                    <a class="dropdown-item" href="#">Other</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="total-comment-block">--}}
{{--                                        <div class="dropdown">--}}
{{--                                 <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">--}}
{{--                                 20 Comment--}}
{{--                                 </span>--}}
{{--                                            <div class="dropdown-menu">--}}
{{--                                                <a class="dropdown-item" href="#">Max Emum</a>--}}
{{--                                                <a class="dropdown-item" href="#">Bill Yerds</a>--}}
{{--                                                <a class="dropdown-item" href="#">Hap E. Birthday</a>--}}
{{--                                                <a class="dropdown-item" href="#">Tara Misu</a>--}}
{{--                                                <a class="dropdown-item" href="#">Midge Itz</a>--}}
{{--                                                <a class="dropdown-item" href="#">Sal Vidge</a>--}}
{{--                                                <a class="dropdown-item" href="#">Other</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="share-block d-flex align-items-center feather-icon mt-2 mt-md-0">--}}
{{--                                    <a href="javascript:void();" data-bs-toggle="offcanvas" data-bs-target="#share-btn" aria-controls="share-btn"><i class="ri-share-line"></i>--}}
{{--                                        <span class="ms-1">99 Share</span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <hr>--}}
{{--                            <ul class="post-comments list-inline p-0 m-0">--}}
{{--                                <li class="mb-2">--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <div class="user-img">--}}
{{--                                            <img src="../assets/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">--}}
{{--                                        </div>--}}
{{--                                        <div class="comment-data-block ms-3">--}}
{{--                                            <h6>Monty Carlo</h6>--}}
{{--                                            <p class="mb-0">Lorem ipsum dolor sit amet</p>--}}
{{--                                            <div class="d-flex flex-wrap align-items-center comment-activity">--}}
{{--                                                <a href="javascript:void();">like</a>--}}
{{--                                                <a href="javascript:void();">reply</a>--}}
{{--                                                <a href="javascript:void();">translate</a>--}}
{{--                                                <span> 5 min </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <div class="user-img">--}}
{{--                                            <img src="../assets/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">--}}
{{--                                        </div>--}}
{{--                                        <div class="comment-data-block ms-3">--}}
{{--                                            <h6>Paul Molive</h6>--}}
{{--                                            <p class="mb-0">Lorem ipsum dolor sit amet</p>--}}
{{--                                            <div class="d-flex flex-wrap align-items-center comment-activity">--}}
{{--                                                <a href="javascript:void();">like</a>--}}
{{--                                                <a href="javascript:void();">reply</a>--}}
{{--                                                <a href="javascript:void();">translate</a>--}}
{{--                                                <span> 5 min </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">--}}
{{--                                <input type="text" class="form-control rounded" placeholder="Enter Your Comment">--}}
{{--                                <div class="comment-attagement d-flex">--}}
{{--                                    <a href="javascript:void();"><i class="ri-link me-3"></i></a>--}}
{{--                                    <a href="javascript:void();"><i class="ri-user-smile-line me-3"></i></a>--}}
{{--                                    <a href="javascript:void();"><i class="ri-camera-line me-3"></i></a>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        @endforeach


    </div>
@endsection
