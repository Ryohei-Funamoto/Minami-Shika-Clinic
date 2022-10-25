<li class="staff-group__item p-staff-card">
  <?php if (has_post_thumbnail()) : ?>
    <figure class="p-staff-card__image js-anime-target">
      <?php the_post_thumbnail(); ?>
    </figure><!-- /.p-staff-card__image -->
  <?php endif; ?>
  <div class="p-staff-card__body js-anime-target">
    <h4 class="p-staff-card__name"><span class="p-staff-card__name--small"><?php echo esc_html(get_the_terms(get_the_ID(), 'staff_job')[0]->name); ?></span><?php the_title(); ?></h4>
    <dl class="p-staff-card__profile p-staff-profile">
      <?php
      $staff_hometown = get_field_object('staff_hometown');
      if ($staff_hometown) :
      ?>
        <div class="p-staff-profile__item">
          <dt class="p-staff-profile__term"><?php echo $staff_hometown['label']; ?></dt>
          <dd class="p-staff-profile__description"><?php echo $staff_hometown['value']; ?></dd>
        </div><!-- /.p-staff-profile__item -->
      <?php
      endif;
      $staff_hobby = get_field_object('staff_hobby');
      if ($staff_hobby) :
      ?>
        <div class="p-staff-profile__item">
          <dt class="p-staff-profile__term"><?php echo $staff_hobby['label']; ?></dt>
          <dd class="p-staff-profile__description"><?php echo $staff_hobby['value']; ?></dd>
        </div><!-- /.p-staff-profile__item -->
      <?php
      endif;
      $staff_favourite_food = get_field_object('staff_favourite_food');
      if ($staff_favourite_food) :
      ?>
        <div class="p-staff-profile__item">
          <dt class="p-staff-profile__term"><?php echo $staff_favourite_food['label']; ?></dt>
          <dd class="p-staff-profile__description"><?php echo $staff_favourite_food['value']; ?></dd>
        </div><!-- /.p-staff-profile__item -->
      <?php
      endif;
      ?>
    </dl><!-- /.p-staff-card__profile p-staff-profile -->
  </div><!-- /.p-staff-card__body -->
</li><!-- /.staff-group__item p-staff-card -->