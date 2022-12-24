<?php
if($tam=='xoa1'){
    $xoa1=$_GET['xoa1'];
?>
<div id="modal-container">
    <div id="modal">
        <div class="modal-header">
            <h5>Bạn có muốn xóa không</h5>
            <a href="?capnhat" id="btn-close"><i class="fa-solid fa-xmark"></i></a>
        </div>
        <div class="modal-body">
            <a href="?xoa=<?php echo $xoa1 ?>"class="btn btn-danger">Xóa</a>
            <a href="?capnhat" class="btn btn-primary">Không</a>
        </div>
    </div>
</div>
<?php
}
?>