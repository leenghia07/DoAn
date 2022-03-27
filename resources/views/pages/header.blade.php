<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="search_bar dropdown">
                        {{-- <h2 class="mt-1">Quản trị nhân sự trường Đại Học Quy Nhơn </h2> --}}
                        <!-- <div class="dropdown-menu p-0 m-0">

                        </div> -->
                    </div>
                </div>
                <ul class="navbar-nav header-right">   
                    
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                              <!-- START ICON THÔNG BÁO hộp thoại -->       
                            <i class="mdi mdi-email"></i>
                            @if ($notify)
                                <div class="pulse-css"></div> 
                             @endif
                           
                        </a>
                          <!-- START CÁC TIN THÔNG BÁO -->    
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="list-unstyled">
                                <li> tesst</li>
                            </ul>
                        </div>
                          <!-- END CÁC TIN THÔNG BÁO -->    
                    </li>              
                    <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    
                                <i class="mdi mdi-bell"></i>
                              
                                <!-- START ICON THÔNG BÁO -->
                                     {{-- {{ $notify}} --}}
                                     @if ($notify)
                                        <div class="pulse-css"></div> 
                                     @endif
                               
                                 <!-- END ICON THÔNG BÁO -->
                            </a>
                             <!-- START CÁC TIN THÔNG BÁO -->    
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="list-unstyled">
                                    @foreach ($notify as $valuenotify)
                                        <li class="media dropdown-item">
                                            @foreach ($valuenotify->nhanvien as $valueemployee)
                                            <img src="{{ asset('./images/'.$valueemployee->HinhAnh)}}" style="width: 50px " class="rounded-circle" alt="">
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>{{$valueemployee->Ten}}</strong> {{$valuenotify->NoiDung}} </p>
                                                </a>
                                            </div>
                                        
                                        <span class="notify-time">{{$valuenotify ->Ngay }}</span>
                                    @endforeach
                                           
                                            {{-- <span class="success"><i class="ti-user"></i></span> --}}
                                        </li>
                                    @endforeach
                                </ul>

                                <!-- END CÁC TIN THÔNG BÁO -->
                                
                                <a class="all-notification" href="#">See all notifications <i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </li>
                       
                      
                        
                        {{-- Tài Khoản start --}}
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" data-target="#login_dropdown">
                                <span>
                                     {{-- Check hình ảnh  với tên đnăg nhập --}}
                                     @foreach ($data as $value)
                                      <img class=" mr-2" src="{{ asset('./images/' . $value ->HinhAnh) }}" alt="">
                                        {{ $value->Ten}}
                                </span>
                            </a>
                            <!-- <div class="dropdown-menu dropdown-menu-right" id="login_dropdown"> -->
                            <div class="dropdown-menu dropdown-menu-right">
                                <a id="manage" href="trangchu.php?require=thongtintaikhoan.php" title="Thông tin cá nhân" class="dropdown-item">
                                    <i class="icon-user"></i>
                                    <span class="ml-2">Thông tin cá nhân</span>
                                </a>
                                {{-- <a id="manage" href="" title="Đổi mật khẩu" class="dropdown-item">
                                    <i class="icon-key"></i>
                                    <span class="ml-2">Đổi mật khẩu</span>
                                </a> --}}
                                <a href="" id="manage" class="dropdown-item" data-toggle="modal" data-target="#modalEdit-doimk">
                                    <i class="icon-key"></i>
                                    <span class="ml-2">Đổi mật khẩu</span>
                                </a>
                                <a class="dropdown-item" href="{{ route('logout')}}">   
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    <span class="ml-2">Đăng xuất</span>
                                </a>
                            </div>
                        </li>
                         {{-- Tài Khoản end --}}
                </ul>
            </div>
        </nav>
    </div>
</div>
          <!-- START MODEL ĐỔI MẬT KHẨU-->
          <div class="w-50 d-flex justify-content-end">
            <div class="modal fade" id="modalEdit-doimk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered justify-content-center w-auto">
                    {{-- START FORM --}}
                    <form  method="get" action="{{route('change')}}">
                        <div class="modal-content p-3" style="width: 550px;">
                            <div class="flex-row d-flex justify-content-center mb-2">
                                <h2 class="text-info">Đổi mật khẩu</h2>
                            </div>
                            <input type="hidden" name="idnhanvien" class="form-control"  />
                            <div class="d-flex flex-column w-auto mt-3">
                                <div class="d-flex text-left mb-2 align-items-center">
                                    <div class="w-25 pl-2 mr-2">
                                        <label class="my-auto">Mật khẩu cũ</label>
                                    </div>
                                    <div class="w-75">
                                        <input type="password"  class="form-control" disabled value="{{$value->MatKhau}}"/>
                                    </div>
                                </div>
                                <div class="d-flex text-left mb-2 align-items-center">
                                    <div class="w-25 pl-2 mr-2">
                                        <label class="my-auto">Mật khẩu mới</label><b class="text-danger">*</b>
                                    </div>
                                    <div class="w-75">
                                        <input type="password" name="matkhaumoi"  class="form-control" required/>
                                    </div>
                                </div>
                                <div class="d-flex text-left mb-2 align-items-center">
                                    <div class="w-25 pl-2 mr-2">
                                        <label class="my-auto">nhập lại mật khẩu</label>
                                    </div>
                                    <div class="w-75">
                                        <input type="password" name="nhaplaimk" class="form-control"required/>
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-end my-0 mt-4">
                                    <div class="w-25 mr-2"></div>
                                    <div class="w-75 d-flex">
                                        <input type="submit" name="btn" class="btn btn-success w-40" value="Đổi mật khẩu">
                                        <input type="submit" class="btn btn-info w-40 mr-2 ml-5" data-dismiss="modal" value="Đóng">
                                        <!-- <button id= "btnCreate" type="submit" class="btn btn-primary w-50" onclick="return validateInput()">Thêm</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    @endforeach
                    {{-- END FORM --}}
                </div>
            </div>
        </div>
  
<!-- END MODEL ĐỔI MẬT KHẨU -->