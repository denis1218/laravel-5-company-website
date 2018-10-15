@if($errors->any())
    <script type="text/javascript">
        toastr.error('Task ont succeeded','Error Alert',{timeOut:3000})
    </script>
@endif

@if($message=Session::get('success'))
    <script type="text/javascript">
        toastr.success(<?php echo $message; ?>,'Success Alert',{timeOut:3000})
    </script>
    <?php Sessoin::forget('success'); ?>
@endif