<div class="col-md-12">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" >Search</span>
                </div>
                <input type="text" class="form-control" id="filter">
            </div>
        </div>
    </div>
</div>
<?php 

    $books = $conn->query("SELECT * FROM books order by `location` asc ");
    while($row=$books->fetch_assoc()){
?>
<div class="col-md-12 books-field" id="">
    <div class="card card-cascade wider ml-1 mr-1 float-left" style="width:20%">
        <div class="view view-cascade overlay">
            <?php  if(empty($row['img_path'])): ?>
        <img class="card-img-top" src="./../assets/img/book.jpg" alt="Card image cap">
            <?php  else: ?>
        <img class="card-img-top" src="<?php echo $row['img_path'] ?>" alt="Card image cap">
            <?php  endif; ?>
        <a href="#!">
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>

        <div class="card-body card-body-cascade text-center pb-0">

        <h4 class="card-title"><strong><?php echo $row['title'] ?></strong></h4>
        <h5 class="blue-text pb-2"><strong><?php echo $row['author'] ?></strong></h5>
        <p class="card-text text-truncate"><?php echo $row['description'] ?></p>

        <div class="card-footer text-muted text-center mt-1">
            <button class="btn btn-sm btn-primary detail_book" data-id="<?php echo $row['id'] ?>"><i class="fa fa-plus"></i> Detail</button>
        </div>

        </div>

    </div>
</div>
    <?php } ?>
<script>
$('.detail_book').click(function(){
    uni_modal('Detail Book','manage_book.php?id='+$(this).attr('data-id'))
})
$(document).ready(function(){
    $('#filter').on('keyup', function(){
        var _field = $('.books-field')
        var filter = $(this).val().toLowerCase()
        _field.each(function(){
            var title = $(this).find('.card-title strong').text()
            var author = $(this).find('.blue-text strong').text()
            var description = $(this).find('.card-text').text()
           title =  title.toLowerCase();
           author =  author.toLowerCase();
          description =   description.toLowerCase();

        })
    })
})
</script>