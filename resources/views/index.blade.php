@extends('layouts.app')

@section('content')

<div class="container-fluid" style="margin-top: 15px;">

    <!-- Carousel -->
    <div class="carousel__wrapper">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="{{ asset('uploads/news/01.jpg') }}">

                    <div class="carousel-caption">
                        <h4><a href="#">1. กลุ่มงานเวชกรรมสังคม โรงพยาบาลมหาราชนครราชสีมา</a></h4>
                        <p>
                            กลุ่มงานเวชกรรมสังคม โรงพยาบาลมหาราชนครราชสีมา ...
                            </a>
                        </p>
                    </div>
                </div><!-- End Item -->

                <div class="item">
                    <img src="{{ asset('uploads/news/02.jpg') }}">

                    <div class="carousel-caption">
                        <h4><a href="#">2. ศูนย์แพทย์ศาสตร์ศึกษา โรงพยาบาลมหาราชนครราชสีมา</a></h4>
                        <p>
                            ศูนย์แพทย์ศาสตร์ศึกษา โรงพยาบาลมหาราชนครราชสีมา ...
                        </p>
                    </div>
                </div><!-- End Item -->

                <div class="item">
                    <img src="{{ asset('uploads/news/03.jpg') }}">

                    <div class="carousel-caption">
                        <h4><a href="#">3. รับสมัครลูกจ้างชั่วคราว 75 อัตรา</a></h4>
                        <p>
                            โรงพยาบาลมหาราชนครราชสีมา รับสมัครลูกจ้างชั่วคราว จำนวน 75 อัตรา สามารถดูรายละเอียดได้ที่
                            <a class="label label-primary" href="http://www.mnrh.go.th/th/info.php?act=view_notice" target="_blank">
                                ลิงค์
                            </a>
                        </p>
                    </div>
                </div><!-- End Item -->

                <div class="item">
                    <img src="{{ asset('uploads/news/04.jpg') }}">

                    <div class="carousel-caption">
                        <h4><a href="#">4. เจ็บป่วยฉุกเฉิน โทร 1669</a></h4>
                        <p>
                            เจ็บป่วยฉุกเฉิน โทร 1669 ไม่ถามสิทธิ์ ใกล้ที่ไหนไปที่นั่น ...
                            </a>
                        </p>
                    </div>
                </div><!-- End Item -->

                <div class="item">
                    <img src="{{ asset('uploads/news/05.jpg') }}">

                    <div class="carousel-caption">
                        <h4><a href="#">5. ส่งเสด็จสู่สวรรคาลัย</a></h4>
                        <p>
                            ปวงข้าพระพุทธเจ้า ขอน้อมเกล้าน้อมกระหม่อมรำลึกในพระมหากรุณาธิคุณหาที่สุดมิได้
                        </p>
                    </div>
                </div><!-- End Item -->
            </div><!-- End Carousel Inner -->

            <!-- Slide list -->
            <ul class="list-group col-sm-4" style="height: 400px; background-color: #fff;">
                <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active">
                    <h4>1. กลุ่มงานเวชกรรมสังคม โรงพยาบาลมหาราชนครราชสีมา</h4>
                </li>
                <li data-target="#myCarousel" data-slide-to="1" class="list-group-item">
                    <h4>2. ศูนย์แพทย์ศาสตร์ศึกษา โรงพยาบาลมหาราชนครราชสีมา</h4>
                </li>
                <li data-target="#myCarousel" data-slide-to="2" class="list-group-item">
                    <h4>3. โรงพยาบาลมหาราชนครราชสีมา รับสมัครลูกจ้างชั่วคราว จำนวน 75 อัตรา</h4>
                </li>
                <li data-target="#myCarousel" data-slide-to="3" class="list-group-item">
                    <h4>4. เจ็บป่วยฉุกเฉิน โทร 1669</h4>
                </li>
                <li data-target="#myCarousel" data-slide-to="4" class="list-group-item">
                    <h4>5. ส่งเสด็จสู่สวรรคาลัย</h4>
                </li>
            </ul>
            <!-- Slide list -->

            <!-- Controls -->
            <div class="carousel-controls">
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <!-- Controls -->

        </div>
    </div>
    <!-- End Carousel -->

    <!-- Left zone -->
    <div class="col-md-9" style="padding: 0px; border-right: 1px solid #A4A4A4;">

        <!-- News -->
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="panel panel-green">
                    <div class="panel-heading"><i class="fa fa-bullhorn"></i> ข่าวประชาสัมพันธ์ / กิจกรรม</div>
                    <div class="panel-body">

                        <div class="col-sm-4">
                            <div class="news">
                                <div class="img-figure">
                                    <!-- <div class="cat">fashion</div> -->
                                    <img src="{{ asset('uploads/news/news01_thumbnail.jpg') }}" class="img-responsive">
                                </div>

                                <div class="title">
                                    <h1>The start of the web and web design</h1>
                                </div>
                                <p class="description">
                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden...
                                </p>

                                <p class="more">
                                    <a href="#">read more</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="news">
                                <div class="img-figure">
                                    <!-- <div class="cat">fashion</div> -->
                                    <img src="{{ asset('uploads/news/news01_thumbnail.jpg') }}" class="img-responsive">
                                </div>

                                <div class="title">
                                    <h1>The start of the web and web design</h1>
                                </div>
                                <p class="description">
                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden...
                                </p>

                                <p class="more">
                                    <a href="#">read more</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="news">
                                <div class="img-figure">
                                    <!-- <div class="cat">fashion</div> -->
                                    <img src="{{ asset('uploads/news/news01_thumbnail.jpg') }}" class="img-responsive">
                                </div>

                                <div class="title">
                                    <h1>The start of the web and web design</h1>
                                </div>
                                <p class="description">
                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden...
                                </p>

                                <p class="more">
                                    <a href="#">read more</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>

                        <div class="pull-right" style="margin: 10px; 15px;">
                            <a href="#" class="btn btn-warning"><i class="fa fa-tags"></i> ข่าวทั้งหมด</a>
                        </div>

                    </div>
                </div>
            </div><!--/.col -->
        </div><!--/.container -->
        <!-- /.News -->

        <!-- Media -->
        <div class="container-fluid">

            <!-- Video -->
            <div class="col-md-6">
                <div class="panel panel-green" style="height: 800px;">
                    <div class="panel-heading"><i class="fa fa-film"></i> Video</div>
                    <div class="panel-body">
                        <div class="thumbnail">
                            <!-- <iframe width="100%" height="330" src="https://www.youtube.com/embed/es0JOur3qFk" frameborder="0" allowfullscreen></iframe> -->
                            <iframe width="100%" height="330" src="https://www.youtube.com/embed/U5MqzkO2STc" frameborder="0" allowfullscreen></iframe>
                            <iframe width="100%" height="330" src="https://www.youtube.com/embed/TB_ABaF0_RQ" frameborder="0" allowfullscreen></iframe>
                            <!--<object width="100%" height="100%">
                                <param name="movie" value="https://youtu.be/V4O4Z8kIeI8"></param>
                                <param name="wmode" value="transparent"></param>
                                <embed src="https://youtu.be/V4O4Z8kIeI8" type="application/x-shockwave-flash" wmode="transparent" width="100%" height="100%">
                                </embed>
                            </object>-->
                        </div>

                        <div class="readmore pull-right">
                            <a href="#" class="btn btn-warning"><i class="fa fa-tags"></i> ดูทั้งหมด</a>
                        </div>
                    </div>
                </div>
            </div><!--/.col -->
            <!-- /.Video -->

            <!-- Article -->
            <div class="col-md-6">
                <div class="panel panel-green" style="height: 800px;">
                    <div class="panel-heading"><i class="fa fa-stethoscope"></i> เกร็ดความรู้</div>
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                <img class="media-object img-thumbnail media-img-sm" src="{{ asset('uploads/logo-mnrh.jpg') }}" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">เผยผลวิจัย “สารสกัดขมิ้นชันกับการต้านอาการอักเสบในผู้ป่วยข้อเข่าเสื่อม”</h4>
                                <span class='text-muted'>(2013-05-20)</span>
                                รองศาสตราจารย์ แพทย์หญิงวิไล คุปต์นิรัติศัยกุล จากคณะแพทยศาสตร์ ศิริราชพยาบาล บรรยายพิเศษ หัวข้อ “Curcumin and its Anti-inflammatory Effect in Knee OA” “สารสกัดขมิ้นชันกับการต้านอาการอักเสบในผู้ป่วยข้อเข่าเสื่อม”...
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object img-thumbnail media-img-sm" src="{{ asset('uploads/logo-mnrh.jpg') }}" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">ไทยขาดความรู้โภชนาการ อ้วนตายปีละ2หมื่น !!</h4>
                                <span class='text-muted'>(2013-05-08)</span>
                                ปัญหาโรคอ้วนกับคนไทยมีระดับความรุนแรงเพิ่มขึ้นทุกปี จากข้อมูลล่าสุดของ สำนัก งานกองทุนสนับสนุนการสร้างเสริมสุขภาพ (สสส.) พบจำนวนคนไทยเป็นโรคอ้วนถึงปีละ 4 ล้านคน ติดอันดับ 5 ของภูมิภาคเอเชีย-แปซิฟิก...
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object img-thumbnail media-img-sm" src="{{ asset('uploads/logo-mnrh.jpg') }}" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">พบไวรัสก่อมะเร็งพื้นที่สาธารณะส้วม-ลิฟต์-บันได</h4>
                                <span class='text-muted'>(2013-06-12)</span>
                                รพ.รามาฯ สำรวจพบ ไวรัสก่อมะเร็งปากมดลูก องคชาต ทหารหนัก ตามห้องน้ำสาธารณะ ย้ำอย่าตื่น โอกาสติดจากใช้ห้องน้ำยาก แนะล้างมือให้สะอาด...
                            </div>
                        </div>

                        <div class="readmore pull-right">
                            <a href="#" class="btn btn-warning"><i class="fa fa-tags"></i> ดูทั้งหมด</a>
                        </div>

                    </div>
                </div>
            </div><!--/.col -->
            <!-- /.Article -->

        </div><!--/.container -->
        <!-- /.Media -->

        <!-- Gallery -->
        <div class="container-fluid" style="padding-top: 60px">
            <div class="col-md-12">

                <div class="gallery__header">
                    <h3>Gallery</h3>

                    <hr />
                </div>
            </div>

            <div class="row portfolio">

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img class="img-responsive" src="http://lorempixel.com/600/400/cats/?1" alt="The awesome description" data-toggle="modal" data-target="#myModal">
                        <div class="caption">
                            <p class="btn btn-default btn-xs btn-lg pull-right" rel="tooltip">
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart-o"></i>
                                <i class="fa fa-heart-o"></i>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img class="img-responsive" src="http://lorempixel.com/600/400/cats/?2" alt="The awesome description" data-toggle="modal" data-target="#myModal">
                        <div class="caption">
                            <p class="btn btn-default btn-xs btn-lg pull-right" rel="tooltip">
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart-o"></i>
                                <i class="fa fa-heart-o"></i>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img class="img-responsive" src="http://lorempixel.com/600/400/cats/?3" alt="The awesome description" data-toggle="modal" data-target="#myModal">
                                <div class="caption">
                            <p class="btn btn-default btn-xs btn-lg pull-right" rel="tooltip">
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart-o"></i>
                                <i class="fa fa-heart-o"></i>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img class="img-responsive" src="http://lorempixel.com/600/400/cats/?4" alt="The awesome description" data-toggle="modal" data-target="#myModal">
                        <div class="caption">
                            <p class="btn btn-default btn-xs btn-lg pull-right" rel="tooltip">
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart-o"></i>
                                <i class="fa fa-heart-o"></i>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img class="img-responsive" src="http://lorempixel.com/600/400/cats/?5" alt="The awesome description" data-toggle="modal" data-target="#myModal">
                        <div class="caption">
                            <p class="btn btn-default btn-xs btn-lg pull-right" rel="tooltip">
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart-o"></i>
                                <i class="fa fa-heart-o"></i>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img class="img-responsive" src="http://lorempixel.com/600/400/cats/?6" alt="The awesome description" data-toggle="modal" data-target="#myModal">
                        <div class="caption">
                            <p class="btn btn-default btn-xs btn-lg pull-right" rel="tooltip">
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart"></i>
                                <i class="fa fa-heart-o"></i>
                                <i class="fa fa-heart-o"></i>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="readmore pull-right">
                    <a href="#" class="btn btn-warning"><i class="fa fa-tags"></i> ดูทั้งหมด</a>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">Im the awesome cat!</h4>
                            </div>
                            <div class="modal-body">
                                <img class="img-responsive" src="http://lorempixel.com/600/400/cats/?42" alt="The awesome description">
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--/.row -->
        </div><!--/.container -->
        <!-- /.Gallery -->

        <!-- Research -->
        <!-- <div class="container-fluid">
            <div class="col-md-12">
                <div class="panel panel-green">
                    <div class="panel-heading"><i class="fa fa-file"></i> Research</div>
                    <div class="panel-body">
                        ...

                        <div class="readmore pull-right">
                            <a href="#" class="btn btn-warning"><i class="fa fa-tags"></i> ดูทั้งหมด</a>
                        </div>
                    </div>
                </div>
            </div> --><!--/.col -->
        <!-- </div> --><!--/.container -->
        <!-- /.Research -->

        <!-- Download -->
        <!-- <div class="container-fluid">
            <div class="col-md-12">
                <div class="panel panel-green">
                    <div class="panel-heading"><i class="fa fa-save"></i> Download</div>
                    <div class="panel-body">
                        ...

                        <div class="readmore pull-right">
                            <a href="#" class="btn btn-warning"><i class="fa fa-tags"></i> ดูทั้งหมด</a>
                        </div>
                    </div>
                </div>
            </div> --><!--/.col -->
        <!-- </div> --><!--/.container -->
        <!-- /.Download -->

        <!-- Webboard -->
        <!-- <div class="container-fluid">
            <div class="col-md-12">
                <div class="panel panel-green">
                    <div class="panel-heading"><i class="fa fa-comments"></i> Webboard</div>
                    <div class="panel-body">
                            ...
                    </div>
                </div>
            </div>--><!--/.col -->
        <!-- </div> --><!--/.container -->
        <!-- /.Webboard -->

    </div><!-- col left -->
    <!-- /.Left zone -->

    <!-- Right zone -->
    <div class="col-md-3">
        <!-- Manager -->
        <div class="container-fluid">
                <div class="panel panel-green">
                    <div class="panel-heading"><i class="fa fa-user"></i> หัวหน้ากลุ่มงาน</div>
                    <div class="panel-body">
                        <div class="manager">
                            <div class="manager-sidebar">
                                <!-- SIDEBAR PIC -->
                                <div class="manager-userpic">
                                    <img src="{{ asset('uploads/person/manager-128x128.jpg') }}" class="img-responsive" alt="">
                                </div>
                                <!-- END SIDEBAR PIC -->

                                <!-- SIDEBAR TITLE -->
                                <div class="manager-usertitle">
                                    <div class="manager-usertitle-name">
                                        พญ.สาวิตรี  วิษณุโยธิน
                                    </div>
                                    <div class="manager-usertitle-job">
                                        นายแพทย์ชำนาญการพิเศษ
                                    </div>
                                </div>
                                <!-- END SIDEBAR TITLE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.container -->
            <!-- Manager -->

            <!-- Calendar -->
            <div class="container-fluid">
                <div class="panel panel-green">
                    <div class="panel-heading"><i class="fa fa-calendar" aria-hidden="true"></i> Calendar</div>
                    <div class="panel-body">


                    </div>
                </div>
            </div><!--/.container -->
            <!-- /.Calendar -->

            <!-- Link -->
            <div class="container-fluid">
                <div class="panel panel-green">
                    <div class="panel-heading"><i class="fa fa-share-alt"></i> Link</div>
                    <div class="panel-body">
                        <div class="col-md-4">
                            <a href="#">
                            <img class='img-circle media-img-sm img-responsive' src="{{ asset('uploads/logo/moph1.png') }}" alt='กระทรวงสาธารณสุข' title="กระทรวงสาธารณสุข">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                            <img class='img-circle media-img-sm img-responsive' src="{{ asset('uploads/logo/kh.jpg') }}" alt='สำนักงานสาธารณสุขจังหวัดนครราชสีมา' title="สำนักงานสาธารณสุขจังหวัดนครราชสีมา">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                            <img class='img-circle media-img-sm img-responsive' src="{{ asset('uploads/logo/mnrh.jpg') }}" alt='user image' title="รพ.มหาราชนครราชสีมา">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                            <img class='img-circle media-img-sm img-responsive' src="{{ asset('uploads/logo/nhso.jpg') }}" alt='user image' title="สปสช.">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                            <img class='img-circle media-img-sm img-responsive' src="{{ asset('uploads/logo/sss.png') }}" alt='user image' title="สำนักงานประกันสังคม">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                            <img class='img-circle media-img-sm img-responsive' src="{{ asset('uploads/logo/cgd.jpg') }}" alt='user image' title="กรมบัญชีกลาง">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                            <img class='img-circle media-img-sm img-responsive' src="{{ asset('uploads/logo/thh.jpg') }}" alt='user image' title="สสส.">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                            <img class='img-circle media-img-sm img-responsive' src="{{ asset('uploads/logo/ha.gif') }}" alt='user image' title="สถาบันรับรองคุณภาพสถานพยาบาล">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                            <img class='img-circle media-img-sm img-responsive' src="{{ asset('uploads/logo/nr.png') }}" alt='user image' title="จังหวัดนครราชสีมา">
                            </a>
                        </div>
                    </div>
                </div>
            </div><!--/.container -->
            <!-- /.Link -->

            <!-- Social Network -->
            <!-- <div class="container-fluid">
                <div class="panel panel-green">
                    <div class="panel-heading"><i class="fa fa-facebook-square"></i> Social Network</div>
                    <div class="panel-body"> -->
                        <!-- Facebook -->
                        <!-- <div id="fb-root"></div> -->
                        <!-- <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) {return;}
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div id="fb-root"></div>
                        <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/th_TH/all.js#xfbml=1";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div class="fb-like-box" data-href="https://www.facebook.com/โรงพยาบาลเทพรัตน์นครราชสีมา-591788387504717" data-width="240" data-height="605" data-show-faces="true" data-stream="true" data-show-border="false" data-header="false"></div> -->
                        <!-- /.Facebook -->
                    <!-- </div>
                </div>
            </div> --><!--/.container -->
            <!-- /.Social Network -->

            <!-- Poll -->
            <!-- <div class="container-fluid">
                <div class="panel panel-green">
                    <div class="panel-heading"><i class="fa fa-check-square-o"></i> Poll</div>
                    <div class="panel-body">
                            <div class="col-md-12">
                                <h4 class="poll-topic">คำถาม ?</h4>

                                <form class="form">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                            คำตอบ 1
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                            คำตอบ 2
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                            คำตอบ 3
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                            คำตอบ 4
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <a href="#" class="btn btn-primary"><i class="fa fa-lock"></i> Vote </a>
                                        <a href="#">
                                            <i class="fa fa-user"></i> ดูผลโหวต
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div> --><!--/.container -->
            <!-- /.Poll -->

            <!-- Statistic -->
            <div class="container-fluid">
                <div class="panel panel-green">
                    <div class="panel-heading"><i class="fa fa-bar-chart-o"></i> Statistic</div>
                    <div class="panel-body">
                        <div class="col-md-12" style="text-align: center;">
                            <!-- Histats.com  START  (standard)-->
                            <script type="text/javascript">
                                document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));
                            </script>

                            <a href="http://www.histats.com" target="_blank" title="" >

                                <script  type="text/javascript" >
                                    try {
                                        Histats.start(1,2512835,4,605,110,55,"00011111");
                                        Histats.track_hits();
                                    } catch(err){

                                    };
                                </script>
                            </a>

                            <noscript>
                                <a href="http://www.histats.com" target="_blank">
                                    <img  src="http://sstatic1.histats.com/0.gif?2512835&101" alt="" border="0">
                                </a>
                            </noscript>
                            <!-- Histats.com  END  -->
                        </div>
                    </div>
                </div>
            </div><!--/.container -->
            <!-- /.Statistic -->

            <!-- Ads -->
            <!--<div class="container-fluid">
                <div class="panel panel-green">
                    <div class="panel-heading"><i class="fa fa-flag"></i> Ads here.</div>
                    <div class="panel-body">
                        ...
                    </div>
                </div>
            </div>--><!--/.container -->
            <!-- /.Ads -->

        </div><!--/.container -->

    </div><!-- col right -->
    <!-- Right zone -->

</div><!--/.container -->

@endsection
