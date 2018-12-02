<?php 
    global $post;
    global $size;
    $galery = get_field('galerie_photo', $post);
    $date = strtotime($post->post_date);
    setlocale (LC_TIME, 'fr_FR','fra'); 
?>

<a href="<?php echo get_permalink($post);?>">
    <div class="news-wrapper">
        <span class="date"><?php echo strftime('%d %B %Y', $date);?></span>
        <h2><?php echo $post->post_title;?></h2>
        <button class="bt-arrow">
           <i></i>Lire l'article
        </button>
    </div>
    <div class="img-wrapper">
        <img src="<?php echo $galery[0]['sizes'][$size];?>" alt="<?php echo $galery['alt'];?>">
    </div>
</a>