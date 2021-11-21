@extends('layouts.profile_template')

@section('css')
<link rel="stylesheet" href="/css/croppie.css"/>

<!-- <link rel="stylesheet" href="/bootstrap-fileinput/bootstrap-fileinput.css"/> -->
<link rel="stylesheet" href="/bootstrap-fileupload/bootstrap-fileupload.css"/>

<script type="text/javascript" src="/js/croppie.min.js"></script>
<!-- <script type="text/javascript" src="/bootstrap-fileinput/bootstrap-fileinput.js"></script> -->
<script type="text/javascript" src="/bootstrap-fileupload/bootstrap-fileupload.js"></script>


@endsection

@section('content')
<div class="col-sm-7">
    <div class="">
        <div id="upload-image"></div>
        <div id="upload-image-i"></div>		
    </div>
    <div class="">
        <div class=""></div>
        <div class="">
            <div id="upload-image"></div>
            <div id="upload-image-i"></div>
            <div style="text-align:center !important;">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <span class="btn default btn-file">
                        <span class="fileupload-new">
                            <i class="fa fa-paper-clip"></i> Select file
                        </span>
                        <span class="fileupload-exists">
                            <i class="fa fa-undo"></i> Change
                        </span>
                        <input type="file" name="image" id="images" class="default"/>
                    </span>
                    <span class="fileupload-preview" style="margin-left:5px;">
                    </span>
                    <button class="contacts-send cropped_image ">Upload</button>		
                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                </div>
            </div>				
        </div>	
       
    </div>
</div>
<script>
$(document).ready(function(){
	$image_crop = $('#upload-image').croppie({
        enableExif: true,
        viewport: {
            width: 200*2,
            height: 200*2,
            type: 'circle'
        },
        boundary: {
            width: 200*2 + 20,
            height: 200*2 + 20
        }
    });
	$image_crop.croppie('bind', {
		url: "/upload/images/default.png"
	}).then(function(){
		console.log('jQuery bind complete');
	});	
    $('#images').on('change', function () { 
        var reader = new FileReader();
        reader.onload = function (e) {
            $image_crop.croppie('bind', {
                url: e.target.result
            }).then(function(){
                console.log('jQuery bind complete');
            });			
        }
        reader.readAsDataURL(this.files[0]);
    });
    $('.cropped_image').on('click', function (ev) {
		
        $image_crop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (response) {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': '{!! csrf_token() !!}'}
			});
            $.ajax({
                url: "/profile/update_img",
                type: "POST",
                data: {"image":response },
                success: function (res) {
                    data = JSON.parse(res);
                    if(data.status == "success"){
										    location.href = "/profile/index"
										} else {
											alert(data.content);
										}
                }
            });
        });
    });
});
</script>
@endsection