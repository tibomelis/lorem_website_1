<div class="p-5"></div>
<div class="ms-5">
    <a href="/index.php" class="py-2 px-3 custom-bg-blue text-white bold"><?= $back_button_txt ?></a>
</div>
<div class="container mt-5 all-images mx-auto">
    <?php foreach ($projects as $project): ?>
        <div class='hover-img popup-trigger'>
            <img class='project-img' src="<?= $project['src'] ?>">
            <div class="project-overlay"><p>Ultamate Design<span class='circle-icon'></span></p></div>
            <div class='pricetag-container'>
                <div class='top'>
                    <div class='p-1'>PRIJS</div>
                    <div class='price p-1'><?= $project['price'] ?></div>
                </div>
                <div class='bottom'>
                    <div class='left'></div>
                    <div class='right'></div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>