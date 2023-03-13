@include('layouts.header')
<!-- BEGIN .main-heading -->
<header class="main-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="page-icon">
                    <i class="icon-users"></i>
                </div>
                <div class="page-title">
                    <h3>Client Detail</h3>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                <div class="daterange-container">
                    <a data-toggle="tooltip" class="btn btn-primary btn-sm btn-create"
                       href="{{ route('registration.index') }}"><i class="icon-eye"></i> List</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END: .main-heading -->
<!-- BEGIN .main-content -->

<div class="main-content">
    <div class="card">
        <div class="card-body">
            <div class="row gutters" >
                <?php foreach ($columns as $u){
                $destinationPath = public_path('/images/'.$u);
                    $imgs = [
                        'logo','member_one_image','member_two_image','member_three_image','member_four_image','member_five_image','ceo_image'
                    ];
                    ?>
                    @if (in_array($u, $imgs) && isset($user[$u]) && $user[$u] !== '' && !File::exists($destinationPath) && !is_dir($destinationPath))
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <p><strong>{{strtoupper(str_replace('_',' ', $u))}}</p>
                            <div class="form-group">
                                <!-- Gallery start -->
                                <div class="baguetteBoxThree gallery">
                                    <!-- Row start -->
                                    <div class="row gutters" id="selectedImage">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                                            @if ($user[$u] != '')
                                                <a href="{{ asset('assets/images/' . $user[$u]) }}" style="width: 186px; height: 186px;">
                                                    <img src="{{ asset('assets/images/' . $user[$u]) }}"
                                                         class="img-responsive">
                                                    <div class="overlay">
                                                        <span class="expand">+</span>
                                                    </div>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php
                        if($u == 'status'){
                            if ($user[$u] == 0) {
                                $val= 'InActive';
                            } else {
                                $val= 'Active';
                            }
                        }
                        else {
                            $val = $user[$u];
                        }
                        if(!in_array($u, $imgs)) {?>
                            <p><strong>{{strtoupper(str_replace('_',' ', $u))}}:</strong> {{$val}}</p>
                        <?php } ?>
                    </div>
                <?php } ?>
        </div>
    </div>
</div>
<!-- END: .main-content -->
@include('layouts.footer')

