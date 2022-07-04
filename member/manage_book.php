<?php
include 'db_connect.php';
if(isset($_GET['id'])){
$book = $conn->query("SELECT * FROM books where id=".$_GET['id'])->fetch_assoc();
foreach($book as $k => $v){
    $meta[$k] = $v;
}
}
?>
<div class="container-fluid">
    <form action="" id="manage_book">
        <div class=" mt-3">
            <label for="title"  >Title</label>
        <input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id'] : "" ?>">
            <input type="text" id="title" name="title" class="form-control" value="<?php echo isset($meta['title']) ? $meta['title'] : "" ?>" disabled>
        </div>
        <div class=" mt-3">
            <label for="author"  >Author</label>
            <input type="text" id="author" name="author" class="form-control" value="<?php echo isset($meta['author']) ? $meta['author'] : "" ?>" disabled>
        </div>
        <div class="">
            <label for="description">Description</label>
            <textarea id="description" class="md-textarea form-control" rows="2" name="description" disabled><?php echo isset($meta['description']) ? $meta['description'] : "" ?></textarea>
        </div>
        <div class="">
            <label for="location">Book Location</label>
            <textarea id="location" class="md-textarea form-control" rows="2" name="location" disabled><?php echo isset($meta['location']) ? $meta['location'] : "" ?></textarea>
        </div>
        <div class='mt-3'>
            <img src="<?php echo isset($meta['img_path']) ? $meta['img_path'] : "" ?>" alt="" id="img-field">
        </div>
    </form>
</div>
<style>
#img-field{
    max-height:250px;
    max-width:200px;
}
</style>