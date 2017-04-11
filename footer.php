
<!-- end of content section -->
</section>

<!-- js bootrstrap 3 -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<footer class="footer">
    <div class="row">
        <div class="col-md-12 text-center">
            <?php
            if (!dynamic_sidebar('footer-left')) {
                printf(__('Powered by %s'), 'WordPress');
                echo ' / Laissez vous tenter, créez votre propre template !!';
            }
            ?>
        </div>
        <div class="col-md-12 footer-right text-center">
            <?php dynamic_sidebar('footer-right'); ?>
      </div>
    </div>
</footer>
