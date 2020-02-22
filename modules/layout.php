<?php
// This class contains all the things we're gonna be using in our HTML more than once. Basic things like the header, navbar and footer.
// You can, of course, remove any of these, if you do not need them
class Layout
{
    use Singleton;
    public function header()
    {
        ?>
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" type="text/css" href="/vendor/bootstrap-4.3.1/bootstrap.min.css">

            <!-- Adding the Config::i()->getVersion() thing makes caching way easier to deal with. In development mode, the version will be a randomized string on each visit, to completely bypass the cache -->
            <link rel="stylesheet" type="text/css" href="/assets/css/app.css?v=<?=Config::i()->getVersion()?>">
            <title><?=Config::i()->getName()?></title>
        </head>
        <?php
    }
    public function nav()
    {
        ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><?=Config::i()->getName()?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </nav>
        <?php
    }
    public function footer()
    {
        ?>
            <footer class="mt-auto text-center text-muted">
                <!-- Didn't know what to add in this footer so whatever -->
                <p>© <?=Config::i()->getName()?> <?=Config::i()->getEstDate()?> - <?=date("Y")?></p>
            </footer>
            <script src="/vendor/jquery-3.4.1/jquery.min.js"></script>
            <script src="/vendor/popper-1.14.7/popper.min.js"></script>
            <script src="/vendor/bootstrap-4.3.1/bootstrap.min.js"></script>
        <?php
    }
    public function error($Title, $Message = null)
    {
        echo '<head></head>';
        echo '<body style="text-align: center;">';
        echo '<h1>'.$Title.'</h1>';
        echo '<p>'.(isset($Message) ? $Message : 'No message provided').'</p>';
        echo '</body>';
    }
}