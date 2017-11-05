function validate() {
    var form = document.getElementById("postForm");
    var name = document.getElementById('name');
    var description = document.getElementById('description');
    form.action = "<?= base_url() . 'index.php/album/saveAlbum'?>";
    form.submit();
}