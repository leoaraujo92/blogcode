<?php
include_once('templates/header.php');

    if(isset($_GET['id'])){

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?=$currentPost['title']?></h1>
            <p id="post-description"><?=$currentPost['description']?></p>
            <div class="img-container">
                <img src="<?=$BASE_URL?>img/<?=$currentPost['img']?>" alt="">
            </div>
            <p class="post-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus libero sed ad debitis incidunt distinctio aperiam necessitatibus veniam repellat, vitae laborum perspiciatis unde dolore obcaecati amet consectetur, ratione sequi est.
                Maiores reprehenderit repellendus adipisci quod fugit amet quia? Cum tempore natus dolorem sunt quis possimus a, eius mollitia non, sint rerum voluptatem eaque illum sequi? Eveniet, explicabo? Incidunt, ut eveniet.
                Non magni cupiditate ea, officiis quisquam saepe libero sit debitis corrupti ducimus. Delectus, velit! Aut, molestias blanditiis, voluptas, accusantium esse temporibus dicta labore nesciunt iure debitis accusamus id odit corrupti.
                Quibusdam rem doloremque tenetur aliquam, temporibus amet magnam aut molestias. Debitis cumque nisi illum a tempore exercitationem possimus doloribus ratione laborum, doloremque maxime, eius asperiores velit fugiat, odit eaque in?
                Nulla quasi tenetur ad dolorum! Vel, sequi. Delectus corrupti quisquam velit asperiores aspernatur odio magnam exercitationem doloribus quae qui! Non praesentium inventore magni accusamus ipsum quasi dolore fugiat quia omnis.
            </p>
        </div>

        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tags-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?=$tag?></a></li> 
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?=$category?></a></li> 
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>



<?php
include_once('templates/footer.php')
?>