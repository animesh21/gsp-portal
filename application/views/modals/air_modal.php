<link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/jquery.fileuploader.css" />
<link href="<?php echo base_url() ?>assets/css/jquery.fileuploader-theme-onebutton.css" media="all" rel="stylesheet">
<style>
    .alert{
        height: 50px !important;
        padding:15px !important;
        font-weight: bold;
        border-radius: 0px;
    }
    .alert-success
    {
        border: 2px solid green;
    }
    .alert-danger
    {
        border: 2px solid red;
    }
</style>
<div id="airModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background: rgb(232, 101, 73); color:#fff;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload your files</h4>
            </div>

            <div class="modal-body" id="test">

            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.fileuploader.js"></script>
<script>
    //Get Data When Modal Open
    $("#airModal").on('shown.bs.modal', function (e) {
		var id = e.relatedTarget.dataset.id;
		$.get('<?php echo base_url('upload_files/getHtml') ?>', function (data) {
            $('#test').html(data);
			$('#Fules_bill').val(id);
			//alert($('#Fules_bill').val());
		});
    });
    //Remove Data When Modal Close
    $("#airModal").on("hidden.bs.modal", function () {
        $('#test').html("");
    });
</script>