<li <?php
    $medical_id = get_field('medical_id');
    if ($medical_id) {
      echo 'id="' . $medical_id . '"';
    }
    ?> class="medical-intro__item p-medical-intro-card js-anime-target">
  <span class="p-medical-intro-card__label <?php echo $args['label_modifier']; ?>"><?php echo $args['label_text']; ?></span>
  <div class="p-medical-intro-card__head">
    <h3 class="p-medical-intro-card__title"><?php the_title(); ?></h3>
    <?php
    $medical_worries = get_field('medical_worries');
    if ($medical_worries) :
    ?>
      <span class="p-medical-intro-card__subtitle"><?php echo $medical_worries; ?></span>
    <?php endif; ?>
  </div><!-- /.p-medical-intro-card__head -->
  <div class="p-medical-intro-card__body">
    <?php
    $medical_overview = get_field('medical_overview');
    if ($medical_overview) :
    ?>
      <p class="p-medical-intro-card__description">
        <?php echo $medical_overview; ?>
      </p>
    <?php endif; ?>
    <?php if (has_post_thumbnail()) : ?>
      <figure class="p-medical-intro-card__image">
        <?php the_post_thumbnail(); ?>
      </figure><!-- /.p-medical-intro-card__image -->
    <?php endif; ?>
  </div><!-- /.p-medical-intro-card__body -->
</li><!-- /.medical-intro__item p-medical-intro-card -->