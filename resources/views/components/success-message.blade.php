
@if(Session::has('success'))
<div class="row">
    <div class="col-lg-12">
        <div class="p-1 alert alert-success alert-dismissable p-md-2">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="fa fa-info-circle"></i> {{ Session::get('success') }}
        </div>
    </div>
</div>
@endif