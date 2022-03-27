<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
                <li>
                    {{-- @if ( Session::has('check') != true )
                        <h1>khong co</h1>
                        @else
                        <h1>co session</h1>
                    @endif --}}
                    <a class="" href="{{route('trangchu')}}" >
                    <i class="fa fa-home" aria-hidden="true"></i><span class="nav-text">Home</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-single-04"></i><span class="nav-text">Nhân viên</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('listemployee')}}"><i class="fa fa-circle-o"></i> Danh sách nhân viên</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Trình độ</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Danh sách phòng ban</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Danh sách chức vụ</a></li>
                    </ul>
                </li>
                <li>
                    <a class="" href="{{ route('request')}}" aria-expanded="false">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                    <span class="nav-text">
                        Danh sách yêu cầu
                        </span>
                    </a>
                </li>
                <li><a class="" href="{{ route('evaluation')}}" aria-expanded="false">
                    <i class="icon icon-app-store"></i> 
                    <span class="nav-text">
                       Đánh giá
                        </span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-plus-square-o" aria-hidden="true"></i><span class="nav-text">Đào tạo</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('train')}}"><i class="fa fa-circle-o"></i> Danh sách đào tạo</a></li>
                        <li><a href="trangchu.php?require=danhsachloaidaotao.php"><i class="fa fa-circle-o"></i> Loại đào tạo</a></li>
                        <li><a href="trangchu.php?require=danhsachketquakhoahoc.php"><i class="fa fa-circle-o"></i> Kết quả khóa học</a></li>
                    </ul>
                </li>
                <li>
                    <a class="" href="{{ route('timekeeping')}}" aria-expanded="false">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                    <span class="nav-text">
                        Chấm công
                        </span>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('salary')}}" aria-expanded="false">
                    <i class="fa fa-usd" aria-hidden="true"></i>
                    <span class="nav-text">
                       Lương
                        </span>
                    </a>
                </li>
                <!-- START LƯƠNG  -->

                <!-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Quản lý lương</span></a>
                    <ul aria-expanded="false">
                        <li><a  href="trangchu.php?require=bangchamcong.php"><i class="fa fa-circle-o"></i> Bảng chấm công</a></li>
                        <li><a  href="trangchu.php?require=bangluong.php" ><i class="fa fa-circle-o"></i> Lương</a></li>
                    </ul>
                </li> -->

                <!-- END LƯƠNG -->
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i><span class="nav-text">Quản lý văn bản</span></a>
                    <ul aria-expanded="false">
                        <li><a href="trangchu.php?require=danhsachloaivanban.php"><i class="fa fa-circle-o"></i> Danh sách loại văn bản</a></li>
                        <li><a href="{{ route('document')}}"><i class="fa fa-circle-o"></i> Danh sách văn bản</a></li>
                    </ul>
                </li>
                </ul>
    </div>


</div>