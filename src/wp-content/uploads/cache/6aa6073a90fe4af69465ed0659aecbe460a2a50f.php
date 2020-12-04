<article <?php post_class() ?>>
  <header class="mb-5 pb-8 border-b">
    <h1 class="entry-title"><?php echo $project->name; ?></h1>
    <a href="#"><?php echo e($project->url); ?></a>

  </header>
  <div class="entry-content leading-normal">
    <section >
      <img class="mb-5 pb-8 border-b" src="<?php echo e($project->img->url); ?>" alt="<?php echo e($project->img->alt); ?>">
    
    </section>

    <section>
      <h2 class="mb-5 pb-8 border-b">Case Study</h2>
      <?php echo $project->case_study; ?>

    </section>

    <section>
      <h2 class="mb-5 pb-8 border-b">Solution</h2>
      <?php echo $project->delivery_solution; ?>

    </section>

    <section>
      <h2 class="mb-5 pb-8">FeedBack</h2>
      <?php echo $project->feedback; ?>

    </section>

  </div>
  

</article>
