<body class="app"> 
    <div class="peers ai-s fxw-nw h-100vh">
        <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image:url(<?=base_url('assets/static/images/bg.jpg')?>)">
            <div class="pos-a centerXY">
                <div class="bgc-white bdrs-50p pos-r" style="width:120px;height:120px"><img class="pos-a centerXY" src="<?=base_url('assets/logo/logo-esdm.png');?>" alt="" width="100px"
                    ></div>
            </div>
        </div>
        <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
            <h4 class="fw-300 c-grey-900 mB-40">Login</h4>
            <form>
                <div class="form-group">
                    <label class="text-normal text-dark">Username / Email</label>
                    <input type="email" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label class="text-normal text-dark">Password</label>
                    <input type="password" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <div class="peers ai-c jc-sb fxw-nw"> 
                        <div class="peer">
                            <button class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="./vendor.js"></script>
    <script type="text/javascript" src="./bundle.js"></script>
</body>

</html>
